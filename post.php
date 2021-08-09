<?php

$username = $_POST['username'];
$password = $_POST['password'];

$url = "https://api.relateddigital.com/reste/api/auth/login";

$dataArray = array(
    'UserName' => $username,
    'Password' => $password
);

$data = http_build_query($dataArray);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if ($error = curl_error($ch)) {
    echo $error;
}else{
    $decoded = json_decode($response);

    /*
    $serviceTicket = $decoded->ServiceTicket;
    $success = $decoded->Success;
    $errors = $decoded->Errors;
    $detailedMessage = $decoded->DetailedMessage;
    $transactionId = $decoded->TransactionId;
    */
    
    echo "<pre>";
    print_r($decoded) ;
    echo "</pre>";
  //  var_dump($serviceTicket, $success);
    
}

curl_close($ch);