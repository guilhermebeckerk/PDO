<?php

//----------- DATABASE CONNECT --------------------

try {

    $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

} catch (PDOException $e){

    echo "--ERROR--DATABASE". $e->getMessage();
    exit();

}

//-------------- INSERT USER -----------------------

$stmt = $conn->prepare("INSERT INTO tb_users (deslogin, dessenha) VALUES (:login, :password)");

$login = "Fedora";
$password = "fedora33";

$stmt->bindParam(":login", $login);
$stmt->bindParam(":password", $password);

$stmt->execute();

?>