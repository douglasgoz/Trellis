<?php
namespace app\controllers;
use system\core\Controller;

class Dashboard extends Controller {
    public function index() {
        $this->view('dashboard');
    }
}