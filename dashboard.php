<?php

    include 'config.php';
    $queryPostPushService = $db->prepare("SELECT * FROM post_push_service ORDER BY method ASC");
    $queryPostPushService->execute();
    $postPushServiceList = $queryPostPushService->fetchAll(PDO::FETCH_ASSOC);

    $queryCampaignService = $db->prepare("SELECT * FROM campaign_service ORDER BY method ASC");
    $queryCampaignService->execute();
    $campaignServiceList = $queryCampaignService->fetchAll(PDO::FETCH_ASSOC);

    $queryMemberService = $db->prepare("SELECT * FROM member_service ORDER BY method ASC");
    $queryMemberService->execute();
    $memberServiceList = $queryMemberService->fetchAll(PDO::FETCH_ASSOC);

    $queryPostService = $db->prepare("SELECT * FROM post_service ORDER BY method ASC");
    $queryPostService->execute();
    $postServiceList = $queryPostService->fetchAll(PDO::FETCH_ASSOC);

    $queryPostSMSService = $db->prepare("SELECT * FROM post_sms_service ORDER BY method ASC");
    $queryPostSMSService->execute();
    $postSMSServiceList = $queryPostSMSService->fetchAll(PDO::FETCH_ASSOC);

    $queryReportService = $db->prepare("SELECT * FROM report_service ORDER BY method ASC");
    $queryReportService->execute();
    $reportServiceList = $queryReportService->fetchAll(PDO::FETCH_ASSOC);

    $queryIYSReportService = $db->prepare("SELECT * FROM iys_report_service ORDER BY method ASC");
    $queryIYSReportService->execute();
    $IYSReportServiceList = $queryIYSReportService->fetchAll(PDO::FETCH_ASSOC);

    $querySendListService = $db->prepare("SELECT * FROM send_list_service ORDER BY method ASC");
    $querySendListService->execute();
    $sendListServiceList = $querySendListService->fetchAll(PDO::FETCH_ASSOC);

    $queryDataWarehouseService = $db->prepare("SELECT * FROM data_warehouse_service ORDER BY method ASC");
    $queryDataWarehouseService->execute();
    $dataWarehouseServiceList = $queryDataWarehouseService->fetchAll(PDO::FETCH_ASSOC);
    

    /*
    $queryserviceName = $db->prepare("SELECT * FROM service_names WHERE id=1");
    $queryserviceName->execute([$id]);
    $serviceName = $queryserviceName->fetch();
    */
    

session_start();


