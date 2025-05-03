<?php
declare(strict_types=1);

require_once '../app/services/UserService.php';
require_once '../core/Controller.php';


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
