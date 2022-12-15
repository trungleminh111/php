<?php
require_once 'core/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $isLoginSuccess = true;
   
    if($_POST['email'] && $_POST['password']){
        $user = login($_POST['email'], $_POST['password'],$_POST['id'],$_POST['userName'],$_POST['role']);
        
        if($user == false){
            $_SESSION['flash_message'] = 'Login failed';
            $isLoginSuccess = false;
        }else{
            $_SESSION['user'] = $user;

        }
    }
    if(isset($_SESSION['cart'])){
        header('Location: cart.php');
    }
    else if($isLoginSuccess)
        header('Location: index.php');
    else
        header('Location: login.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    //Kiem tra user da login. Ton tai session user
    if(isset($_SESSION['user'])) 
        header('Location: index.php');

    include_once './view/_login.php';
}