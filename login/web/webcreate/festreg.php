<?php
include("testing.php");
error_reporting(0);
?>
<html>
<head>
<style>
body{background-color:powderblue;}
</style>
</head>
<body >
<form action="fest2.php" method="POST">
<h1  style="color:black">COLLEGE NAME<input type="text" name="clgname"/>
<h1  style="color:black">STUDENT NAME<input type="text" name="stname"/><br>
<h1 style="color:black">REGISTERATION ID<input type="text" name="rgid"/><br>
<h1 style="color:black">MOBILE NUMBER<input type="number" name="mob"/><br>
<h1 >EVENTS</h1><select name="dropdown">
<option value="cod">CODING</option>
<option value="NFS">NFS</option>
<option value="spot">SPOT DANCE</option>
<option value="sd">SOLO DANCE</option>
<option value="ph">PHOTOGRAPHY</option>
<option value="mph">MOBILE PHOTOGRAPHY</option>
<option value="seco">SELFIE CONTEST</option>
<option value="fb">3S FOOTBALL</option>
<option value="quiz">QUIZ</option>
<option value="th">TREASSURE HUNT</option>
</select>
<h1><input type="submit" name="submit" value="SUBMIT" />
</form>
<?php
if($_POST['submit'])
{
$rn =$_POST['clgname'];
$sn =$_POST['stname'];
$ri =$_POST['rgid'];
$mo =$_POST['mob'];
$ev =$_POST['dropdown'];
if($rn!="" && $sn!="" && $ri!="" && $mo!="" && $ev!="" )
	{
		$query ="INSERT INTO fest1 VALUES('$rn','$sn','$ri','$mo','$ev')";
$data =mysqli_query($conn,$query);
}
}
?>
</form>
</body>
</html>
