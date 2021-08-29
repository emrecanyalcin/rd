<?php
require("Curl.php");
$serviceTicket =  $_SESSION['serviceTicket'];
$headers = array(
    'Content-Type: application/json',
    'Authorization: ' . $serviceTicket 
);
//echo $serviceTicket;
$api = "https://api.relateddigital.com/reste/api/Member/";



