<?php
declare(strict_types=1);

namespace App\controllers;

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
        die('post');
    }

    public function update(): void
    {

        $shoppingService = new ShoppingService();

        $shoppingService->updateItem($_POST);

        $items = $shoppingService->showItems();

        $this->view('shopping/index', ['items' => $items]);
    }

    public function delete(): void
    {
        $shoppingService = new ShoppingService();

        $id = $_POST['id'];

        $shoppingService->deleteItem($id);

        $items = $shoppingService->showItems();

        $this->view('shopping/index', ['items' => $items]);
    }

}
