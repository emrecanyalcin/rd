<?php
require("info.php");

$key = $_POST['key'];
$value = $_POST['value'];
$forceUpdate = $_POST['force_update'];
$demographicDataKey = $_POST['demographic_data_key'];
$demographicDataValue = $_POST['demographic_data_value'];
$campaignId = $_POST['campaign_id'];

$apiName = "SendOngoingEmail";


$json = array(
    "Key" => $key,
    "Value" => $value,
    "DemographicData" => array(
        array(
            "Key" => $demographicDataKey,
            "Value"=> $demographicDataValue
        )
        ),
    "ForceUpdate" => $forceUpdate,
    "CampaignId" => $campaignId,
    );

    $test = new Curl();
    $test->Send($api.$apiName,$json);