<?php
require("info.php");



$key = $_POST['key'];
$value = $_POST['value'];
$forceUpdate = $_POST['force_update'];
$demographicDataKey = $_POST['demographic_data_key'];
$demographicDataValue = $_POST['demographic_data_value'];


$apiName = "InsertMemberDemography";



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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="dashboard.php">Geri</a>
</body>
</html>