<?php
session_start();

if(!isset($_SESSION['email'])){
    header("location: singin.php");
    exit;
}


?>






<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Contacts</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/food1lofo2.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/styless.css">
    
  </head>
  <body>
  <div class="preloader">
      
    </div>
    <div class="page">
      <!-- Top Banner-->
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="56px" data-xl-stick-up-offset="56px" data-xxl-stick-up-offset="56px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-inner-outer">
              <div class="rd-navbar-inner">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark" src="images/food1lofo2.png" alt="" width="198" height="66"/></a></div>
                </div>
                <div class="rd-navbar-right rd-navbar-nav-wrap">
                  <div class="rd-navbar-aside">
                    <ul class="rd-navbar-contacts-2">


                    <li>
                        <div class="unit unit-spacing-xs">
                          <div class="unit-left"><span class="icon mdi mdi-account"></span></div>
                          <div class="unit-body"><a class="account" href=""><?php

$sakib=$_SESSION['email'];
include'dpconnec.php';
$sql = "Select * from userinfo where email='$sakib'";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)){
     echo" ";
  
  echo $row['fastname'] ;
  echo" ";
     echo $row['lastname'] ;
     $myid= $row['userid'];

}
                               
                          
                          ?></a></div>
                        </div>
                      </li>
                      <?php

