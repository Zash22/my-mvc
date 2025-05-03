<?php
declare(strict_types=1);

require_once '../app/Router.php';
require_once '../app/controllers/UserController.php';
require_once '../app/controllers/UserController.php';

$router = new Router();

// Define routes
$router->add('GET', '/users', [new UserController(), 'index']);
$router->add('GET', '/users/(\d+)', function () {
    // Capture the user ID from the URL (e.g., /users/1)
    $id = (int)$_GET['id'];
    (new UserController())->show($id);
});

// Dispatch the request to the appropriate route
$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
