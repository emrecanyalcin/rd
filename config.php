<?php

$host = "localhost";
$user = "root";
$password = "";
$name = "related_digital_api";


try{
    $db = new PDO("mysql:host=".$host.";dbname=".$name.";charset=utf8",$user,$password);
}catch(PDOException $error){
    echo $error->getMessage();
}
