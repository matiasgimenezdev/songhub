<?php

namespace Songhub\core;

use Songhub\core\Cookie;

class Session
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

    private function start()
    {
        if (!$this->isActive()) {
            session_start();
        }
    }

    public function destroy()
    {
        $this->start();

        $_SESSION = [];
        $_SESSION["username"] = null;
        $_SESSION["user_login_identifier"] = null;

        Cookie::getInstance()->delete(session_name());
        Cookie::getInstance()->delete("user_login_identifier");
        Cookie::getInstance()->delete("username");

        session_destroy();
    }

    public function set($key, $value)
    {
        $this->start();
        $_SESSION[$key] = $value;
    }

    public function get($key)
    {
        $this->start();
        return $_SESSION[$key] ?? null;
    }

    public function getAccessToken()
    {
        // Verificar si el access token está presente y no ha expirado
        if (isset($_SESSION['access_token']) && isset($_SESSION['access_token_expire_time']) && time() < $_SESSION['access_token_expire_time']) {
            return $this->get("access_token");
        } else {
            return null;
        }
    }

    public function exists($key)
    {
        $this->start();
        return isset($_SESSION[$key]);
    }

    public function isActive()
    {
        return session_status() === PHP_SESSION_ACTIVE;
    }

}