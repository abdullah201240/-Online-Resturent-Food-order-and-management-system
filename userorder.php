<?php
session_start();

if(!isset($_SESSION['email'])){
    header("location: singin.php");
    exit;
}


?>


<!DOCTYPE html>
<html>
  <head>
    <title>Order</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=2.0, maximum-scale=2.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/food1lofo2.png" type="image/x-icon">
    <!-- Stylesheets-->
   
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/styless.css">
   
  </head>
  <body>
    <div class="preloader">
      <div class="wrapper-triangle">
        
      </div>
    </div>
    <div class="page">
      
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
                  <div class="rd-navbar-brand"><a class="brand" href="home.php"><img class="brand-logo-dark" src="images/food1lofo2.png" alt="" width="17" height="6"/></a></div>
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
                      
                    </ul>
                  </div>
                  <div class="rd-navbar-main">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">


                    
                      <li class="rd-nav-item "><a class="rd-nav-link" href="home.php">Home</a>
                      </li>
                      <li class="rd-nav-item "><a class="rd-nav-link" href="new.php"><span class="icon mdi mdi-cart"></span><sup><?php echo $number; ?></sup> </a></li>
                      
                     
                      <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.php">Contacts</a>
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="userorder.php">Order</a>
                      
                      <li class="rd-nav-item"><a class="rd-nav-link" href="logout.php">Logout</a>
</li>
                        
                      
                    </ul>
                  </div>
                </div>
                
                
                  
                     
       
      </header>
      <?php
     if(isset($_SESSION['saki']))
      
  {
    ?>
    <h1 id="ten-countdown">30:00</h1>
    <script >
      function countdown( elementName, minutes, seconds )
{
    var element, endTime, hours, mins, msLeft, time;

    function twoDigits( n )
    {
        return (n <= 9 ? "0" + n : n);
    }

    function updateTimer()
    {
        msLeft = endTime - (+new Date);
        if ( msLeft < 1000 ) {
           
            element.innerHTML = "Time is up!";
            <?php
            unset($_SESSION['saki']);
            ?>
           

        } else {
            time = new Date( msLeft );
            hours = time.getUTCHours();
            mins = time.getUTCMinutes();
            element.innerHTML = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
            setTimeout( updateTimer, time.getUTCMilliseconds() + 500 );
        }
    }

    element = document.getElementById( elementName );
    endTime = (+new Date) + 1000 * (60*minutes + seconds) + 500;
    updateTimer();
}

countdown( "ten-countdown", 30, 0 );





        </script>
   
<?php }

?>
      

      <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Food Name</th>
      <th scope="col">Price</th>
      <th scope="col">Paid Price</th>
    </tr>
  </thead>
  <tbody>
<?php

$db = mysqli_connect("localhost", "root", "", "food");
$sql=" SELECT * FROM `orders` where id='$myid'";
$result=mysqli_query($db,$sql);
while($row = mysqli_fetch_array($result)){

  $id=$row['newid'];


?>
    


    <tr>



  
    <td ><?php echo $row['name'] ?></td>
      <td ><?php echo $row['email'] ?></td>
      <td ><?php echo $row['phone'] ?></td>
      <td><?php echo $row['address'] ?></td>
      <td><?php echo $row['foodname'] ?></td>
      <td><?php echo $row['price'] ?></td>
      <td><?php echo $row['paidprice'] ?></td>
      <?php 
if($row['state']=="Cooking"){
    ?>
    <?php echo"<td><a href='orderdlt.php?id=$id'><button  type='button' class='btn btn-success' >Cancel</button></td>";?>
<?php }

       ?>

      
    
      


      </tr>












    
      
      
    
    <?php } ?>
    
  </tbody>
</table>
      <!-- Page Footer-->
      <footer class="section footer-modern context-dark footer-modern-2">
        <div class="footer-modern-line">
          <div class="container">
            <div class="row row-50">
              <div class="col-md-12 col-lg-4">
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
              
              <div class="col-md-12 col-lg-4 col-xl-3">
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
                      <div class="unit-body"><a class="mail" href="mailto:#">asakib201240@bscse.uiu.ac.bd</a></div>
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
        
        </div>
      </footer>
    </div>








      <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- coded by Himic-->
  </body>
</html>