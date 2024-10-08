<?php

namespace Songhub\core;

class Request
{
    private static $instance;
    private function __construct()
    {}

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function path()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    public function httpMethod()
    {
        return parse_url($_SERVER['REQUEST_METHOD'], PHP_URL_PATH);
    }

    public function route()
    {
        return [
            $this->path(),
            $this->httpMethod(),
        ];
    }

    public function protocol()
    {
        return isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
    }
    
    public function host()
    {
        return $_SERVER['HTTP_HOST'];
    }

    public function getParameter(string $key, string $http_method = "GET")
    {
        switch (strtoupper($http_method)) {
            case 'GET':
                return htmlspecialchars($_GET[$key] ?? null, ENT_QUOTES);
            case 'POST':
                return htmlspecialchars($_POST[$key] ?? null, ENT_QUOTES);
            case 'PUT':
            case 'PATCH':
                $input = file_get_contents('php://input');
                $data = json_decode($input, true);
                return htmlspecialchars($data[$key] ?? null, ENT_QUOTES);
            default:
                return null;
        }
    }

    // Función para generar respuestas genéricas
    public static function sendResponse(int $code, string $message, array $data = [])
    {
        header('Content-Type: application/json');
        http_response_code($code);
        echo json_encode([
            "success" => $code >= 200 && $code < 300, // Considera como éxito si el código es entre 200 y 299
            "message" => $message,
            "data" => $data
        ]);
        exit();
    }

}