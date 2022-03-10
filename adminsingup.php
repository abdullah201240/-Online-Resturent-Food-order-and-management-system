<?php
$ok=false;

$exists=false;
    $exists1=false;
    
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include'dpconnec.php';
    $name=$_POST["name"];
    
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    
    
    
    $existSql = "SELECT * FROM admininfo WHERE email = '$email'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        $exists=true;
        
    }
    else{

    

   if($password==$cpassword){
    $usid=(rand(10,100));

    $sql = "INSERT INTO admininfo (name,id,email,phone,password,address)
VALUES ('$name','$usid','$email', '$phone','$password''$address')";



       
        $result=mysqli_query($conn,$sql);
        if($result){
             $ok=true;
            
        }
       
   }
   else{
    $exists1=true;
    
   }
     
}   
    
    

}

 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/food1lofo.png">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <!-- FontAwesome CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/uf-style.css">
    <title>Register Form Food Truck</title>
  </head>
  <body>
      
    <div class="uf-form-signin">
      <div class="text-center">
        <a href="index.php"><img src="images/food1lofo.png" alt="" width="100" height="100"></a>
      <h1 class="text-white h3">Account Register</h1>
      </div>
      <form class="mt-4" action="" method="POST">
        <div class="input-group uf-input-group input-group-lg mb-3">
          <span class="input-group-text fa fa-user"></span>
          <input type="text" class="form-control" placeholder="Name" id="name" name="name" required>
        </div>

        









        <div class="input-group uf-input-group input-group-lg mb-3">
          <span class="input-group-text fa fa-envelope"></span>
          <input type="text" class="form-control" placeholder="Email address"id="email" name="email" required>
        </div>
        <div class="input-group uf-input-group input-group-lg mb-3">
          <span class="input-group-text fa fa-phone"></span>
          <input type="text" class="form-control" placeholder="Your phone"id="phone" name="phone" required>
        </div>


        <div class="input-group uf-input-group input-group-lg mb-3">
          <span class="input-group-text fa fa-address-book"></span>
          <input type="text" class="form-control" placeholder="Your Address"id="phone" name="address" required>
        </div>









        <div class="input-group uf-input-group input-group-lg mb-3">
          <span class="input-group-text fa fa-lock"></span>
          <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
        </div>
        <div class="input-group uf-input-group input-group-lg mb-3">
          <span class="input-group-text fa fa-lock"></span>
          <input type="password" class="form-control" placeholder="Password confirmation" id="cpassword" name="cpassword" required>
        </div>
        <div class="d-grid mb-4">
          <button type="submit" class="btn uf-btn-primary btn-lg">Sign Up</button>
        </div>
        <div class="mt-4 text-center">
          <span class="text-white">Already a member?</span>
          <a href="singin.php">Login</a>
        </div>
        <?php
        if($exists){
            echo'  <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Email Already Exists</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            
                  </div>';
        }
        if($ok){
          echo'  <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your Account is created.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
                  </div>';
        }
        if($exists1){
            echo'  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Not Success!</strong> Your Account is Not created.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
          </div>';
        }
        
        ?>
      </form>
    </div>
   
</div>
    <!-- JavaScript -->

    <!-- Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
  </body>
</html>