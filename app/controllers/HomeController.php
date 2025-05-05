<?php

namespace App\controllers;

use App\services\HomeService;

use Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $homeService = new HomeService();
        $message = $homeService->getWelcomeMessage();

        $this->view('home/index', ['title' => $message]);
    }
}
