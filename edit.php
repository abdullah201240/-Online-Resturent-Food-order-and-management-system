<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/add.css">
    <title>Admin Manu</title>
  </head>
  <body>


  <?php
  $id=$_GET['id'];
  
  
        $foodname="";
        
        $foodprice="";
        $fooddis="";
        $foodimg="";
        $db = mysqli_connect("localhost", "root", "", "food");
        $sql="select * from items where id=$id";
        $res=mysqli_query($db,$sql);
        while($row=mysqli_fetch_array($res)){
            $foodname=$row['titel'];
            $foodprice=$row['price'];
            $fooddis=$row['details'];
            $foodimg=$row['img'];



            ?>
       



  
 <?php } ?>
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
          <a class="nav-link" href="adminlogout.php"><h3>Logout</h3></a>
        </li>
       
        
      </ul>
      <form class="d-flex">
       <h3>Welcome Abdullah Al Sakib</h3>
      </form>
    </div>
  </div>
</nav>


<div class="container"> <div class=" text-center mt-5 ">
        <h1>Edit Food item</h1>
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
                                        <div class="form-group"> <label for="form_name">Food Name</label> <input value="<?php echo $foodname; ?>" id="form_name" type="text" name="fname" class="form-control" placeholder="<?php echo $foodname; ?>"  data-error="Firstname is required."> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Food Price</label> <input value="<?php echo $foodprice; ?>" id="form_lastname" type="text" name="price" class="form-control" placeholder="<?php echo $foodprice; ?>"  data-error="Lastname is required."> </div>
                                    </div>
                                </div>
                                
                                
                                <div class="row">
                                    <div class="col-md-12">
                                      
                                    <div class="form-group"> <label for="form_message">Food Description</label> <input value="<?php echo $fooddis; ?>" id="form_message" name="des" class="form-control" placeholder="<?php echo $fooddis; ?>" rows="4"  data-error="Please, leave us a message."></input> </div>
                                    
                                    
                                    </div>
                                    <div class="col-md-6">
                                    <img src="<?php echo $foodimg; ?>" alt="" width="161" height="162"/>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Add Food Image</label> <input id="form_lastname" type="file" name="uploadfile" class="form-control" placeholder="Food Image"  data-error="Lastname is required."> </div>
                                    </div>
                                </div>






                                    <div class="col-md-12"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " name="upload" value="Edit Food"> </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- /.8 -->
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
error_reporting(0);
?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $foodname=$_POST["fname"];
 
        
        $foodprice=$_POST["price"];
        $fooddis=$_POST["des"];


  $msg = "";
  $id=$_GET['id'];
  
  
  if (isset($_POST['upload'])){
   
    $filename =$foodimg;
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"]; 
    if($filename=="") {
        $folder  =$foodimg;
    }
    else{
        $folder = "images/".$filename;
    }  
        
        
        
          
    $db = mysqli_connect("localhost", "root", "", "food");
  
        
        $sql="UPDATE `items` SET `img`='$folder',`price`='$foodprice',`details`='$fooddis',`titel`='$foodname' WHERE id='$id'";
  
       
        mysqli_query($db, $sql);
          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
            
        }else{
            $msg = "Failed to upload image";
      }
       
   }
   $result = mysqli_query($db, "SELECT * FROM food");
   
  }      
      
  
  
?>