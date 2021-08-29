<?php

$host = "localhost";
$user = "root";
$password = "emrecan1996:";
$name = "related_digital_api";


try{
    $db = new PDO("mysql:host=".$host.";dbname=".$name.";charset=utf8",$user,$password);
}catch(PDOException $error){
    echo $error->getMessage();
}