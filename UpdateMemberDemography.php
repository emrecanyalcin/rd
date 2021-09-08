<?php
require("info.php");

$key = $_POST['key'];
$value = $_POST['value'];
$forceUpdate = $_POST['force_update'];
$demographicDataKey = $_POST['demographic_data_key'];
$demographicDataValue = $_POST['demographic_data_value'];

$apiName = "UpdateMemberDemography";


$json = array(
    "Key" => $key,
    "Value" => $value,
    "ForceUpdate" => $forceUpdate,
    "DemographicData" => array(
        array(
            "Key" => $demographicDataKey,
            "Value" => $demographicDataValue
        )
    )
);

    $test = new Curl();
    $test->Send($api.$apiName,$json);