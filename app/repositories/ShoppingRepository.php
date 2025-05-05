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

    public function addItem(): void
    {
        ShoppingList::insert();
    }

    public function updateItem($id): void
    {
        ShoppingList::update($id);

    }

    public function deleteItem($id): void
    {
        ShoppingList::delete($id);
    }
}
