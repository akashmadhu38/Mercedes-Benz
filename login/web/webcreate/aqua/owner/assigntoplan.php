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
          
          
         
				<form  method="post" name="form1" enctype="multipart/form-data">
.
    <table  align="center" cellpadding="10" cellspacing="20" height="700">
<tr bgcolor="#CCCCCC" height="50"><td colspan="4" align="center"><b><font color="#FF0000">ASSIGN BOATS</td></tr>
<?php
$id=$_SESSION['id'];
$planid=$_GET['planid'];
 include("../connection.php");
$ob=new connection();
$sql="select * from addboat where loginid=$id";
$res1=$ob->execute($sql);

while($r=mysqli_fetch_array($res1))
{

		?>
  <tr bgcolor="" >
    <TD rowspan="4" align="center"><img src="uploads/<?php echo $r[19];?>" height="200" width="290" ></TD></tr>
    <tr ><TD ><font color="#FFFF00"><?php echo $r[1];?></td></tr>
	 <tr><TD ><font color="#0000FF"><?php echo $r[2];?></td></tr>
	
	<tr><td >
 <a href="addboattoplan.php?planid=<?php echo $planid;?> &boatid=<?php echo $r[0];?>"><font color="#FF0000">Add boat to this plan</font></a></td></tr>
 

 <tr><td></td></tr><tr><td></td></tr>
 
    <?php
}
?>
</table>

</form>

</body>
</html>