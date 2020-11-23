<?php

//----------- DATABASE CONNECT --------------------

try {

    $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

} catch (PDOException $e){

    echo "--ERROR--DATABASE". $e->getMessage();
    exit();

}

//-------------- UPDATE USER -----------------------

$stmt = $conn->prepare("UPDATE tb_users SET deslogin = :login, dessenha = :password WHERE iduser = :id");

$login = "Anna";
$password = "abcdefg";
$id = 2;

$stmt->bindParam(":login", $login);
$stmt->bindParam(":password", $password);
$stmt->bindParam(":id", $id);

$stmt->execute();

?>