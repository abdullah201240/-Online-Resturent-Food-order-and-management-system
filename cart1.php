<?php
session_start();

if(!isset($_SESSION['email'])){
    header("location: singin.php");
    exit;
}


?>







<?php
 $id=$_GET['id'];
$foodname="";
        
$foodprice="";
$fooddis="";

$db = mysqli_connect("localhost", "root", "", "food");
$sql="select * from items where id=$id";
$res=mysqli_query($db,$sql);
while($row=mysqli_fetch_array($res)){
    $foodname=$row['titel'];
    $foodprice=$row['price'];
    $fooddis=$row['details'];
   



    ?>





<?php } ?>



<?php

$sakib=$_SESSION['email'];

$db = mysqli_connect("localhost", "root", "", "food");
$sql = "Select * from userinfo where email='$sakib'";
$result = mysqli_query($db,$sql);

while($row = mysqli_fetch_array($result)){
     $fname= $row['fastname'] ;
     $fname.= $row['lastname'] ;
     $email=$row['email'] ;
     $phone=$row['phone'];
     $usid=$row['userid'];
     
     

}








?>
<?php

$db = mysqli_connect("localhost", "root", "", "food");
$sql=" INSERT INTO `cart`(`foodname`, `foodid`, `price`, `details`,  `userid`, `username`, `email`, `phone`) VALUES ('$foodname','$id','$foodprice','$fooddis','$usid',' $fname',' $email','$phone')    ";

$result=mysqli_query($db,$sql);
        if($result){
             $ok=true;
            
        }
       
   
   else{
    $exists1=true;
    
   }
   header("location: new.php");

?>