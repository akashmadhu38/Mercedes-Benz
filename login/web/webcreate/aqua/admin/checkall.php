<?php
 $f=$_POST['first'];
 $s=$_POST['second'];

 include("../connection.php");
$ob=new connection();
$sql="select * from booking where date between '$f' and '$s'";
$res1=$ob->execute($sql);
?><table align="center" width="840">
<tr bgcolor="#9999FF" height="50" ><td><b><font color="#FF0000"><i>Booking id</td><td></td><td><b><font color="#FF0000"><i>Card Type&nbsp;&nbsp;</td>
<td><b><font color="#FF0000"><i>Expiry date&nbsp;&nbsp;</td><td><b><font color="#FF0000"><i>CVV&nbsp;&nbsp;</td><td><b><font color="#FF0000"><i>Booking Amount&nbsp;&nbsp;</td>
<td><b><font color="#FF0000"><i>Payment date&nbsp;&nbsp;</td><td><b><font color="#FF0000"><i>House Boatname&nbsp;&nbsp;</td><td><b><font color="#FF0000"><i>Amount credited by&nbsp;&nbsp;</td></tr>
<?php

while($r1=mysqli_fetch_array($res1))
{

         ?>
				
<tr><td><?php echo $r1[0];?></td><td></td>
<td><?php echo $r1[3];?></td>&nbsp;&nbsp;<td><?php echo $r1[4];?></td>&nbsp;&nbsp;<td><?php echo $r1[5];?></td>&nbsp;&nbsp;
<td><?php echo $r1[6];?></td>&nbsp;&nbsp;<td><?php echo $r1[7];?></td>&nbsp;&nbsp;

 <?php
$fl=$r1[1];
$s="select * from addboat where bid=$fl";
$re=$ob->execute($s);

$d=mysqli_fetch_array($re);?>
<td><?php echo $d[1];?></td><?php
$fl=$r1[2];
$s="select * from userreg where loginid=$fl";
$re=$ob->execute($s);

$d1=mysqli_fetch_array($re);?>
<td><?php echo $d1[1];?></td>

        </tr><?php
}

?>

</table>
 
     
	
