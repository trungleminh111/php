<?php
require_once './core/boot.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if(!isset($_SESSION['user'])){
        include('login.php');

    }
    else{
        
        if(isset($_SESSION['cart']) && isset($_SESSION['user'])){
            $order = array(
                'code' => string_radom(10),
                'status' => 'pending',
                'user_id' => $_SESSION['user']['id'],
                
            );
        
            insert_order(
                $order['code'],
                $order['status'],
                $order['user_id']
            );
        
            $find_order = find_order_by_code($order['code']);
        
            $cart = $_SESSION['cart'];
           
            foreach($cart as $ods){
                $order_detail = array(
                    'product_id' => $ods['product_id'],
                    'order_id' => $find_order['id'],
                    'quantity' => $ods['quantity'],
                    'price' => $ods['price'],
                    'total' => total_cart_item($ods['price'],$ods['quantity'] )
                );
                
        
                insert_order_detail(
                    $order_detail['product_id'],
                    $order_detail['order_id'],
                    $order_detail['quantity'],
                    $order_detail['price'],
                    $order_detail['total']
                );

            }
        
            unset($_SESSION['cart']);
            header(('Location: cart.php'));
    
        }else{
            header(('Location: index.php'));
        }   
    }
    
    
}