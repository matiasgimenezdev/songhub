<?php

require __DIR__ . "/../vendor/autoload.php";

use Songhub\core\Config;
use Songhub\core\database\ConnectionBuilder;
use Songhub\core\LoggerBuilder;
use Songhub\core\Request;
use Songhub\core\Router;

$request = Request::getInstance();

$config = Config::getInstance();

$connectionBuilder = ConnectionBuilder::getInstance();
$connection = $connectionBuilder->getConnection();

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router = new Router();
$logger = LoggerBuilder::getInstance()->getLogger();
$router->setLogger($logger);
$router->get('/', 'PageController@home');
$router->get('/login', 'PageController@login');
$router->get('/register', 'PageController@register');
$router->get('/post', 'PageController@post');

$router->get('/explore', 'ExploreController@explore');

$router->get('/content', 'ContentController@content');

$router->post('/login', 'AuthController@login');
$router->get('/logout', 'AuthController@logout');
$router->post('/register', 'AuthController@register');
$router->get('/spotify/tokens', 'AuthController@requestSpotifyTokens');

$router->get('/user', 'UserController@profile');
$router->get('/user/profile', 'UserController@edit');
$router->post('/user/register', 'UserController@createUser');
$router->put('/user/profile/edit', 'UserController@updateUser');

// $router->get('/user', 'UserController@profile');
// $router->get('/user/profile', 'UserController@edit');
$router->post('/post/create', 'PostController@createPost');
// $router->put('/user/profile/edit', 'UserController@updateUser');