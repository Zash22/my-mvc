<?php

require_once '../app/services/HomeService.php';

class HomeController extends Controller
{
    public function index()
    {
        $homeService = new HomeService();
        $message = $homeService->getWelcomeMessage();

        $this->view('home/index', ['title' => $message]);
    }
}
