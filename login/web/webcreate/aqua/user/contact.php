<?php
extract($_POST);

include("../connection.php");
$ob=new connection();
		$sql3="insert into contact(name,email,sub,msg)
values('$name','$email','$sub','$msg')";
$res3=$ob->execute($sql3);
header("location:userhome.php");
?>