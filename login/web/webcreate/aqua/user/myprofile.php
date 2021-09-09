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
          
          
         
				<form  method="post" name="form1" action="userregpro.php">
.
    <table align="left" cellpadding="10" cellspacing="20" >
    <tr><td><a href="userhome.php"><img src="home.png" width="70" height="70"></a></td></tr>

  <tr ><TD><img src="icons/p.png" width="150" height="150"><b><i><font color="#FF0000">
   MY PROFILE</td>	
    </tr> 
	<?php 
$id=$_SESSION['id'];
 include("../connection.php");
$ob=new connection();
$sql="select * from userreg where loginid=$id";
$res1=$ob->execute($sql);

while($r=mysqli_fetch_array($res1))
{?>
  <tr>
    <td><b>Name</td></tr>
    <tr><td><input type="text" name="name"  size="100" style="height:30px" disabled value="<?php echo $r[1];?>"/></td></tr>


	<tr><td><b> Address</td></tr>
    <tr><td><textarea name="address"  cols="75" rows="4" disabled><?php echo $r[2];?></textarea> </td>
	
    </tr>
    

  
 
   <tr><td><b>Email id
</td></tr><tr><td><input name="email" type="text"  size="100" style="height:30px" value="<?php echo $r[3];?>" disabled></td></tr>

<tr>
  <td><b>Contact Number</td>
</tr><tr><td><input name="contact" type="text" value="<?php echo $r[4];?>" disabled size="100" style="height:30px"></td></tr>
<?php
}
?>
    
</table>

</form>

		
</body>
</html>
