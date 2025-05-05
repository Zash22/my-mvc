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

    public function addItem(): array
    {
        return $this->repository->addItem();
    }

    public function updateItem($data): void
    {
        $this->repository->updateItem($data);
    }

    public function deleteItem($id): void
    {
        $this->repository->deleteItem($id);
    }
}
