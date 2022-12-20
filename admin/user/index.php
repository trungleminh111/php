<?php
require_once '../../core/boot.php' ;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $user_list = get_all_user();
    include_once '../view/user/_index.php';
}