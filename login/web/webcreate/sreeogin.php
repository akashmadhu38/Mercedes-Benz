<?php
include("testing.php");
error_reporting(0);
?>
<html>
<body style="background-image:url('Mercedes-Benz-Wallpaper-5-1920x1200.JPG');">
<form action="about.php" method="post">
<img  src="symbol3 - Copy.png" style="margin-left:42.5%">
<h1 align="center" style="color:white">USRENAME <input type="text" name="uname"/>
<h1 align="center" style="color:white">PASSWORD <input type="password" name="pwrd"/><br>
<h1 style="margin-left:50%"><input type="submit" name="submit" value="SUBMIT" style="color:white" />
</form>
<?php
if($_POST['submit'])
{
$rn =$_POST['uname'];
$sn =$_POST['pwrd'];
if($rn!="" && $sn!="")
	{
		$query ="INSERT INTO STUDENT VALUES('$rn','$sn')";
$data =mysqli_query($conn,$query);
if($data)
{
	echo "data is inserted";
}
	}
	else
	{
		echo "all fields requierd";
	}
}

?>
</body>
</html>