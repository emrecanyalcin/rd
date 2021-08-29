<?php
session_start();
class Curl{

   // public $serviceTicket;
   // $serviceTicket = "C8351EF66CEB44B4813EF3AF90EDB3CE";
    public $url;
    public $json;
    

function Send($url,$json) {

        $this->url = $url;
        $this->json = $json;
        $serviceTicket =  $_POST['serviceTicket'];

        $headers = array(
            'Content-Type: application/json',
            'Authorization: ' . $serviceTicket 
        );

        $jsonBuild = json_encode($json);

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
            //echo $serviceTicket;
            
        }
        curl_close($ch);
        }

}
    


?>