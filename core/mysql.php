<?php
define('DB_NAME', 'eshop');
define('DB_USER', 'root');
define('USER_PASS', '123456');
define('URL', 'mysql:host=localhost; dbname=' . DB_NAME);

function get_pdo(){
    $pdo = null;
    try{
        $pdo = new PDO(URL, DB_USER, USER_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
        echo 'loi';
    }
    return $pdo;
}
?>
