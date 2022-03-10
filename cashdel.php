<?php
session_start();

if(!isset($_SESSION['email'])){
    header("location: singin.php");
    exit;
}


?>

<?php


$sakib=$_SESSION['email'];
$myid="";
include'dpconnec.php';
$sql = "Select * from userinfo where email='$sakib'";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)){

$myid= $row['userid'];
$name=$row['fastname'];
$name.=$row['lastname'];
$email=$row['email'];
$phone=$row['phone'];
$address=$row['address'];




}



?>















<?php

$tsum=$_GET['sum'];




$z=$_SESSION['p'];




$totalname="";
$sa=",";
$db = mysqli_connect("localhost", "root", "", "food");
    $sql = "SELECT * FROM `cart` where userid='$myid'";

    $result = mysqli_query($db,$sql);

    while($row = mysqli_fetch_array($result)){
        
      $foodname=$row['foodname'];

      
      $totalname=$totalname.$sa.$foodname;
      
      



?>
<?php }?>
<?php
if($foodname!=null){
    $_SESSION['rock']=2;
}


$db = mysqli_connect("localhost", "root", "", "food");
$sql="INSERT INTO `orders`(id,`name`, `email`, `phone`, `address`, `foodname`, `price`,paidprice,state) VALUES ('$myid','$name','$email','$phone','$address','$totalname','$tsum','$z','Cooking')";

$result=mysqli_query($db,$sql);
        

   unset($_SESSION['p']);
   $db = mysqli_connect("localhost", "root", "", "food");
   $sip="DELETE FROM `cart` WHERE userid='$myid'";
   $result=mysqli_query($db,$sip);

   header("location: orderdone.php");


?>