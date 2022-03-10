<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dpconnec.php';
    $username = $_POST["email"];
    $password = $_POST["password"]; 
    
     
    $sql = "Select * from userinfo where email='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $username;
        header("location: home.php");

    } 
    else{
        $showError =true;
    }
}
    
?>




<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/food1lofo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/uf-style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <title>Login Form Food Truck</title>
  </head>
  <body onload="getLocation();">
    <div class="uf-form-signin">
      <div class="text-center"> 
        <a href="index.php"><img src="images/food1lofo.png" alt="" width="100" height="100"></a>
      <h1 class="text-white h3">Account Login</h1>
      </div>
      <form class="sakib"action="" method="POST" autocomplete="off">
        <div class="input-group uf-input-group input-group-lg mb-3">
          <span class="input-group-text fa fa-user"></span>
          <input type="text" class="form-control" placeholder="Username or Email address" id="email" name="email">
        </div>
        <div class="input-group uf-input-group input-group-lg mb-3">
          <span class="input-group-text fa fa-lock"></span>
          <input type="password" class="form-control" placeholder="Password" id="password" name="password">
        </div>
        

        


        <div class="d-flex mb-3 justify-content-between">
          <div class="form-check">
            <input type="checkbox" class="form-check-input uf-form-check-input" id="exampleCheck1">
            <label class="form-check-label text-white" for="exampleCheck1">Remember Me</label>
          </div>
          <a href="#">Forgot password?</a>
        </div>
        <div class="d-grid mb-4">
          <button onclick="getLocation()" type="submit" class="btn uf-btn-primary btn-lg">Login</button>
         
        </div>
        
        <div class="d-flex mb-3">
            <div class="dropdown-divider m-auto w-25"></div>
            <small class="text-nowrap text-white">Or login with</small>
            <div class="dropdown-divider m-auto w-25"></div>
        </div>
        <div class="uf-social-login d-flex justify-content-center">
          <a href="#" class="uf-social-ic" title="Login with Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="uf-social-ic" title="Login with Twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" class="uf-social-ic" title="Login with Google"><i class="fab fa-google"></i></a>
        </div>
        <div class="mt-4 text-center">
          <span class="text-white">Don't have an account?</span>
          <a href="newid.php">Sign Up</a>
        </div>
        <?php
         if($showError){
          echo'  <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Email or Password are Wrong</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          
                </div>';
         }

        ?>
        
      </form>

     
    </div>

    <!-- JavaScript -->

    <!-- Separate Popper and Bootstrap JS -->
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
     
      
      
      
      
      
      
  </body>
</html>