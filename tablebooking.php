
<?php

session_start();
$username=$_SESSION['username'];

if(($username==null)){
    header("location: adminlogin.php");
    exit;
}
?>






<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Table Booking List</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
   <a class="navbar-brand" href="adminhome.php"><img src="images/food1lofo.png" alt="Girl in a jacket"></a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="adminhome.php"><h3>Home</h3></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addfood.php"><h3>Menu</h3></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="orders.php"><h3>Orders</h3></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tablebooking.php"><h3>Booking</h3></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admincontact.php"><h3>Contact</h3></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="adminlogout.php"><h3>Logout</h3></a>
        </li>
       
        
      </ul>
      <form class="d-flex">
       <h3>Welcome Abdullah Al Sakib</h3>
      </form>
    </div>
  </div>
</nav>

<h1 style="text-align:center;">All Table Booking List</h1>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
     
     
      <th scope="col">Booking date</th>
      <th scope="col">Booking Period</th>
      <th scope="col">Massage</th>
    </tr>
  </thead>
  <tbody>
<?php

$db = mysqli_connect("localhost", "root", "", "food");
$sql=" SELECT * FROM `bookinginfo`";
$result=mysqli_query($db,$sql);
while($row = mysqli_fetch_array($result)){





?>
    


    <tr>



  
    <td ><?php echo $row['name'] ?></td>
      <td ><?php echo $row['email'] ?></td>
      <td ><?php echo $row['date'] ?></td>
      <td><?php echo $row['service'] ?></td>
      <td><?php echo $row['massage'] ?></td>
     


      </tr>












    
      
      
    
    <?php } ?>
    
  </tbody>
</table>












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