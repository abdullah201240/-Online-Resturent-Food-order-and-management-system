<?php

session_start();

if(!isset( $_SESSION['price'])){


    header("location: singin.php");

}


?>
<?php

$hi=$_SESSION['price'];
$int = (int)$hi; 
$x=$int*0.2;
  
 
$z=(int)($int-$x);  







?>









<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lsa Bank</title>
  </head>
  <body>
    

  <div class="container"> <div class=" text-center mt-5 ">
        <h1>Payment</h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form id="contact-form" role="form" method="POST" 
              action="" 
              enctype="multipart/form-data">
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">LSA Bank Card Number</label> <input id="form_name" type="text" name="cardnum" class="form-control" placeholder="Please enter Your Card Number" required="required" data-error="Firstname is required."> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Email</label> <input id="form_lastname" type="text" name="email" class="form-control" placeholder="Please enter Your email" required="required" data-error="Lastname is required."> </div>
                                    </div>
                                </div>
                                
                                
                                <div class="row">
                                    <div class="col-md-12">
                                      
                                    <div class="form-group"> <label for="form_message">Password</label> <input  type="password"id="form_message" name="password" class="form-control" placeholder="Please enter The Food Description" rows="4" required="required" data-error="Please, leave us a message."></input> </div>
                                    
                                    
                                    </div>
                                    <div class="row">
                                    <div class="col-md-12">
                                      
                                    <div class="form-group"> <label for="form_message">Total Price</label> <input  <?php  echo" value='$z' "?>  type="text"id="form_message" name="price" disabled="disabled" class="form-control" rows="4" required="required" data-error="Please, leave us a message."></input> </div>
                                    
                                    
                                    </div>

                                    






                                    <div class="col-md-12"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " name="upload" value="Payment"></div>
                                    
                                    
                                
                                
                                </div>
                            </div>
                            </form>
                           
                    </div>
                </div>
            </div> <!-- /.8 -->
            <div class="col-md-12" style="text-align:center;"> <a href="home.php"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " name="home" value="Home"></a> </div>
        </div> <!-- /.row-->
    </div>
    
</div>











    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php



if($_SERVER["REQUEST_METHOD"] == "POST"){
    $code=(rand(1000,10000));
    $_SESSION['code']=$code;
    $_SESSION['p']=$z;
    
    
    $username = $_POST['email'];
    $_SESSION['em']=$username;
    
    $password = $_POST['password'];
    $cname = $_POST['cardnum']; 
    $tprices=$z; 
    $db = mysqli_connect("localhost", "root", "", "sakib");
    $sql="SELECT * FROM `save` WHERE email='$username' AND accountnum='$cname'";
    $result = mysqli_query($db,$sql);
    $num = mysqli_num_rows($result);
    if($num==1){
        

        $to_email = $username;
        $subject = "Food Truck Payment Code";
        $body = "Your code is: ";
        $body.= $code;
        $headers ="From:foodtruckbangladeshbd@gmail.com";
        
        if (mail($to_email,$subject,$body,$headers)) {
            
        } else {
            echo "Email sending failed...";
        }
        echo "<script> location.href='lsa1.php'; </script>";
        exit;
        
    }
}




        
        


?>
