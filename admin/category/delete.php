<?php
require_once '../../core/boot.php' ;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $category_id = $_GET['category_id'];
    delete_category($category_id);

    header('Location: index.php');
}