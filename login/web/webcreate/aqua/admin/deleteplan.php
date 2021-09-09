<?php


 $id=$_GET["id"];

include("../connection.php");
$ob=new connection();

 $sql2="delete from adminplan where aid=$id";
$res2=$ob->execute($sql2);


echo "<script>window.onload=function(){alert('Plan deleted!!!..');
window.location='viewadminplan.php';}</script>";


?>