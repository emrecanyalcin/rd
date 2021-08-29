<?php

$apiName = $_POST['apiName'];
if($api == null || $api == ""){
    header("Location: index.php");
}else{
    require ("components/Form".$apiName."html");
    echo $apiName;
}