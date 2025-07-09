<?php
namespace App\Controllers;
require_once __DIR__ . '/../helper.php';

class HomeController{
    public function index(){
        view('welcome');
    }
}


?>