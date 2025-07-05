<?php
namespace App\Controllers;
use App\Models\User;
require_once __DIR__ . '/../helper.php';


class loginController{
    public function index(){
        // echo 'LoginController Index Function';
        // require('pages/login.php');
        view('auth.login');
    }
    public function login(){
        $errorMsg = "";
        $user = new User;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username= $user->username=$_POST['username'];
        $password= $user->password=$_POST['password'];

        if($user->login()){
            // echo "loggedin Successfully";
            $_SESSION['username']= $username;

            // require('pages/welcome.php');
            redirect('welcome');
            // header("Location: welcome.php");
            // session_start();
            exit();
        }else{
            // echo "Unable to login";
            $errorMsg = $user->errorMsg;
            return $errorMsg;
        }

}
    }
}


?>