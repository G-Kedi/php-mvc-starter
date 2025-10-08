<?php
namespace Gkedi\PhpMvcStarter\Controllers;

use Gkedi\PhpMvcStarter\Core\Controller;
use Gkedi\PhpMvcStarter\Models\User;

/**
 * UserController
 * Handles user-related routes and logic
 */
class UserController extends Controller
{
    public function index(): void
    {
        $userModel = new User();
        $users = $userModel->getAll();

        $this->render('users', ['users' => $users]);
    }
}
