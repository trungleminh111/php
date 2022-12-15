<?php
require_once '../../core/boot.php' ;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $order_id = $_GET['order_id'];
   
    $order_detail = find_order_detail($order_id);
    include_once '../view/order/_order_detail.php';
}