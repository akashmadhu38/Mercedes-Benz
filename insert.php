<?php
include("testing.php");
if($_GET['submit'])
{
$rn =$_GET['name'];
$sn =$_GET['password'];
$rn =$_GET['name'];
$sn =$_GET['password'];
		$query ="INSERT INTO login VALUES('$rn','null','$sn')";
$data =mysqli_query($conn,$query);
if($data)
{
	header("location:../web/webcreate/Home.php");
}
else
	echo"<script>alert('failed')</script>";
	}
	

?>