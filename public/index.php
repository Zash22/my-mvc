<?php
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';


//namespace

use Core\Model;
use Core\Router;
use App\controllers\UserController;
use App\controllers\HomeController;
use App\controllers\ShoppingController;



//$router = new Router();

$router = new Router();

$pdo = new PDO('mysql:host=16.16.144.240;dbname=mvc', 'ec2-user', '@OnZ41Fo@0al8nl2');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
Model::setConnection($pdo);

//print_r($pdo);
$router->add('GET', '/', [new HomeController(), 'index']);
$router->add('GET', '/users', [new UserController(), 'index']);
$router->add('GET', '/users/{id}', [new UserController(), 'show']);

$router->add('GET', '/list', [new ShoppingController(), 'index']);
$router->add('POST', '/list', [new ShoppingController(), 'add']);
$router->add('PATCH', '/list', [new ShoppingController(), 'update']);
$router->add('DELETE', '/list', [new ShoppingController(), 'delete']);


$router->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));



