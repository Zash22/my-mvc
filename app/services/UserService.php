<?php
declare(strict_types=1);

//require_once '../repositories/UserRepository.php';

//require_once __DIR__ . '/../repositories/UserRepository.php';

namespace App\Services;

use App\repositories\UserRepository;


class UserService
{
    private UserRepository $repository;

    public function __construct()
    {
        $this->repository = new UserRepository();
    }

    public function listUsers(): array
    {
        return $this->repository->getAllUsers();
    }

    public function getUser(int $id): ?array
    {
        return $this->repository->getUserById($id);
    }
}
