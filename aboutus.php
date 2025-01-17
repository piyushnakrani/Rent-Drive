<?php
session_start();
include('includes/config.php');
error_reporting(0);
?>
<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Rent&Drive</title>
    <!--Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/js/jquery.datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css" rel="stylesheet">
     <link rel="stylesheet" href="assets/css/custom.css" type="text/css">
  </head>
  <body>

  	 <?php include('includes/header.php');?>

        <section class="page-header aboutus_page">
            <div class="container">
                <div class="page-header_wrap">
                    <div class="page-heading">
                        <h1 >About Us</h1>
                    </div>
                    <ul class="coustom-breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="about_us srction-padding">
            <div class="container">
                    <div class="section-header text-center">
                <h2>About Us</h2>
            </div>
            </div>
        </section>
    
        <section class="section-padding">
            <div class="col-list-3 text-center">
                    <div class="recent-car-list">
                      <div class="car-info-box"><img src="admin/img/yash.jpg" width="200px" class="img-center img-responsive" alt="image"></a>
                        <span><h2>sahil khambhadiya</h2></span>
                      </div>
                  </div>
              </div>
        </section>

  	 <?php include('includes/footer.php');?>
        <!-- /Footer-->
        <!--Back to top-->
        <div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
        <!--/Back to top-->
        <!--Login-Form -->
        <?php include('includes/login.php');?>
        <!--/Login-Form -->
        <!--Register-Form -->
        <?php include('includes/registration.php');?>
        <!--/Register-Form -->
        <!--Forgot-password-Form -->
        <?php include('includes/forgotpassword.php');?>
        <!--/Forgot-password-Form -->
        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/interface.js"></script>
        <!--Switcher-->
        <script src="assets/switcher/js/switcher.js"></script>
        <!--bootstrap-slider-JS-->
        <script src="assets/js/bootstrap-slider.min.js"></script>
        <!--Slider-JS-->
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
 </body>
 </html> 