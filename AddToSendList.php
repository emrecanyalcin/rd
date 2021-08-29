<?php
require("info.php");

$key = $_POST['key'];
$value = $_POST['value'];
$move = $_POST['move'];
$sendListsListName = $_POST['send_lists_list_name'];
$sendListsGroupName = $_POST['send_lists_group_name'];

$apiName = "AddToSendLists";


$json = array(
    "Key" => $key,
    "Value" => $value,
    "Move" => $move,
    "SendLists" => array( 
            array(
                "ListName" => $sendListsListName,
                "GroupName" => $sendListsGroupName 
            )
        )
    );

    $test = new Curl();
    $test->Send($api.$apiName,$json);




/*$j = '{
    "Key": "EMAIL",
    "Value": "omer.urhan@euromsg.com",
    "Move": false,
    "SendLists": 
        {
            "ListName": "emrelist",
            "GroupName": "genel"
        }
    
}';
$j2 = json_encode($j);

*/


/*
$jsonBuild = json_encode($json);
print_r($jsonBuild);



$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS,$jsonBuild);



$response = curl_exec($ch);

if ($error = curl_error($ch)) {
    echo $error;
}else{
    $decoded = json_decode($response);
    echo "<pre>";
    print_r($decoded) ;
    echo "</pre>";
    
}
curl_close($ch);

*/