<?php
include("connection.php");
$uname=$_GET['Username'];
$Ph=$_GET['Phone'];
$e=$_GET['email'];
$P=$_GET['Password'];
$CP=$_GET['Cpassword'];
if($P==$CP)
$query="insert into register values('$uname','$Ph','$e','$P','$CP')";
else
$data=mysqli_query($conn,$query);
if($data)
	echo"ok";
?>