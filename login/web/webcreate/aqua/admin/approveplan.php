<?php


 $id=$_GET["id"];

include("../connection.php");
$ob=new connection();

 $sql2="update companyplan set status=1 where cid=$id";
$res2=$ob->execute($sql2);
 



echo "<script>window.onload=function(){alert('plan approved!!!..');
window.location='viewcompanyplan.php';}</script>";

?>