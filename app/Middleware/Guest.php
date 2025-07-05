<?php
namespace App\Middleware;
require_once __DIR__ . '/../helper.php';

class Guest{
    public function handle(){
        if(isset($_SESSION['username'])){
            // header("location: login.php");
            redirect('welcome');
            exit();
        }
    }
}

?>