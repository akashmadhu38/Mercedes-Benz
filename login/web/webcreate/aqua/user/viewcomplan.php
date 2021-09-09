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
          
          
         
				<form  method="post" name="form1" enctype="multipart/form-data" action="booking.php">
.
    <table >

<?php

$id=$_GET['id'];
 include("../connection.php");
$ob=new connection();
$sql="select * from companyplan where cid=$id";
$res1=$ob->execute($sql);

while($r=mysqli_fetch_array($res1))
{

		?>
  <tr bgcolor="#CCCCFF" height="45">
   <td colspan="6" align="center"><b><h3><?php echo $r[1];?>   Details</h3></b> </td></tr>

	<tr height="50"><td align="center" bgcolor="#FF99FF">Meals</td><td align="center" bgcolor="#9966FF">Bedroom type</td>
<td align="center" bgcolor="#99CC99">Route</td><td align="center" bgcolor="#FFFF99" colspan="3">Activities</td></tr>
    </tr> 
	
  <tr>
    
 <td><img src="photos/meals.jpg" width="250" height="250"></td><td><img src="photos/bed.jpg" width="250" height="250"></td>


   <td><img src="photos/route.jpg" width="250" height="250"></td>
 <td><img src="photos/bal.jpg" width="250" height="250"></td><td><img src="photos/ca.jpg" width="250" height="250">



</td><td><img src="photos/fish.jpg" width="250" height="250">



</td>
 </tr >  

 <tr height="50"><TD align="center" colspan="6"><font color="#FF0000"><b>Package rate:<?php echo $r[2];?>
    </td>
	  <tr>
	  
	
    <td align="center" colspan="6"><font color="#FF0000"><b><?php echo $r[3];?> </td></tr><tr>
	
     
    
  <tr bgcolor=""><td align="center" colspan="6" bgcolor="#FFCCFF" height="50"><a href="boatplan.php?id=<?php echo $r[0];?>">VIEW BOATS>>></a></td></tr>
    <?php
}
?>
</table>

</form>

</body>
</html>