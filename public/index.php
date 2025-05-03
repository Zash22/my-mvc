<?php
declare(strict_types=1);

require_once '../app/Router.php';
require_once '../app/controllers/UserController.php';

$router = new Router();

$router->add('GET', '/users', [new UserController(), 'index']);
$router->add('GET', '/users/{id}', [new UserController(), 'show']);

$router->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
