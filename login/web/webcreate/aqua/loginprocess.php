<?php 
session_start();
$u=$_POST['uname'];
$p=$_POST['pwd'];
include("connection.php");
$ob=new connection();

$sql="select * from login where username='$u' and BINARY password='$p' and status=1";
$res1=$ob->execute($sql);

$r=mysqli_fetch_array($res1);
		
		
		$_SESSION['uname']=$r[1];
		
		$_SESSION['id']=$r[0];
		
		
		if($r>0)
		{
		if($r[3]=='admin')
		{
		header('location:admin/index.php');
		}
		else if($r[3]=='user')
		{
		header('location:user/userhome.php');
		}
		else if($r[3]=='owner')
		{
		header('location:owner/home.php');
		}
		}
		else
		{
		echo "<script>
window.onload=function()
{
alert('Invalid username or password....!');
window.location='login/login.php';
}
</script>";


		}
?>