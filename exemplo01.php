<?php

//----------- DATABASE CONNECT --------------------

try {

    $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

} catch (PDOException $e){

    echo "--ERROR--DATABASE". $e->getMessage();
    exit();

}

//----------------- SELECT ALL USERS --------------------

$stmt = $conn->prepare("SELECT * FROM tb_users");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($results as $row){

    foreach($row as $key => $value){

        echo "<strong>". $key . "</strong>: ". $value . "<br>";

    }

    echo  "--------------------------------------------<br>";

}


?>