
<?php

$id=$_GET['id'];
$db = mysqli_connect("localhost", "root", "", "food");
$sql="DELETE FROM `items` WHERE id=$id";
$result=mysqli_query($db,$sql);
header("location: addfood.php");





?>