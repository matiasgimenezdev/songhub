<?php
namespace Songhub\App\Controllers;

use Songhub\app\repositories\FavoriteRepository;
use Songhub\core\Controller;
use Songhub\core\Request;

class FavoriteController extends Controller
{
    public function __construct()
    {
        $this->repositoryName = FavoriteRepository::class;
        parent::__construct();
    }   

    private function getCurrentUserId() {
        return $this -> repository -> getCurrentUserId();
    }
    
    public function addFavoriteContent() {
        $userId = $this -> getCurrentUserId();
        $contentId = $this->sanitizeUserInput(Request::getInstance()->getParameter("content_id", "POST"));

        echo "<pre>";
        var_dump($userId, $contentId);
        die;
    }

    public function getCurrentUserFavoriteContent() {
        $userId = $this -> getCurrentUserId();


        $userFavoriteContent = $this->repository->getCurrentUserFavoriteContent($userId);

        header('Content-Type: application/json');
        echo json_encode($userFavoriteContent);
        exit;
    }

}