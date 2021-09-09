<?php


 $id=$_GET["id"];

include("../connection.php");
$ob=new connection();

 $sql2="delete from companyplan where cid=$id";
$res2=$ob->execute($sql2);


echo "<script>window.onload=function(){alert('Plan deleted!!!..');
window.location='viewcompanyplan.php';}</script>";


?>