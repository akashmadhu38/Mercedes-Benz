<?php
session_start();
$lid=$_SESSION['id'];
$pid=$_GET['planid'];
$bid=$_GET['boatid'];


include("../connection.php");
$ob=new connection();
		 $sql3="insert into boattoplan(boatid,loginid,planid)
values('$bid','$lid','$pid')";
$res3=$ob->execute($sql3);
if($res3>0)
{
echo "<script>
window.onload=function()
{
alert('successfully added boat to plan....!');
window.location='home.php';
}
</script>";

}
?>
</body>
</html>