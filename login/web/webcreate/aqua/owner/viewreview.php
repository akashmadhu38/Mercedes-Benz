<?php
session_start();
if(!isset($_SESSION['uname'])) { //if not yet logged in
   header("Location: ../login.php");// send to login page
  } 
include("header.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

	
   </head>
   <body>             
          <form method="post" name="form1">
.
    <table width="700" align="center" >
  <tr>
    <td  colspan="4"><img src="icons/c.png" width="100" height="100"><b><font color="#FF0000">CUSTOMER REVIEW DIARY</td><td></td>
	
    </tr> 

	
          <?php
 include("../connection.php");
$ob=new connection();
$sql="select * from review";
$res1=$ob->execute($sql);

while($r=mysqli_fetch_array($res1))
{
         ?>
				
  
 
  

 
<?php $ig=$r[1];?>
 <td><b><font color="#0033FF">
<?php
$sq="select * from userreg where loginid=$ig";
$res=$ob->execute($sq);

$r1=mysqli_fetch_array($res);
 echo "Posted by   ".$r1[1];?> 
         

</td><?php $boat=$r[2];
    $s="select * from addboat where bid=$boat";
$rs=$ob->execute($s);

$e=mysqli_fetch_array($rs);?>
<td><b><font color="#0033FF">
<?php echo "Boat Name:   ".$e[1];?> </td>
  <td><b><font color="#0033FF"><?php echo $r[3];?>
  </td></tr>
   
   

 
    

    <?php
}
?>
</table>
<hr>
</body>
</html>