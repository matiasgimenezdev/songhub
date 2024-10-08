<?php
namespace Songhub\core;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;


class Renderer
{
    private static $instance;
    public string $viewsDirectory;
    private Environment $templateLoader;

    private function __construct()
    {
        $this->viewsDirectory = __DIR__ . "/../app/views/";
        $loader = new FilesystemLoader(__DIR__."/../app/views/");
        $this -> templateLoader = new Environment($loader, [
            'cache' => __DIR__."/../../cache/twig",
        ]);
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function home($isLoggedIn, $posts = [])
    {
        $username = $this->getUsername();
        $template = $this->templateLoader->load('home.twig');

        echo $template->render([
            'title' => "Inicio",
            'style' => "home",
            'posts' => $posts,
            'username' => $username,
            "currentUrl" => "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"],
            'show_footer' => false, 
            "show_header" => true,
            "show_feed" => $isLoggedIn
        ]);
    }

    public function login($message = "", $error = false, $email="")
    {
        $template = $this->templateLoader->load('login.twig');
        echo $template->render(['title' => 'Iniciar sesión', 'style' => 'login', "currentUrl" => "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], "show_footer" => false, "show_header" => false, "error" => $error, "message" => $message, "email" => $email]);
    }

    public function register($message = "", $error = false, $currentUserData = null)
    {
        $template = $this->templateLoader->load('register.twig');
        echo $template->render(['title' => 'Registrarme', 'style' => 'register', "currentUrl" => "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], "show_footer" => false, "show_header" => false, "error" => $error, "message" => $message, "currentUserData" => $currentUserData]);
    }
    
    public function following($following, $currentUser)
    {
        $username = $this->getUsername();

        $template = $this->templateLoader->load('following.twig');
        echo $template->render(['title' => 'Seguidos', 'style' => 'follow', 'currentUser' => $currentUser, 'username' => $username, "following" => $following, "currentUrl" => "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], "show_footer" => false, "show_header" => true]);
    }

    public function followers($followers, $currentUser)
    {
        $username = $this->getUsername();

        $template = $this->templateLoader->load('followers.twig');
        echo $template->render(['title' => 'Seguidores', 'style' => 'follow', 'currentUser' => $currentUser, 'username' => $username,"followers" => $followers, "currentUrl" => "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], "show_footer" => false, "show_header" => true]); 
    }
    
    public function explore($recentActivity, $newReleases, $recommendations, $userTopTracks, $username)
    {
        $title = "Explorar";
        $style = "explore";

        $template = $this->templateLoader->load('explore.twig');

        echo $template->render([
            'title' => $title,
            'style' => $style,
            'username' => $username,
            'recentActivity' => $recentActivity,
            'recommendations' => $recommendations,
            'userTopTracks' => $userTopTracks,
            'newReleases' => $newReleases,
            "currentUrl" => "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"],
            'show_footer' => true, 
            "show_header" => true
        ]);
    }

    public function content($content, $mostRelevantPosts, $mostRecentPosts, $averageRating, $postsCount)
    {
        $title = ucfirst($content["type"] ?? "Contenido");
        $style = "content";
        $username = $this->getUsername();

        $template = $this->templateLoader->load('content.twig');

        echo $template->render([
            'title' => $title,
            'style' => $style,
            'content' => $content,
            'mostRelevantPosts' => $mostRelevantPosts,
            'mostRecentPosts' => $mostRecentPosts,
            'averageRating' => $averageRating,
            'postsCount' => $postsCount,
            'username' => $username,
            "currentUrl" => "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"],
            'show_footer' => false, 
            "show_header" => true
        ]);
    }

    public function post($post, $currentUser)
    {
        $username = $this->getUsername();

        $template = $this->templateLoader->load('post.twig');

        echo $template->render([
            'title' => "Post",
            'style' => "post",
            'username' => $username,
            'post' => $post,
            'currentUser' => $currentUser,
            "currentUrl" => "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"],
            'show_footer' => false, 
            "show_header" => true
        ]);
    }

    public function notFound()
    {
        http_response_code(404);
        $type = '404';
        $message = "RESOURCE NOT FOUND";
        $username = $this->getUsername();

        $template = $this->templateLoader->load('error.twig');
        echo $template->render(['message' => $message,'type' => $type, 'title' => 'Not found', 'style' => 'error', "currentUrl" => "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], "show_footer" => true, "show_header" => true, "username" => $username]);
    }

    public function internalError()
    {
        http_response_code(500);
        $type = '500';
        $message = 'INTERNAL SERVER ERROR';
        $username = $this->getUsername();

        $template = $this->templateLoader->load('error.twig');
        echo $template->render(['message' => $message,'type' => $type, 'title' => 'Server error', 'style' => 'error', "currentUrl" => "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], "show_footer" => true, "show_header" => true, "username" => $username]);
    }

    public function edit_password($message = "")
    {
        $username = $this->getUsername();

        $template = $this->templateLoader->load('edit-password.twig');
        echo $template->render(['title' => 'Configuración', 'style' => 'edit-password', "message" => $message, "currentUrl" => "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], "show_footer" => true, "show_header" => true, "username" => $username]);
    }

    public function password_recovery($message = "", $error = false, $confirmation = false)
    {
        $template = $this->templateLoader->load('password-recovery.twig');
        echo $template->render(['title' => 'Configuración', 'style' => 'password-recovery', "message" => $message, "currentUrl" => "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], "show_footer" => true, "show_header" => true, "username" => null, "confirmation" => $confirmation, "error"=>$error]);
    }
    
    public function terms_conditions()
    {
        $username = $this->getUsername();

        $template = $this->templateLoader->load('terms-conditions.twig');
        echo $template->render(['title' => 'Términos y condiciones', 'style' => 'terms-conditions', "currentUrl" => "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], "show_header" => true, "show_footer" => true, "username" => $username]);
    }
    

    public function profile($user, $country, $posts, $following, $followers, $favorites, $isFollowing, $message, $postsCount)
    {
        $title = "Perfil";
        $style = "profile";
        $username = $this->getUsername();

        $template = $this->templateLoader->load('profile.twig');

        echo $template->render([
            'title' => $title,
            'style' => $style,
            'country' => $country,
            'posts' => $posts,
            'user' => $user,
            'username' => $username,
            'following' => $following,
            'followers' => $followers,
            'postsCount' => $postsCount,
            'favorites' => $favorites,
            'isFollowing' => $isFollowing,
            "currentUrl" => "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"],
            'message' => $message,
            'show_footer' => false, 
            "show_header" => true
        ]);

    }
    
    public function edit($user, $userNationality, $countries, $favorites, $message)
    {
        $title = "Editar perfil";
        $style = "edit-profile";
        $username = $this->getUsername();

        $template = $this->templateLoader->load('edit-profile.twig');

        echo $template->render([
            'title' => $title,
            'style' => $style,
            'username' => $username,
            'favorites' => $favorites,
            'user' => $user,
            'countries' => $countries,
            'userNationality' => $userNationality,
            'message' => $message,
            "currentUrl" => "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"],
            'show_footer' => false, 
            "show_header" => true
        ]);
    }

    private function isAuthenticated () {
        return !is_null(Session::getInstance()->get("access_token"));
    } 

    private function getUsername () {        
        $is_authenticated = $this->isAuthenticated();
        $username = null;

        if($is_authenticated) {
            $username = Session::getInstance()->get("username");
        }
        
        return $username;
    } 
}