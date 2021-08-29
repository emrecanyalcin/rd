<?php

session_start();

$api = $_POST['method'];
$serviceTicket = $_SESSION['serviceTicket'];

echo $api,$serviceTicket;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>RMC API Test</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container px-4">
            <a class="navbar-brand" href="#page-top">Related Marketing Cloud</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="login.php#post_push_service">Post Push Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php#campaign_service">Campaign Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php#member_service">Member Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php#post_service">Post Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php#postsms_service">PostSMS Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php#report_service">Report Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php#iys_report_service">IYS Report Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php#sendList_service">SendList Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php#dataWarehouse_service">DataWarehouse Service</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- Post Push Service section-->
    <section id="form">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-12">
                    
                        
                <?php  require ("components/Form".$api.".html"); ?>
                </div>
            </div>
        </div>
    </section>
    
    
</body>
</html>



