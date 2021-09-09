<?php


 $id=$_GET["id"];

include("../connection.php");
$ob=new connection();

 $sql2="update login set status=1 where loginid=$id";
$res2=$ob->execute($sql2);
 $sql3="update ownerreg set status=1 where loginid=$id";
$res3=$ob->execute($sql3);



echo "<script>window.onload=function(){alert('Owner request approved!!!..');
window.location='ownerapproval.php';}</script>";

?>