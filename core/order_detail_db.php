<?php

require_once 'mysql.php';

$pdo = get_pdo();

//Insert order
function insert_order_detail($products_id, $order_id, $quantity,$price, $total){
    $sql = "INSERT INTO ORDER_DETAILS(ID, PRODUCTS_ID, ORDER_ID, QUANTITY,PRICE,TOTAL) VALUES(NULL, :products_id, :order_id, :quantity,:price,:total)";
    global $pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':products_id', $products_id);
    $stmt->bindParam(':order_id', $order_id);
    $stmt->bindParam(':quantity', $quantity);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':total', $total);
    $stmt->execute();
}

//update order
function update_order_detail($products_id, $order_id, $quantity,$price){
    $sql = "UPDATE ORDER_DETAILS SET PRODUCTS_ID=:products_id, ORDER_ID=:order_id, QUANTITY=:quantity PRICE=:price WHERE ID=:id";
    global $pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':products_id', $products_id);
    $stmt->bindParam(':order_id', $order_id);
    $stmt->bindParam(':quantity', $quantity);
    $stmt->bindParam(':price', $price);
    $stmt->execute();
}

//delete order
function delete_order_detail($id){
    $sql = "DELETE FROM ORDER_DETAILS WHERE ID=:id";
    global $pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}

//Select data
function get_order_detail_list(){
    $sql = "SELECT * FROM ORDER_DETAILS";
    global $pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
     
    // Lặp kết quả
    $order_list = [];

    foreach ($result as $row){
        array_push($order_list, array(
            'id' => $row['id'],
            'products_id' => $row['products_id'],
            'order_id' => $row['order_id'],
            'quantity' => $row['quantity'],
        ));
    }

    return $order_list;
}

function find_order_detail($order_id){
    $sql = "SELECT * FROM ORDER_DETAILS WHERE ORDER_ID=:order_id";
    global $pdo;
    $stmt = $pdo->prepare($sql);
    
    $stmt->bindParam(':order_id', $order_id);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
     
    // Lặp kết quả
    foreach ($result as $row){
        return array(
            'id' => $row['id'],
            'products_id' => $row['products_id'],
            'order_id' => $row['order_id'],
            'quantity' => $row['quantity'],
            'total' => $row['total'],
        );
    }

    return null;
}
function show_order_detail($order_id){
    $sql = "SELECT * FROM ORDER_DETAILS,PRODUCTS WHERE ORDER_ID=:order_id";
    global $pdo;
    $stmt = $pdo->prepare($sql);
    
    $stmt->bindParam(':order_id', $order_id);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
     
    // Lặp kết quả
    foreach ($result as $row){
        return array(
            'id' => $row['id'],
            'products_id' => $row['products_id'],
            'order_id' => $row['order_id'],
            'quantity' => $row['quantity'],
            'name' => $row['name'],
            'total' => $row['total'],
            'img' => $row['img']
        );
    }

    return null;
}
?>