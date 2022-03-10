<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
  
  $name = $_POST['name'];
  
  $email = $_POST['email'];
  
   
  $date = $_POST['date'];
 
   if(!empty($_POST['booking'])) {
    $selected = $_POST['booking'];
   
    
   
    

    
} else {
   
}
 
  $massage=$_POST["message"];
 
 
$dbsz = mysqli_connect("localhost", "root", "", "food");
$si="INSERT INTO `bookinginfo`(`name`, `email`, `date`, `service`, `massage`) VALUES ('$name','$email','$date','$selected','$massage')";

$re=mysqli_query($dbsz,$si);
if($re){
     $ok=true;
    
}


else{
$exists1=true;

}

}

header("location: home.php");


?>