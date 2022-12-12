<?php
require_once 'mysql.php';
$pdo = get_pdo();

function register($email, $password, $role='user'){
    if(email_exisit($email))
        return false;
    
    global $pdo;

    $sql = "INSERT INTO USERS(ID, EMAIL, PASSWORD, ROLE) VALUES(NULL, :email, :password , :role)";
    $stmt = $pdo->prepare($sql);
    
    $stmt->bindParam(':email', $email);
  
    $stmt->bindParam(':password', $password);
    
    $stmt->bindParam(':role', $role);

    $stmt->execute();

    return login($email, $password);
}

function login($email, $password){
    global $pdo;

    $sql = "SELECT * FROM USERS WHERE EMAIL=:email AND PASSWORD=:password";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
   
    // Lặp kết quả
    foreach ($result as $row){
        return array(
            'id' => $row['id'],
            'email' => $row['email'],
            'password' => $row['password'],
            'role' => $row['role']
        );
    }

    return false;
}

function email_exisit($email){
    global $pdo;

    $sql = "SELECT * FROM USERS WHERE EMAIL=:email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    // Lặp kết quả
    foreach ($result as $row){
        return true;
    }

    return false;
}
function insert_user($email,$password){
    global $pdo;
    $sql = "INSERT INTO USERS(ID, EMAIL, PASSWORD) VALUES(NULL, :email, :password)";
    $stmt = $pdo->prepare($sql);
    
   
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);

    $stmt->execute();
}
function delete_user($user_id){
    global $pdo;

    $sql = "DELETE FROM USERS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $user_id);

    $stmt->execute();

}

function update_user($id, $email, $password){
    global $pdo;
    $sql = "UPDATE USERS SET EMAIL=:email, PASSWORD=:password WHERE ID=:id";
    $stmt = $pdo->prepare($sql);

   
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':id', $id);

    $stmt->execute();
}
function get_all_user(){
    global $pdo;

    $sql = "SELECT * FROM USERS";
    $stmt = $pdo->prepare($sql);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
     
    $category_list = array();

    // Lặp kết quả
    foreach ($result as $row){
        $user_list[] = array(
            'id' => $row['id'],
            'email' => $row['email'],
            'password' => $row['password']
        );
    }
    
    return $user_list;
}
function get_user($user_id){
    global $pdo;

    $sql = "SELECT * FROM USERS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $user_id);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    // Lặp kết quả
    foreach ($result as $row){
        return array(
            'id' => $row['id'],
            'email' => $row['email'],
            'password' => $row['password']
        );
    }

    return null;
}

?>