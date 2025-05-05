<?php
declare(strict_types=1);

namespace App\Services;

use App\repositories\ShoppingRepository;


class ShoppingService
{
    private ShoppingRepository $repository;

    public function __construct()
    {
        $this->repository = new ShoppingRepository();
    }

    public function showItems(): array
    {
        return $this->repository->getAllItems();
    }

    public function addItem(array $data): void
    {
        $this->repository->addItem($data);
    }

    public function updateItem(array $data): void
    {
        $this->repository->updateItem($data);
    }

    public function deleteItem($id): void
    {
        $this->repository->deleteItem($id);
    }
}
