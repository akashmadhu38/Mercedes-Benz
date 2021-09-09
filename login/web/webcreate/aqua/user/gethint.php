<html>
<head>
<style>
div.img {
    margin: 5px;
    border: 1px solid red;
    float: left;
    width: 300px;
}

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100%;
    height: 170px;
}

div.desc {
        text-align: center;
}


.limit{
text-align: center;
    width:270px;
word-wrap: break-word;

}
</style>




</head>
<body>


<table border="1">
<?php

$q=$_GET["q"];
 include("../connection.php");
$ob=new connection();
$sql="select * from addboat where type like '$q'";
$res1=$ob->execute($sql);

while($r=mysqli_fetch_array($res1))
{?><div class="img">
  <a target="_blank" href="../owner/uploads/<?php echo $r[19];?>">
   <img src="../owner/uploads/<?php echo $r[19];?>" alt="Trolltunga Norway" >
  </a><div class="desc"><font color="#3366FF"><b><?php echo $r[1];?></b></font></div>

  <div class="limit"><p><?php echo $r[2];?></p></div>
<div class="desc"><a href="viewboatmore.php?id=<?php echo $r[0];?>"><font color="#FF0000"><b>View more...</b></font></a></div><br>
<div align="center"><a href="booking.php?id=<?php echo $r[0];?> &amt=<?php echo $r[4];?> &oid=<?php echo $r[20];?>">Book Now</a></div><br>
</div>

 

 <?php


}
?>