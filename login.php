<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if($_POST){
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    

    $urlLogin = "https://api.relateddigital.com/reste/api/auth/login";

    $loginArray = array(
        'UserName' => $username,
        'Password' => $password
    );



    $login = http_build_query($loginArray);


    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $urlLogin);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $login);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    if ($error = curl_error($ch)) {
        echo $error;
    }else{
        $decoded = json_decode($response);

        
        $_SESSION['serviceTicket'] = $decoded->ServiceTicket;
        $serviceTicket = $_SESSION['serviceTicket'];
        print_r($serviceTicket);
        $success = $decoded->Success;
        $errors = $decoded->Errors;
        $detailedMessage = $decoded->DetailedMessage;
        $transactionId = $decoded->TransactionId;
        if(!empty($serviceTicket)){
            header('Location: dashboard.php');
        }else{
            header('Location: index.php');
        }
    
    
    


   /* echo "<pre>";
    print_r($decoded) ;
    echo "</pre>";
    */
   // $serviceTicket = $decoded->ServiceTicket;
    //print_r($serviceTicket);
  //  var_dump($serviceTicket, $success);
    
    }


}

curl_close($ch);

?>