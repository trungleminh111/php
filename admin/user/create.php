<?php
require_once '../../core/boot.php' ;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    insert_user($email, $password);

    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $user_list = get_all_user();
    include_once '../view/user/_create.php';
}