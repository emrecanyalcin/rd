<?php
require("info.php");

$key = $_POST['key'];
$status = $_POST['value'];
$emailPermit = $_POST['email_permit'];
$gsmPermit = $_POST['gsm_permit'];

$apiName = "ChangeMemberPermissionByEmail";


$json = array(
    "Key" => $key,
    "Status" => $status,
    "EmailPermit" => $emailPermit,
    "GsmPermit" => $gsmPermit
    );

    $test = new Curl();
    $test->Send($api.$apiName,$json);