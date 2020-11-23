<?php

//----------- DATABASE CONNECT --------------------

try {

    $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

} catch (PDOException $e){

    echo "--ERROR--DATABASE". $e->getMessage();
    exit();

}

//-------------- DELETE USER -----------------------

$stmt = $conn->prepare("DELETE FROM tb_users WHERE iduser = :id");

$id = 7;

$stmt->bindParam(":id", $id);

$stmt->execute();

?>