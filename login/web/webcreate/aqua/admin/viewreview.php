<?php
session_start();
if(!isset($_SESSION['uname'])) { //if not yet logged in
   header("Location: ../login.php");// send to login page
  } include("header.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

	
   </head>
   <body>             
          <form method="post" name="form1">
.
    <table width="550" align="center" >
  <tr>
    <td bgcolor="#FFCC99" colspan="5"><img src="icons/c.png" width="100" height="100"><b><font color="#FF0000">CUSTOMER REVIEW DIARY</td><td></td>
	
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
         

</td><td>
<?php $i=$r[2];?>
 <td><b><font color="#0033FF">
<?php
$s="select * from addboat where bid=$i";
$re=$ob->execute($s);

$r3=mysqli_fetch_array($re);
 echo $r3[1]." Group";?> 
         

</td>
    <td><?php echo $r[3];?>
  <td>
  <a href="deletereview.php?id=<?PHP echo $r[0];?>"><img src="icons/d.jpg" width="80" height="80"></a>  </td></tr>
   
   

 
    

    <?php
}
?><tr bgcolor="#FFCC99" height="30"><td align="center" colspan="5"></td></tr>
</table>
<?php
include("footer.php");
?>
</body>
</html>