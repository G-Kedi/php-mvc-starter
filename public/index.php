<?php
require __DIR__ . '/../vendor/autoload.php';

use Gkedi\PhpMvcStarter\Core\Router;
use Dotenv\Dotenv;

// Load environment variables
$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$router = new Router($_SERVER['REQUEST_URI']);

$router->get('/', 'HomeController@index');

$router->run();
