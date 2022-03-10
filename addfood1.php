<?php
error_reporting(0);
?>

<?php
  $msg = "";
  
  
  if (isset($_POST['upload'])){
   
  
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "images/".$filename;
        $foodname=$_POST["fname"];
        
        $foodprice=$_POST["price"];
        $fooddis=$_POST["des"];
        
          
    $db = mysqli_connect("localhost", "root", "", "food");
  
        
        $sql = "INSERT INTO items (img,price,details,titel) VALUES ('$folder','$foodprice','$fooddis','$foodname')";
  
       
        mysqli_query($db, $sql);
          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
            
        }else{
            $msg = "Failed to upload image";
      }
       
   }
   $result = mysqli_query($db, "SELECT * FROM food");
   header("location: addfood.php");
   
          
      
  
  
?>