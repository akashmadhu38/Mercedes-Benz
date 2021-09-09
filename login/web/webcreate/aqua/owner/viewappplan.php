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
    <table align="center" height="600">
  <tr bgcolor="#666699" >
    <th height="40" colspan="4" scope="row" align="center"><b><font color="#99CC00">View approved plans</th>
	
    </tr> 
<TR>
	
          <?php
 include("../connection.php");
$ob=new connection();
$id=$_SESSION['id'];
$sql="select * from companyplan where status=1 and loginid='$id'";
$res1=$ob->execute($sql);

while($r=mysqli_fetch_array($res1))
{
         ?>
				
  
 
   <td rowspan="5"><b><font color="#0033FF"><img src="../owner/uploads/<?php echo $r[6];?>" width="270" height="200"></td></tr>
<tr><td><b><font color="#FF0000"><?php echo $r[1];?> Package</td></tr>
 <tr><td><b><font color="#0033FF"><?php echo $r[2];?></td></tr>
     <tr><td><b><font color="#0033FF"><?php echo $r[3];?></td></tr>
<?php $ig=$r[4];?>
 <tr><td><b><font color="#0033FF">
<?php
$sq="select * from ownerreg where loginid=$ig";
$res=$ob->execute($sq);

$r1=mysqli_fetch_array($res);
 echo "Group of   ".$r1[1];?> 
         

</td><td><a href="assigntoplan.php?planid=<?php echo $r[0];?>"><img src="icons/add.jpg" width="50" height="50">Add a boat to this plan</a></td>&nbsp;&nbsp;
<td><a href="deleteplan.php?planid=<?php echo $r[0];?>"><img src="icons/r.jpg" width="50" height="50"></a></td>
 
    </tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
    <?php
}
?>

</table>

</body>
</html>