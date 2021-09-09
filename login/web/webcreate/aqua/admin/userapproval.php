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
    <table align="center" width="550">
  <tr><Th><img src="icons/U.jpg" width="100" height="100">
  <div align="center" class="style3"><font color="#0000FF"><b>NEW USER REQUESTS</div></th>
	
    </tr>  <tr bgcolor="#99CCFF" height="50">
    <td ><i><b><font color="#FF0000"> Name</td><td></td><td ><i><b><font color="#FF0000"> Address&nbsp;&nbsp;</td><td></td>
<td ><i><b><font color="#FF0000">Email&nbsp;&nbsp;</td><td ><i><b><font color="#FF0000">Contact no</td><td></td><td></td><td></td></tr><?php
	include("../connection.php");
$ob=new connection();
$sql2="select * from userreg where status=0";
$res2=$ob->execute($sql2);
while($r=mysqli_fetch_array($res2))
{
?>
 
<tr><td><?PHP echo $r[1];?></td>
 
     <td></td>
    <td><?PHP echo $r[2];?></td>

 <td></td>
    <td><?PHP echo $r[3];?></td>


	
    <td><?PHP echo $r[4];?> </td>
	
    

<td align="center" colspan="2"><a href="approveuser.php?id=<?php echo $r[5];?>"><img src="icons/app.png" width="50" height="50"></a></td><td align="center" colspan="2">
<a href="rejectuser.php?id=<?php echo $r[5];?>"><img src="icons/re.jpg" width="50" height="50"></a></td></tr>

<?php
}
?></table>

   <br><br><br>    
        <br><br><br>    
 <table align="center" width="550">
  <tr><td align="center" colspan="4">
 <font color="#0000FF"><b>REGISTERED USERS</td>
	
    </tr> <tr height="50" bgcolor="#CCCCCC"><td><b>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b>Address&nbsp;&nbsp;</td><td><b>Email&nbsp;&nbsp;</td><td><b>Contact no</td> <td></td></tr><?php
	
$sql2="select * from userreg where status=1";
$res2=$ob->execute($sql2);
while($r=mysqli_fetch_array($res2))
{
?>
 
<tr><td><?PHP echo $r[1];?></td>
 
    
    <td><?PHP echo $r[2];?></td>


    <td><?PHP echo $r[3];?></td>


	
    <td><?PHP echo $r[4];?> </td>
	
    

<td><a href="rejectuser.php?id=<?php echo $r[5];?>"><img src="icons/de.jpg" width="130" height="50"></a></td></tr>

<?php
}
?></table>
</form>
<?php
include("footer.php");
?>			
</body>
</html>
