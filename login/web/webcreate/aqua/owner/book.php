<?php
session_start();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


 <form method="post" name="form1" action="">

         
            <table width="800" align="center" bordercolor="#FFDFAA" >
<tr><td colspan="5" align="center"><h2><font color="#FFFBF0">Booking diary</td></tr>
<tr height="50" ><td><b><font color="FF0000">Booking id</td><td><b><font color="#FF0000">Booking Amount</td><td><b><font color="#FF0000">stay date</td>
<td><b><font color="#FF0000">House boat name</td><td><b><font color="#FF0000">Booked by</td></tr>  








<?php
include("../connection.php");
$ob=new connection();

$id=$_SESSION['id'];
$sr="select * from addboat where loginid='$id'";
$re=$ob->execute($sr);

while($d=mysqli_fetch_array($re))
{
$boatid=$d[0];


$s="select * from booking where bid=$boatid";
$re1=$ob->execute($s);

while($d1=mysqli_fetch_array($re1))
{


?>
<tr><td><font color="#FFFBF0"><?php echo $d1[0];?>
</td><td><font color="#FFFBF0">Rs.<?php echo $d1[6];?></td><td><font color="#FFFBF0"><?php echo $d1[7];?></td>

<?php

$q="select bname from addboat where bid=$boatid";
$g=$ob->execute($q);

$a=mysqli_fetch_array($g);?>
<td><font color="#FFFBF0"><?php echo $a[0];?></td>
<?php
$lid=$d1[2];
   $t="select * from userreg where loginid=$lid";
$u=$ob->execute($t);

$z=mysqli_fetch_array($u);?>
<td><font color="#FFFBF0"><?php echo $z[1];?></td>

      </tr><?php
}
}
?>


</table>
</form>

</body>
</html>