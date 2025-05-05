<?php
declare(strict_types=1);

namespace App\controllers;

use Core\Controller;
use App\services\UserService;


class UserController extends Controller
{
    public function index(): void
    {
        $userService = new UserService();
        $users = $userService->listUsers();

        $this->view('user/index', ['users' => $users]);
    }

    public function show(int $id): void
    {
        $userService = new UserService();
        $user = $userService->getUser($id);

        if (!$user) {
            echo "User not found.";
            return;
        }

        $this->view('user/show', ['user' => $user]);
    }
}
