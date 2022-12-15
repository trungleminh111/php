<?php
require_once '../../core/boot.php' ;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $order_id = $_POST['order_id'];
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $order_list = get_order_list();
    include_once '../view/order/_index.php';
}