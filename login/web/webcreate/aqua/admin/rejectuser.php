<?php


 $id=$_GET["id"];

include("../connection.php");
$ob=new connection();

 $sql2="delete from userreg where loginid=$id";
$res2=$ob->execute($sql2);
$sql="delete from login where loginid=$id";
$res=$ob->execute($sql);

echo "<script>window.onload=function(){alert('User request rejected!!!..');
window.location='userapproval.php';}</script>";


?>