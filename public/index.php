<?php
require __DIR__ . '/../vendor/autoload.php';

use Gkedi\PhpMvcStarter\Core\Router;
use Dotenv\Dotenv;

// Load environment variables
$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/users', 'UserController@index');
$router->get('/user/{id}', 'UserController@show');

$router->run();
