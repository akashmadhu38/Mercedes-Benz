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
    <table align="center" width="650"cellpadding="20" cellspacing="30" height="300">
  <tr bgcolor="#FFCCFF">
    <th height="40" colspan="4" scope="row"><div align="center" class="style3"><b>NEW HOUSE BOAT OWNER REGISTRATION REQUESTS</div></th>
	
    </tr> <?php
	include("../connection.php");
$ob=new connection();
$sql2="select * from ownerreg where status=0";
$res2=$ob->execute($sql2);
while($r=mysqli_fetch_array($res2))
{
?>
  <tr>
    <td><b><font color="#FF3300">Company Name</td><td><?PHP echo $r[1];?></td>
 
    <td ><b><font color="#FF3300">Owner Name</td>
    <td><?PHP echo $r[2];?></td></tr>

<tr ><td ><b><font color="#FF3300">License No.Ref</td>
    <td><?PHP echo $r[3];?></td>


	<td><b><font color="#FF3300">Official Address</td>
    <td><?PHP echo $r[4];?> </td>
	
    </tr>
    

   <tr>
     <td><b><font color="#FF3300">District</td>
    <td><?PHP echo $r[5];?>
</td><td ><b><font color="#FF3300">Location</td>
   <td><?PHP echo $r[6];?></td>
    </tr>
   <tr ><td ><b><font color="#FF3300">Email id
</td><td><?PHP echo $r[7];?></td>
  <td><b><font color="#FF3300">Contact Number</td>
<td><?PHP echo $r[8];?></td></tr>
<tr> <td ><b><font color="#FF3300">Date of registration</td>
	<td><?PHP echo $r[9];?></td></tr><tr height="40" bgcolor="#FFCCFF">
<td align="center" colspan="2"><a href="approveowner.php?id=<?php echo $r[10];?>"><b>APPROVE</a></td><td align="center" colspan="2">
<a href="rejectowner.php?id=<?php echo $r[10];?>"><b>REJECT</a></td>



<?php
}
?></tr></table></form>
	<?php
include("footer.php");
?>	
</body>
</html>
