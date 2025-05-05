<?php
declare(strict_types=1);

namespace App\repositories;

use App\models\User;

class UserRepository
{
    public function __construct()
    {

    }

    public function getAllUsers(): array
    {
        $users = User::all();
        return $users;
    }

    public function getUserById(int $id): ?array

    {
        $user  = User::find($id);
        return $user;
    }
}