$username = $_SESSION['username'];
$password = $_SESSION['password'];
$serviceTicket = $_SESSION['serviceTicket'];

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

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container px-4">
            <a class="navbar-brand" href="#page-top">Related Marketing Cloud</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#post_push_service">Post Push Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="#campaign_service">Campaign Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="#member_service">Member Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="#post_service">Post Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="#postsms_service">PostSMS Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="#report_service">Report Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="#iys_report_service">IYS Report Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="#sendList_service">SendList Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="#dataWarehouse_service">DataWarehouse Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Çıkış</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-primary bg-gradient text-white">
        <div class="container px-4 text-center">
            <h1 class="fw-bolder">Related Marketing Cloud API Testi</h1>
            <p class="lead">Aşağıda servislerin methodlarını görebilirsin.</p>
            <a class="btn btn-lg btn-light" href="#post_push_service">Başla!</a>
        </div>
    </header>
    <!-- Post Push Service section-->
    <section id="post_push_service">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-12">
                    <h2>Post Push Service
                        <!--<?php echo $serviceName["name"];?>-->
                        </h2>
                    <p>Transactional (Tekil) Push Web Servis Metodları</p>
                    <h5>Not: URL olarak HTTPS kullanabilirsiniz.</h5>
                    <p>Transactional (Tekil) Push web servisini kullanarak, şifre hatırlatma, üyelik aktivasyonu, siparişiniz kargoda, gibi bilgilendirme amaçlı Push mesajları gönderebilir ve analiz için bunların sonuçlarını çekebilirsiniz.</p>
                    <p>Aşağıdaki tabloda Transactional Push Web Servisine ait metodlar ve kısa açıklamaları listelenmektedir. Detaylı bilgi için metod isimlerine tıklayabilirsiniz.</p>
                    <h5>Geliştiricinin herhangi bir web servis ile etkileşime geçebilmesi için, öncelikle Login metodunu kullanarak bir SERVICE TICKET alması gerekir. Diğer web servis ve metodlarına yaratmış olduğu bu değer ile istekte bulunabilir.</h5>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Method</th>
                                <th scope="col">Açıklama</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($postPushServiceList as $postPushService){?>
                            <tr>
                                <td> <?= $postPushService['method'] ?></td>
                                <td> <?= $postPushService['explanation'] ?></td>
                                <td> <?php $status = $postPushService['status'];
                                    if($status == true){
                                    ?>  
                                    <form action="api.php" method="POST">
                                    <input class="form-control" type="hidden" value="<?php echo $serviceTicket; ?>" name="serviceTicket">
                                    <input class="form-control" type="hidden" value="<?php echo $postPushService['method']; ?>" name="method">
                                    <button type="submit" class="btn btn-primary">Test</button>
                                    </form>  
                                    <?php 
                                        
                                    }else{
                                        ?> <button disabled="true" type="button" class="btn btn-primary">Test</button> <?php 
                                    } ?> </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Campaign Service section-->
    <section class="bg-light" id="campaign_service">
    <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-12">
                    <h2>Campaign Service</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Method</th>
                                <th scope="col">Açıklama</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($campaignServiceList as $campaignService){?>
                            <tr>
                                <td> <?= $campaignService['method'] ?></td>
                                <td> <?= $campaignService['explanation'] ?></td>
                                <td> <?php $status = $campaignService['status'];
                                    if($status == true){
                                    ?>
                                    <form action="api.php" method="POST">
                                    <input class="form-control" type="hidden" value="<?php echo $serviceTicket; ?>" name="serviceTicket">
                                    <input class="form-control" type="hidden" value="<?php echo $campaignService['method']; ?>" name="method">
                                    <button type="submit" class="btn btn-primary">Test</button>
                                    </form>  
                                    <?php 
                                    }else{
                                        ?> <button disabled="true" type="button" class="btn btn-primary">Test</button> <?php 
                                    } ?> </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Member Service section-->
    <section class="bg-light" id="member_service">
    <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-12">
                    <h2>Member Service</h2>
                    <h5>Geliştiricinin her hangi bir web servis ile etkileşime geçebilmesi için, öncelikle Login metodunu kullanarak bir SERVICE TICKET alması gerekir. Diğer web servis ve metodlarına yaratmış olduğu bu değer ile istekte bulunabilir.</h5>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Method</th>
                                <th scope="col">Açıklama</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($memberServiceList as $memberService){?>
                            <tr>
                                <td> <?= $memberService['method'] ?></td>
                                <td> <?= $memberService['explanation'] ?></td>
                                <td> <?php $status = $memberService['status'];
                                    if($status == true){
                                    ?>
                                    <form action="api.php" method="POST">
                                    <input class="form-control" type="hidden" value="<?php echo $serviceTicket; ?>" name="serviceTicket">
                                    <input class="form-control" type="hidden" value="<?php echo $memberService['method']; ?>" name="method">
                                    <button type="submit" class="btn btn-primary">Test</button>
                                    </form>    
                                        <?php 
                                    }else{
                                        ?> <button disabled="true" type="button" class="btn btn-primary">Test</button> <?php 
                                    } ?> </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Post Service section-->
    <section class="bg-light" id="post_service">
    <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-12">
                    <h2>Post Service</h2>
                    <p>Transactional (Tekil) Email Web Service Metodları </p>
                    <p>Transactional (Tekil) Email web servisini kullanarak, şifre hatırlatma, üyelik aktivasyonu, siparişiniz kargoda, gibi bilgilendirme amaçlı e-posta gönderebilir ve analiz için bunların sonuçlarını çekebilirsiniz.</p>
                    <p>Aşağıdaki tabloda Transactional Email Web Servisine ait metodlar ve kısa açıklamaları listelenmektedir. Detaylı bilgi için metod isimlerine tıklayabilirsiniz.</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Method</th>
                                <th scope="col">Açıklama</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($postServiceList as $postService){?>
                            <tr>
                                <td> <?= $postService['method'] ?></td>
                                <td> <?= $postService['explanation'] ?></td>
                                <td> <?php $status = $postService['status'];
                                    if($status == true){
                                    ?>
                                    <form action="api.php" method="POST">
                                    <input class="form-control" type="hidden" value="<?php echo $serviceTicket; ?>" name="serviceTicket">
                                    <input class="form-control" type="hidden" value="<?php echo $postService['method']; ?>" name="method">
                                    <button type="submit" class="btn btn-primary">Test</button>
                                    </form>  
                                    <?php 
                                    }else{
                                        ?> <button disabled="true" type="button" class="btn btn-primary">Test</button> <?php 
                                    } ?> </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- PostSMS section-->
    <section id="postsms_service">
    <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-12">
                    <h2>PostSMS Service</h2>
                    <p>Transactional (Tekil) SMS Web Service Metodları</p>
                    <p>Transactional (Tekil) SMS web servisini kullanarak, şifre hatırlatma, üyelik aktivasyonu, siparişiniz kargoda, gibi bilgilendirme amaçlı SMS mesajları gönderebilir ve analiz için bunların sonuçlarını çekebilirsiniz.</p>
                    <p>Aşağıdaki tabloda Transactional SMS Web Servisine ait metodlar ve kısa açıklamaları listelenmektedir. Detaylı bilgi için metod isimlerine tıklayabilirsiniz.</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Method</th>
                                <th scope="col">Açıklama</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($postSMSServiceList as $postSMSService){?>
                            <tr>
                                <td> <?= $postSMSService['method'] ?></td>
                                <td> <?= $postSMSService['explanation'] ?></td>
                                <td> <?php $status = $postSMSService['status'];
                                    if($status == true){
                                    ?>
                                    <form action="api.php" method="POST">
                                    <input class="form-control" type="hidden" value="<?php echo $serviceTicket; ?>" name="serviceTicket">
                                    <input class="form-control" type="hidden" value="<?php echo $postSMSService['method']; ?>" name="method">
                                    <button type="submit" class="btn btn-primary">Test</button>
                                    </form>  
                                    <?php 
                                    }else{
                                        ?> <button disabled="true" type="button" class="btn btn-primary">Test</button> <?php 
                                    } ?> </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Report Service section-->
    <section class="bg-light" id="report_service">
    <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-12">
                    <h2>Report Service</h2>
                    <p>Report web servisini kullanarak, belli kampanyalara ait raporları analiz etmek için kullanabilirsiniz.</p>
                    <p>Member web servisine ait aşağıdaki metodlar bulunmaktadır.</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Method</th>
                                <th scope="col">Açıklama</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($reportServiceList as $reportService){?>
                            <tr>
                                <td> <?= $reportService['method'] ?></td>
                                <td> <?= $reportService['explanation'] ?></td>
                                <td> <?php $status = $reportService['status'];
                                    if($status == true){
                                    ?>
                                    <form action="api.php" method="POST">
                                    <input class="form-control" type="hidden" value="<?php echo $serviceTicket; ?>" name="serviceTicket">
                                    <input class="form-control" type="hidden" value="<?php echo $reportService['method']; ?>" name="method">
                                    <button type="submit" class="btn btn-primary">Test</button>
                                    </form>  
                                    <?php 
                                    }else{
                                        ?> <button disabled="true" type="button" class="btn btn-primary">Test</button> <?php 
                                    } ?> </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- IYS Report Servic section-->
    <section id="iys_report_service">
    <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-12">
                    <h2>IYS Report Service</h2>
                    <p>IYS Report Web Service Metodları</p>
                    <p>IYS Report web servisini kullanarak, İleti Yönetim Sistemi’nde yer alan üyelerin izin durumları raporlanabilir.</p>
                    <p>Aşağıdaki tabloda IYS Report Web Servisine ait metodlar ve kısa açıklamaları listelenmektedir. Detaylı bilgi için metod isimlerine tıklayabilirsiniz.</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Method</th>
                                <th scope="col">Açıklama</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($IYSReportServiceList as $IYSReportService){?>
                            <tr>
                                <td> <?= $IYSReportService['method'] ?></td>
                                <td> <?= $IYSReportService['explanation'] ?></td>
                                <td> <?php $status = $IYSReportService['status'];
                                
                                    if($status == true){
                                    ?>
                                    <form action="api.php" method="POST">
                                    <input class="form-control" type="hidden" value="<?php echo $serviceTicket; ?>" name="serviceTicket">
                                    <input class="form-control" type="hidden" value="<?php echo $IYSReportService['method']; ?>" name="method">
                                    <button type="submit" class="btn btn-primary">Test</button>
                                    </form>  
                                    <?php 
                                    }else{
                                        ?> <button disabled="true" type="button" class="btn btn-primary">Test</button> <?php 
                                    } ?> </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- SendList Service section-->
    <section class="bg-light" id="sendList_service">
    <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-12">
                    <h2>SendList Service</h2>
                    <p>SendList web servisini kullanarak, toplu veri aktarımı, gönderim listesi yaratabilir veya mevcut gönderim listelerini hesabınızdan silebilirsiniz.</p>
                    <p>SendList web servisine ait aşağıda ki metodlar bulunmaktadır.</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Method</th>
                                <th scope="col">Açıklama</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($sendListServiceList as $sendListService){?>
                            <tr>
                                <td> <?= $sendListService['method'] ?></td>
                                <td> <?= $sendListService['explanation'] ?></td>
                                <td> <?php $status = $sendListService['status'];
                                    if($status == true){
                                    ?>
                                    <form action="api.php" method="POST">
                                    <input class="form-control" type="hidden" value="<?php echo $serviceTicket; ?>" name="serviceTicket">
                                    <input class="form-control" type="hidden" value="<?php echo $sendListService['method']; ?>" name="method">
                                    <button type="submit" class="btn btn-primary">Test</button>
                                    </form>  
                                    <?php 
                                    }else{
                                        ?> <button disabled="true" type="button" class="btn btn-primary">Test</button> <?php 
                                    } ?> </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- DataWarehouse Service section-->
    <section class="bg-light" id="dataWarehouse_service">
    <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-12">
                    <h2>DataWarehouse Service</h2>
                    <p>Data Warehouse web servisine ait aşağıdaki metodlar bulunmaktadır.</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Method</th>
                                <th scope="col">Açıklama</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($dataWarehouseServiceList as $dataWarehouseService){?>
                            <tr>
                                <td> <?= $dataWarehouseService['method'] ?></td>
                                <td> <?= $dataWarehouseService['explanation'] ?></td>
                                <td> <?php $status = $dataWarehouseService['status'];
                                    if($status == true){
                                    ?>
                                    <form action="api.php" method="POST">
                                    <input class="form-control" type="hidden" value="<?php echo $serviceTicket; ?>" name="serviceTicket">
                                    <input class="form-control" type="hidden" value="<?php echo $dataWarehouseService['method']; ?>" name="method">
                                    <button type="submit" class="btn btn-primary">Test</button>
                                    </form>  
                                    <?php 
                                    }else{
                                        ?> <button disabled="true" type="button" class="btn btn-primary">Test</button> <?php 
                                    } ?> </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container px-4">
            <p class="m-0 text-center text-white">Copyright &copy; Emre Can Yalçın 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
