<?php
include("testing.php");
error_reporting(0);
?>
<html>
<head>
<title>WELCOME</title>
</head>
<body bgcolor="lightblue">
<form action="" method="GET">
<h2>ROLL NO<input type="text" name="Roll" value=""/><br>
<h2>NAME<input type="text" name="student" value=""/><br>
<h2>CLASS<input type="text" name="Class" value=""/><br>
<input type="submit" name="submit" value="SUBMIT"/>
<?php
if($_GET['submit'])
{
$rn =$_GET['Roll'];
$sn =$_GET['student'];
$cl =$_GET['Class'];

	if($rn!="" && $sn!="" && $cl!="")
	{
		$query ="INSERT INTO STUDENT VALUES('$rn','$sn','$cl')";
$data =mysqli_query($conn,$query);
	}

header("Location:login.php");
}
?>

</form>
</body>
</html>
  