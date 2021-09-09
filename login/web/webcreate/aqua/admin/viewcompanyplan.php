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
          <form  method="post" name="form1">
.
    <table align="center" width="550">
  <tr bgcolor="#FFCC99">
    <th height="40" colspan="4" scope="row"><b>PACKAGES BY HOUSEBOAT GROUPS</th>
	
    </tr> 
<TR>
	
          <?php
 include("../connection.php");
$ob=new connection();
$sql="select * from companyplan where status=0";
$res1=$ob->execute($sql);

while($r=mysqli_fetch_array($res1))
{
         ?>
				
  
 
   <td rowspan="6"><b><font color="#0033FF"><img src="../owner/uploads/<?php echo $r[6];?>" width="270" height="200"></td></tr>
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
         

</td></tr><tr>
    
  <td>
  &nbsp;&nbsp;   &nbsp;&nbsp; <a href="approveplan.php?id=<?PHP echo $r[0];?>"><img src="icons/a.jpg" width="80" height="80"></a>  &nbsp;&nbsp; &nbsp;&nbsp;
   <a href="rejectplan.php?id=<?PHP echo $r[0];?>"><img src="icons/ry.jpg" width="80" height="80"></a></td>
   

 
    </tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
    <?php
}
?>

</table>
<?php
include("footer.php");
?>	
</body>
</html>