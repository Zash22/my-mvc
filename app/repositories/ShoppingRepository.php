<?php
declare(strict_types=1);

namespace App\repositories;

//use ShoppingList;

use App\models\ShoppingList;
class ShoppingRepository
{
    public function __construct()
    {

    }

    public function getAllItems(): array
    {
        $items = ShoppingList::all();
        return $items;
    }

    public function addItem($data): void
    {
        ShoppingList::insert($data);
    }

    public function updateItem($data): void
    {
        ShoppingList::update($data);

    }

    public function deleteItem($id): void
    {
        ShoppingList::delete($id);
    }
}
