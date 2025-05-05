<?php
declare(strict_types=1);

namespace App\controllers;

use App\Services\UserService;
use Core\Controller;
use App\services\ShoppingService;

class ShoppingController extends Controller
{
    public function index(): void
    {
        $shoppingService = new ShoppingService();
        $items = $shoppingService->showItems();

        $this->view('shopping/index', ['items' => $items]);
    }
    public function add(): void
    {
    }

    public function update(): void
    {
    }

    public function delete(): void
    {
    }

}
