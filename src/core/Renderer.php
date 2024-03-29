<?php
namespace Songhub\core;

class Renderer
{
    private static $instance;
    public string $viewsDirectory;

    private function __construct()
    {
        $this->viewsDirectory = __DIR__ . "/../app/views/";
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function home()
    {
        $title = "Inicio";
        $style = "home";
        require $this->viewsDirectory . "home.view.php";
    }

    public function login($error = "")
    {
        $title = "Iniciar sesión";
        $style = "login";
        require $this->viewsDirectory . "login.view.php";
    }

    public function register($error = "")
    {
        $title = "Registrarme";
        $style = "register";
        require $this->viewsDirectory . "register.view.php";
    }

    public function notFound()
    {
        http_response_code(404);
        $errorType = '404';
        $errorMessage = "PAGE NOT FOUND";
        $style = "error";
        $title = "404";
        require $this->viewsDirectory . "error.view.php";
    }

    public function internalError()
    {
        http_response_code(500);
        $errorType = '500';
        $errorMessage = 'INTERNAL SERVER ERROR';
        $style = "error";
        $title = "500";
        require $this->viewsDirectory . "error.view.php";
    }
}