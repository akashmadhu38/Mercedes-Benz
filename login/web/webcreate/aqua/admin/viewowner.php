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
    <table width="750" align="center" cellpadding="10" cellspacing="20" height="300">
 <?php
	include("../connection.php");
$ob=new connection();
$sql2="select * from ownerreg where status=1";
$res2=$ob->execute($sql2);
while($r=mysqli_fetch_array($res2))
{
?> <tr bgcolor="#FFCCFF">
    <th height="40" colspan="4" scope="row"><div align="center" class="style3"> HOUSE BOAT OWNER REGISTRATIONS</div></th>
	
    </tr> 
  <tr>
    <td>Company Name</td><td><?PHP echo $r[1];?></td>
 
    <td >Owner Name</td>
    <td><?PHP echo $r[2];?></td></tr>

<tr ><td >License No.Ref</td>
    <td><?PHP echo $r[3];?></td>


	<td >Official Address</td>
    <td><?PHP echo $r[4];?> </td>
	
    </tr>
    

   <tr>
     <td >District</td>
    <td><?PHP echo $r[5];?>
</td><td >Location</td>
   <td><?PHP echo $r[6];?></td>
    </tr>
   <tr ><td>Email id
</td><td><?PHP echo $r[7];?></td>
  <td >Contact Number</td>
<td><?PHP echo $r[8];?></td></tr>
<tr> <td >Date of registration</td>
	<td><?PHP echo $r[9];?></td></tr><tr height="40" bgcolor="#FFCCFF">
<td align="center" colspan="4">
<a href="deleteowner.php?id=<?php echo $r[10];?>"><img src="../icons/g.jpg" height="50"></a></td></tr>

<?php
}
?>
<tr><td></td></tr></table>
</form>
<?php
include("footer.php");
?>

		
</body>
</html>
