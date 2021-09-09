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
<table width="700" align="center" cellpadding="10" cellspacing="20" height="300">
  <tr bgcolor="#FFCCFF">
    <th height="40" colspan="4" scope="row"><div align="center" class="style3">VIEW ADMINISTRATOR PLANS</div></th>
	
    </tr> 
          <?php
 include("../connection.php");
$ob=new connection();
$sql="select * from adminplan";
$res1=$ob->execute($sql);

while($r=mysqli_fetch_array($res1))
{
         ?>
				<form  method="post" name="form1">
.
    
	
  <tr>
    <td><font color="#FFFF00">Plan name:<img src="icons/v.jpg" width="50" height="50"> </td>
 
   <td><font color="#FFFF00"><?PHP echo $r[1];?></td>
 
    
    
  <td>
   <a href="viewplanmore.php?id=<?PHP echo $r[0];?>"><font color="#FF0000">View more plan details...</font></a></td>
  
 

 
    </tr>
    <?php
}
?>
</table>
</form>

</body>
</html>