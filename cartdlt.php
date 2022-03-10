
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
echo" ";


$myid= $row['userid'];


}



?>








<?php


$id=$_GET['foodid'];
$db = mysqli_connect("localhost", "root", "", "food");
$sql="DELETE FROM `cart` WHERE foodid=$id AND userid=$myid";
$result=mysqli_query($db,$sql);
header("location: new.php");





?>