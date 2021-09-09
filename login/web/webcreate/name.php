<?php
	include("testing.php");


$idClass=$_GET['modelID'];
	$qu="select modelName from benzmodel where modelID=".$idClass;
$da=mysqli_query($conn,$qu);
echo $da;
?>