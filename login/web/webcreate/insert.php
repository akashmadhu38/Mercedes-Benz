<?php
include("testing.php");
error_reporting(0);
?>
<html>
<head>
<title>WELCOME</title>
</head>
<body>
<form action="" method="GET">
ROLL NO<input type="text" name="Rollno"/><br><br>
NAME<input type="text" name="student"/><br><br>
CLASS<input type="text" name="Class"/><br><br>
SUBMIT<input type="submit" name="submit"/><br>
</form>
<form action="" method="GET">
ROLL NO<input type="text" name="Rollno"/><br><br>
NAME<input type="text" name="student"/><br><br>
CLASS<input type="text" name="Class"/><br><br>
SUBMIT<input type="submit" name="submit"/><br>
</form>
<?php
if($_GET['submit'])
{
$rn =$_GET['Rollno'];
$sn =$_GET['student'];
$cl =$_GET['Class'];

	if($rn!="" && $sn!="" && $cl!="")
	{
		$query ="INSERT INTO STUDENT VALUES('$rn','$sn','$cl')";
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
  