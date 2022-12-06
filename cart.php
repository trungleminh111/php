<?php
require_once 'core/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];
    switch ($action) {
        case 'create':
            //do creating
            add_to_cart($_POST['productId'], $_POST['quantity']);
            break;
        case 'update':
            //do updating
            update_to_cart($_POST['productId'], $_POST['value']);
            break;
        case 'delete':
            delete_from_cart($_POST['productId']);
            //do deleting
            break;
    }

    header('Location: cart.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include_once './view/_cart.php';
}