$number=0;
$db = mysqli_connect("localhost", "root", "", "food");
    $sql = "SELECT * FROM `cart` where userid='$myid'";
    $result = mysqli_query($db,$sql);

    while($row = mysqli_fetch_array($result)){
        
        $number++;
    }
        ?>   
                      <li>
                        <div class="unit unit-spacing-xs">
                          <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                          <div class="unit-body"><a class="phone" href="tel:#">01775332747</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-spacing-xs">
                          <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                          <div class="unit-body"><a class="address" href="https://www.google.com/maps/place/Gulshan,+Dhaka/@23.7897077,90.3929248,14z/data=!3m1!4b1!4m5!3m4!1s0x3755c7a0f70deb73:0x30c36498f90fe23!8m2!3d23.7924961!4d90.4078058">Gulshan Dhaka Bangladesh</a></div>
                        </div>
                      </li>
                    </ul>
                    <ul class="list-share-2">
                      <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                      <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                      <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                      <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                    </ul>
                  </div>
                  <div class="rd-navbar-main">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">

                      




                      <li class="rd-nav-item"><a class="rd-nav-link" href="home.php">Home</a>
                      </li>
                      <li class="rd-nav-item "><a class="rd-nav-link" href="new.php"><span class="icon mdi mdi-cart"></span><sup><?php echo $number; ?></sup> </a></li>
                     
                      
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="contacts.php">Contacts</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="userorder.php">Order</a>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="succeslogout.php">Logout</a>
</li>
                    </ul>
                  </div>
                </div>
               
      </header>
      <!-- Breadcrumbs -->
      <section class="bg-gray-7">
        <div class="breadcrumbs-custom box-transform-wrap context-dark">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Contacts</h3>
            <div class="breadcrumbs-custom-decor"></div>
          </div>
          <div class="box-transform" style="background-image: url(images/bg-1.jpg);"></div>
        </div>
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.html">Home</a></li>
            <li class="active">Contacts</li>
          </ul>
        </div>
      </section>
      <!-- Contacts-->
      <section class="section section-lg bg-default text-md-left">
        <div class="container">
          <div class="row row-60 justify-content-center">
            <div class="col-lg-8">
              <h4 class="text-spacing-25 text-transform-none">Get in Touch</h4>
              <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="">
                <div class="row row-20 gutters-20">
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-your-name-5" type="text" name="name" data-constraints="@Required">
                      <label class="form-label" for="contact-your-name-5">Your Name*</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-email-5" type="email" name="email" data-constraints="@Email @Required">
                      <label class="form-label" for="contact-email-5">Your E-mail*</label>
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-phone-5" type="text" name="phone" data-constraints="@Numeric">
                      <label class="form-label" for="contact-phone-5">Your Phone*</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-message-5">Message</label>
                      <textarea class="form-input textarea-lg" id="contact-message-5" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                </div>
                <button class="button button-secondary button-winona" type="submit">Contact us</button>
              </form>
            </div>
            <div class="col-lg-4">
              <div class="aside-contacts">
                <div class="row row-30">
                  <div class="col-sm-6 col-lg-12 aside-contacts-item">
                    <p class="aside-contacts-title">Get social</p>
                    <ul class="list-inline contacts-social-list list-inline-sm">
                      <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                      <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                      <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                      <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                    </ul>
                  </div>
                  <div class="col-sm-6 col-lg-12 aside-contacts-item">
                    <p class="aside-contacts-title">Phone</p>
                    <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                      <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                      <div class="unit-body"><a class="phone" href="tel:#">01775332747</a></div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-12 aside-contacts-item">
                    <p class="aside-contacts-title">E-mail</p>
                    <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                      <div class="unit-left"><span class="icon mdi mdi-email-outline"></span></div>
                      <div class="unit-body"><a class="mail" href="mailto:#">asakib201240@gmail.com</a></div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-12 aside-contacts-item">
                    <p class="aside-contacts-title">Address</p>
                    <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                      <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                      <div class="unit-body"><a class="address" href="https://www.google.com/maps/place/Gulshan,+Dhaka/@23.7897077,90.3929248,14z/data=!3m1!4b1!4m5!3m4!1s0x3755c7a0f70deb73:0x30c36498f90fe23!8m2!3d23.7924961!4d90.4078058">Gulshan Dhaka  <br class="d-md-none"> Bangladesh</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      
      <!-- Page Footer-->
      <footer class="section footer-modern context-dark footer-modern-2">
        <div class="footer-modern-line">
          <div class="container">
            <div class="row row-50">
              <div class="col-md-6 col-lg-4">
                <h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft">What We Offer</span></h5>
                <ul class="footer-modern-list d-inline-block d-sm-block wow fadeInUp">
                  <li><a href="#">Pizzas</a></li>
                  <li><a href="#">Burgers</a></li>
                  <li><a href="#">Salads</a></li>
                  <li><a href="#">Drinks</a></li>
                  <li><a href="#">Seafood</a></li>
                  <li><a href="#">Drinks</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4 col-xl-3">
                <h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft">Information</span></h5>
                <ul class="footer-modern-list d-inline-block d-sm-block wow fadeInUp">
                  
                  <li><a href="#">Latest News</a></li>
                  <li><a href="#">Our Menu</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Shop</a></li>
                  <li><a href="contacts.php">Contact Us</a></li>
                </ul>
              </div>
            
            </div>
          </div>
        </div>
        
              <div class="col-sm-6 col-md-12 col-lg-8 col-xl-8 oh-desktop">
                <div class="group-xmd group-sm-justify">
                  <div class="footer-modern-contacts wow slideInUp">
                    <div class="unit unit-spacing-sm align-items-center">
                      <div class="unit-left"><span class="icon icon-24 mdi mdi-phone"></span></div>
                      <div class="unit-body"><a class="phone" href="tel:#">01775332747</a></div>
                    </div>
                  </div>
                  <div class="footer-modern-contacts wow slideInDown">
                    <div class="unit unit-spacing-sm align-items-center">
                      <div class="unit-left"><span class="icon mdi mdi-email"></span></div>
                      <div class="unit-body"><a class="mail" href="mailto:#">asakib201240@gmail.com</a></div>
                    </div>
                  </div>
                  <div class="wow slideInRight">
                    <ul class="list-inline footer-social-list footer-social-list-2 footer-social-list-3">
                      <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                      <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                      <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                      <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>

<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
  
  $name = $_POST['name'];
  
  $email = $_POST['email'];
  
   
  $date = $_POST['phone'];
 
   
  $massage=$_POST["message"];
 
 
$dbsz = mysqli_connect("localhost", "root", "", "food");
$si="INSERT INTO `contacts`(`name`, `email`, `phone`, `massage`) VALUES ('$name','$email','$date','$massage')";

$re=mysqli_query($dbsz,$si);
if($re){
    
    
}


else{


}

}



?>