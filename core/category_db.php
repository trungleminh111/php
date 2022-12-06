<?php
require_once 'mysql.php';
$pdo = get_pdo();

function get_all_categories(){
    global $pdo;

    $sql = "SELECT * FROM CATEGORIES";
    $stmt = $pdo->prepare($sql);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
     
    $category_list = array();

    // Lặp kết quả
    foreach ($result as $row){
        $category_list[] = array(
            'id' => $row['id'],
            'name' => $row['name'],
            'img' => $row['img']
        );
    }
    
    return $category_list;
}

function delete_category($category_id){
    global $pdo;

    $sql = "DELETE FROM CATEGORIES WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $category_id);

    $stmt->execute();

}

function insert_category($name, $img){
    global $pdo;
    $sql = "INSERT INTO CATEGORIES(ID, NAME, IMG) VALUES(NULL, :name, :img)";
    $stmt = $pdo->prepare($sql);
    
   
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':img', $img);

    $stmt->execute();
}

function get_category($category_id){
    global $pdo;

    $sql = "SELECT * FROM CATEGORIES WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $category_id);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    // Lặp kết quả
    foreach ($result as $row){
        return array(
            'id' => $row['id'],
            'name' => $row['name'],
            'img' => $row['img'],
            'description' => $row['description'],
        );
    }

    return null;
}

function update_category($id, $name, $img){
    global $pdo;
    $sql = "UPDATE CATEGORIES SET NAME=:name, IMG=:img WHERE ID=:id";
    $stmt = $pdo->prepare($sql);

   
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':img', $img);
    $stmt->bindParam(':id', $id);

    $stmt->execute();
}