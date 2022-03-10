<?php
session_start();

if(!isset($_SESSION['email'])){
    header("location: singin.php");
    exit;
}


?>
<?php

$ssum=$_SESSION['price'];
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Online Payment</title>
    <link rel="icon" href="images/food1lofo2.png" type="image/x-icon">
  </head>
  <body>



  
   

  

  <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img class="brand-logo-dark" src="images/food1lofo2.png" alt=""/></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <b><h1 style="color:white">Welcome

<?php


$sakib=$_SESSION['email'];
$myid="";
include'dpconnec.php';
$sql = "Select * from userinfo where email='$sakib'";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)){
echo" ";

echo $row['fastname'] ;
echo" ";
echo $row['lastname'] ;
echo"   ";
$myid= $row['userid'];



}



?></b></h1>
      
      
      <form class="d-flex">
        
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      


        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="new.php">Cart </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contacts.php">Contacts </a>
        </li>


        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
        </li>

      </form>
    </div>
  </div>
</nav>



<div class="container"> <div class=" text-center mt-5 ">
        <h1>Online Payment</h1>
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
                                        <div class="form-group"> <label for="form_name">Payment Option</label><br> <select name="Payment" id="lang">
                                        <option value="Payment Option">Payment Option</option>
                                        <option value="Lsa_Bank">Lsa Bank</option>
        <option value="Bkash">Bkash</option>
        
      </select></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Tatal Price</label> <input <?php echo" value='$ssum' "?> disabled="disabled" id="form_lastname" type="text" name="price" class="form-control"  required="required" data-error="Lastname is required."> </div>
                                    </div>
                                </div>
                                
                                
                               






                                    <div class="col-md-12" style="text-align:center;"> <input  type="submit" class="btn btn-success btn-send pt-2 btn-block " name="submit" value="Submit"> </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
</div>


<?php
    if(isset($_POST['submit'])){
    if(!empty($_POST['Payment'])) {
        $selected = $_POST['Payment'];
       
        $_SESSION['price']=$ssum;
        
       
        

        
    } else {
       
    }

     if($selected=="Lsa_Bank"){

        
        
         header("location: lsa.php");

     }





    }
?>

















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