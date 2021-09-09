<?php


 $id=$_GET["id"];

include("../connection.php");
$ob=new connection();

 $sql2="delete from addboat where bid=$id";
$res2=$ob->execute($sql2);


echo "<script>window.onload=function(){alert('Boat details deleted!!!..');
window.location='viewboat.php';}</script>";


?>