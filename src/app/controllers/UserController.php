<?php
namespace Songhub\App\Controllers;

use Songhub\app\repositories\UserRepository;
use Songhub\core\Controller;
use Songhub\core\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->repositoryName = UserRepository::class;
        parent::__construct();
    }

    public function profile()
    {
        $username = Request::getInstance()->getParameter("username", "GET");
        $user = $this->repository->getUser($username);
        $title = "Perfil";
        $style = "profile";
        require $this->viewsDirectory . "profile.view.php";
    }
    public function edit()
    {
        $title = "Editar perfil";
        $style = "edit-profile";
        require $this->viewsDirectory . "edit-profile.view.php";
    }

    public function createUser()
    {
    }
    public function updateUser()
    {
    }

}