<?php
// Include Composer autoloader
require __DIR__ . '/../vendor/autoload.php';

use Gkedi\PhpMvcStarter\Router;

// Create a Router instance with the current request URI
$router = new Router($_SERVER['REQUEST_URI']);

// Register routes
$router->get('/', 'HomeController@index');

// Run the router to handle the request
$router->run();
