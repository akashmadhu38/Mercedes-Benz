 <?php
 include("testing.php");
if($_POST['submit']
{
 $pw=$_POST['psw'];
 $un=$_POST['usrname'];
 if($pw!="" && $un!="")
	{
		$query ="INSERT INTO benz VALUES('$pw','$un')";
$data =mysqli_query($conn,$query);
}
}
?>