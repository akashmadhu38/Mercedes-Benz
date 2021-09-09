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
    <table align="center" width="650"cellpadding="20" cellspacing="30" height="300" border="10">
  <tr bgcolor="#FFCCFF">
    <th height="40" colspan="4" scope="row"><div align="center" class="style3"><b>NEW HOUSE BOAT OWNER REGISTRATION REQUESTS</div></th>
	
    </tr>
    <tr>
    <td><b><font color="#FF3300">Name</td><td ><b><font color="#FF3300">Email</td><td ><b><font color="#FF3300">Subject</td>

    <td><b><font color="#FF3300">Message</td></font></font></font></font></font></font></font></tr> <?php
	include("../connection.php");
$ob=new connection();
$sql2="select * from contact ";
$res2=$ob->execute($sql2);
while($r=mysqli_fetch_array($res2))
{
?>
 <tr> <td><?PHP echo $r[1];?></td>
 
    
    <td><?PHP echo $r[2];?></td>

    <td><?PHP echo $r[3];?></td>


	
    <td><?PHP echo $r[4];?> </td>
	
    </tr>
    

  
<?php
}
?></tr></table></form>
	<?php
include("footer.php");
?>	
</body>
</html>
