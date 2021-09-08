<?php
require("info.php");

$key = $_POST['key'];
$value = $_POST['value'];
$demographicDataKey = $_POST['demographic_data_key'];
$demographicDataValue = $_POST['demographic_data_value'];
$forceUpdate = $_POST['force_update'];
$campaignId = $_POST['campaign_id'];
$insertMember = $_POST['insert_member'];
$gsmNo = $_POST['gsm_no'];

$apiName = "SendOngoingSms";


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
    "InsertMember" => $insertMember,
    "GsmNo" => $gsmNo
    );

    $test = new Curl();
    $test->Send($api.$apiName,$json);