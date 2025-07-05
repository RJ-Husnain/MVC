<?php
namespace App\Controllers;
require_once __DIR__ . '/../helper.php';

class DashboardController{
    public function index(){
        // echo 'Home Controller Index Function';
        // require_once('pages/welcome.php');
        view('welcome');
    }

    public function logout(){
        $_SESSION = [];
        session_destroy();
        redirect('login');
        // header("location: login.php");
        // exit();

    }
}


?>