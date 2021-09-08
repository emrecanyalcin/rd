<?php
require("info.php");

$key = $_POST['key'];
$value = $_POST['value'];

$apiName = "AddToAllLists";


$json = array(
    "Key" => $key,
    "Value" => $value,
    );

    $test = new Curl();
    $test->Send($api.$apiName,$json);