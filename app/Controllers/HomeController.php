<?php
namespace Gkedi\PhpMvcStarter\Controllers;

use Gkedi\PhpMvcStarter\Controller;

/**
 * Home page controller
 */
class HomeController extends Controller
{
    public function index(): void
    {
        $data = [
            'title' => 'Welcome',
            'message' => 'Welcome to your MVC project!'
        ];

        $this->render('home', $data);
    }
}
