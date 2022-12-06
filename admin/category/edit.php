<?php
require_once '../../core/boot.php' ;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $img = $_POST['img'];

    update_category($category_id, $name, $img);

    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $category_id = $_GET['category_id'];
    $category = get_category($category_id);

    include_once '../view/category/_edit.php';
}