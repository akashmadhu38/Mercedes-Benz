<?php


 $id=$_GET["id"];

include("../connection.php");
$ob=new connection();

 $sql2="delete from review where rid=$id";
$res2=$ob->execute($sql2);


echo "<script>window.onload=function(){alert('Review deleted!!!..');
window.location='viewreview.php';}</script>";


?>