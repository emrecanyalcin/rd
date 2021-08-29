<?php
require("info.php");

$pushToken = $_POST['push_token'];
$memberId = $_POST['member_id'];
$status = $_POST['status'];
$forceUpdate = $_POST['force_update'];
$appAlias = $_POST['app_alias'];

$apiName = "CreatePushSubscription";


$json = array(
    "PushToken" => $pushToken,
    "MemberID" => $memberId,
    "Status" => $status,
    "ForceUpdate" => $forceUpdate,
    "AppAlias" => $appAlias
    );

    $test = new Curl();
    $test->Send($api.$apiName,$json);