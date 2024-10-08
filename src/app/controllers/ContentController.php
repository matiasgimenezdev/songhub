<?php

namespace Songhub\App\Controllers;

use Songhub\core\Controller;
use Songhub\core\Renderer;
use Songhub\core\Request;
use Songhub\core\Session;
use Songhub\core\HttpClient;
use Songhub\app\repositories\ContentRepository;
use Songhub\app\controllers\ArtistController;
use Songhub\app\controllers\CoverController;
use Songhub\app\repositories\UserRepository;

class ContentController extends Controller
{

    private $access_token = "";

    public function __construct()
    {
        $this->repositoryName = ContentRepository::class;
        parent::__construct();        
    }


    public function existsContent($content_id) {
        
        $content = $this->queryBuilder->selectByColumn($this->table, "CONTENT_ID", $content_id);

        if (empty($content)) {
            return false;
        } else {
            return true;
        }
    }

    public function content()
    {
        if(is_null(Session::getInstance()->get("access_token"))) {
            Renderer::getInstance()->login();
            exit;
        }

        $id = $this->sanitizeUserInput(Request::getInstance()->getParameter("id", "GET"));
        $type = $this->sanitizeUserInput(Request::getInstance()->getParameter("type", "GET"));
        $content = $this->fetchContentData($id, $type);
        $stats = $this->repository->getAverageRating($id);
        $userInstance = $this->getCurrentUser();
        $posts = $this->repository->getContentPosts($userInstance->fields["USER_ID"], $id);
     
        Renderer::getInstance()->content($content, $posts["relevant"], $posts["recent"], $stats["average"], $stats["count"]);
    }

    public function getCurrentUser()
    {
        $userRepository = new UserRepository();

        $currentUser = $userRepository->getUser("USERNAME", Session::getInstance()->get("username"));

        return $currentUser;
    }

    public function getContentData() {
        $id = $this->sanitizeUserInput(Request::getInstance()->getParameter("id", "GET"));
        $type = $this->sanitizeUserInput(Request::getInstance()->getParameter("type", "GET"));
        
        $content = $this->fetchContentData($id, $type);

        if(!$this->repository->existsContent($content)) {
            $this->createContent($content);
        }

        ob_clean();
        header('Content-Type: application/json');
        echo json_encode($content);
        exit;
    }


    public function fetchContentData($id, $type)
    {
        $this->access_token = Session::getInstance()->get("access_token");
        
        if($type == "album") {
            $response = HttpClient::getInstance()->get("https://api.spotify.com/v1/albums/".$id, [], ["Authorization" => "Bearer " . $this->access_token]);
            $body = json_decode($response["body"], true);
            $status = $response["status"];
            
            if ($status >= 300) {
                Renderer::getInstance()->internalError();
                die;
            }

            $album = [
                "album_id" => $body["id"],
                "type" => "album",
                "artist_name" => $body["artists"][0]["name"],
                "artist_id" => $body["artists"][0]["id"],
                "artist_spotify_url" =>$body["artists"][0]["external_urls"]["spotify"],
                "artist_api_url" => $body["artists"][0]["href"],
                "album_spotify_url" => $body["external_urls"]["spotify"],
                "album_api_url" => $body["href"],
                "images" => $body["images"],
                "album_name" => $body["name"],
                "release_date" => $body["release_date"],
            ];

            $response = HttpClient::getInstance()->get("https://api.spotify.com/v1/artists/".$album["artist_id"], [], ["Authorization" => "Bearer " . $this->access_token]);
            $body = json_decode($response["body"], true);
            $status = $response["status"];

            if ($status >= 300) {
                Renderer::getInstance()->internalError();
                die;
            }
          
            $album["artist_avatar_url"] = $body["images"][1]["url"];

            return $album;
        }
        
        $response = HttpClient::getInstance()->get("https://api.spotify.com/v1/tracks/".$id, [], ["Authorization" => "Bearer " . $this->access_token]);
        $body = json_decode($response["body"], true);
        $status = $response["status"];
        

        $track = [
            "album_id" => $body["album"]["id"],
            "type" => "track",
            "artist_name" => $body["album"]["artists"][0]["name"],
            "artist_id" => $body["album"]["artists"][0]["id"],
            "artist_spotify_url" => $body["album"]["artists"][0]["external_urls"]["spotify"],
            "artist_api_url" => $body["album"]["artists"][0]["href"],
            "album_spotify_url" => $body["album"]["external_urls"]["spotify"],
            "album_api_url" => $body["album"]["href"],
            "images" => $body["album"]["images"],
            "album_name" => $body["album"]["name"],
            "release_date" => $body["album"]["release_date"],
            "track_spotify_url" => $body["external_urls"]["spotify"],
            "track_api_url" => $body["href"],
            "track_id" => $body["id"],
            "track_name" => $body["name"],
            "track_preview_url" => $body["preview_url"] ?? null,
        ];

        $response = HttpClient::getInstance()->get("https://api.spotify.com/v1/artists/" . $track["artist_id"], [], ["Authorization" => "Bearer " . $this->access_token]);
        $body = json_decode($response["body"], true);
        $status = $response["status"];

        
        if ($status >= 300) {
            Renderer::getInstance()->internalError();
            die;
        }

        $track["artist_avatar_url"] = $body["images"][1]["url"];

        return $track;

        
    }
    
    private function createContent($contentData)
    {   

        $artistController = new ArtistController();
        $artistController->createArtist($contentData);
        
        $coverController = new CoverController();
        $coverController->createCover($contentData);
        
        $this->repository->createContent($contentData);
    }

}
