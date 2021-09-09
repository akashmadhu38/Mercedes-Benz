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
          <form  method="post" name="form1">
.
    <table width="550" align="center" cellpadding="10" cellspacing="20">
  <tr bgcolor="#FFCCFF">
    <th height="40" colspan="4" scope="row"><div align="center" class="style3"><b>PACKAGES</div></th>
	
    </tr> 
<TR>
	
          <?php
 include("../connection.php");
$ob=new connection();
$sql="select * from adminplan";
$res1=$ob->execute($sql);

while($r=mysqli_fetch_array($res1))
{
         ?>
				
  
 
   <td><b><font color="#0033FF"><?PHP echo $r[1];?></td>
 
    
    
  <td>
   <a href="deleteplan.php?id=<?PHP echo $r[0];?>"><img src="icons/r.jpg" width="50" height="50"></a></td>
  
 

 
    </tr>
    <?php
}
?>

</table>
<?php
include("footer.php");
?>

</body>
</html>