<?php
require_once '../../core/boot.php' ;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $img = $_POST['img'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $category_id = $_POST['category_id'];
    insert_product($name, $img, $category_id,$discount,$price);

    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $product_list = get_all_products();
    include_once '../view/product/_create.php';
}