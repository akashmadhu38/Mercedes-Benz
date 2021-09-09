<?php
session_start();
$id=$_SESSION["lid"];
extract($_POST);
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"waste");

	 $sql="update userreg set name='$name',addres='$address',district='$dis',muni='$muni',email='$email',contact='$contact',landmark='$land' where loginid=$id";
	mysqli_query($con,$sql);
	header("location:userhome.php");

	
?>