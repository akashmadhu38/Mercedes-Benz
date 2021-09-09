<?php
session_start();
if(!isset($_SESSION['uname'])) { //if not yet logged in
   header("Location: ../login.php");// send to login page
  } 
include("header.php");
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style>
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
<a href="viewplan.php"><img src="home.png" width="70" height="70"></a>

<?php

$cid=$_GET['id'];
include("../connection.php");
$ob=new connection();
$sql="select * from boattoplan where planid=$cid";
$res1=$ob->execute($sql);

$r1=mysqli_fetch_array($res1);
if($r1[0]>0)
{
$boatid=$r1[0];
$sq="select * from addboat where bid=$boatid";
$res=$ob->execute($sq);?>
<table>
<tr height="50" bgcolor="#CCCCCC"><td align="center" colspan="2"><h3>AVAILABLE BOATS</h3></td></tr><?php
while($r=mysqli_fetch_array($res))
{


		?><TR><TD>

<div class="img">
  <a target="_blank" href="../owner/uploads/<?php echo $r[19];?>">
   <img src="../owner/uploads/<?php echo $r[19];?>" alt="Trolltunga Norway" >
  </a><div class="desc"><font color="#FF3366"><b><?php echo $r[1];?></b></font></div>
  <div class="limit"><font color="#3366FF"><b><?php echo $r[2];?></b></font></div>

<div align="center" style="background-color:#FFCC66 "><a href="booking.php?id=<?php echo $r[0];?> &amt=<?php echo $r[4];?> &oid=<?php echo $r[20];?>"><b>Book Now>>></a></div><br>
</div>
				

    <?php
}
}
else
{
echo "sorry no more boats available..!!!";
}
?>

</table>

</form>

</body>
</html>
