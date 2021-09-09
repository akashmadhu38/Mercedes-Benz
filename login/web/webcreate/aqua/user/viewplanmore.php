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
          
          
         
				<form  method="post" name="form1" enctype="multipart/form-data" action="booking.php">
.
    <table ><tr><td><a href="viewplan.php"><img src="home.png" width="70" height="70"></a></td></tr>


<?php

$id=$_GET['id'];
 include("../connection.php");
$ob=new connection();
$sql="select * from adminplan where aid=$id";
$res1=$ob->execute($sql);

while($r=mysqli_fetch_array($res1))
{

		?>
  <tr bgcolor="#CCCCFF" height="45">
   <td colspan="6" align="center"><b><h3><?php echo $r[1];?>   Details</h3></b> </td></tr>

	<tr height="50"><td align="center" bgcolor="#FF99FF">Meals</td><td align="center" bgcolor="#9966FF">Bedroom type</td>
<td align="center" bgcolor="#99CC99">Route</td><td align="center" bgcolor="#FFFF99" colspan="3">Activities</td></tr>
    </tr> 
	
  <tr>
    
 <td><img src="photos/meals.jpg" width="250" height="250"></td><td><img src="photos/bed.jpg" width="250" height="250"></td>


   <td><img src="photos/route.jpg" width="250" height="250"></td>
 <td><img src="photos/bal.jpg" width="250" height="250"></td><?php
if($r[8]=="yes")
{
?><td><img src="photos/ca.jpg" width="250" height="250">

<?php
}
?>

</td><?php
if($r[7]=="yes")
{
?><td><img src="photos/fish.jpg" width="250" height="250">

<?php
}
?>

</td>
 </tr >  

   <tr> <td align="center"><font color="#0033FF"><b>Package includes meals type is <?php echo $r[3];?></td><td align="center"><font color="#0033FF"><b>
<?php echo $r[4];?></td><td align="center"><font color="#0033FF"><b>Route  is <?php echo $r[12];?></td><td align="center">
<font color="#0033FF"><b>Boat has a beautiful balcony</td><td align="center">
<font color="#0033FF"><b></td><td align="center">
<font color="#0033FF"><b> </td></tr>
 <tr height="50"><TD align="center" colspan="6"><font color="#FF0000"><b>Package rate:<?php echo $r[2];?>
    </td>
	  <tr>
	  
	
    <td align="center" colspan="6"><font color="#FF0000"><b><?php echo $r[5];?> Bedroom</td></tr><tr>
	<td align="center" colspan="6"><font color="#FF0000"><b><?php echo $r[6];?> Houseboat</td></tr>
	<tr>
    <td align="center" colspan="6"><font color="#FF0000"><b>Allowed only <?php echo $r[9];?> travellers</td></tr>
    
  
   
   
  
 <tr>
  <td align="center" colspan="6"><font color="#FF0000"><b>Destination point is <?php echo $r[11];?></td>




<tr><?php
if($r[13]=="yes")
{
?><td align="center" colspan="6"><font color="#FF0000"><b>This package provides kitchen facility to travellers

<?php
}
?>

</td></tr>
   
  <tr><?php
if($r[15]=="yes")
{
?><td colspan="6" align="center"><font color="#FF0000"><b>No extra charge on cancellation

<?php
}
?>

</td><?php
if($r[15]=="no")
{
?><td align="center" colspan="6"><font color="#FF0000"><b>Cancellation loses your 5% of your amount

<?php
}
?>

</td></tr>
   



<tr>
 <td align="center" colspan="6"><font color="#FF0000"><b><?php echo $r[16];?> Nights</td></tr>
<tr>
 <td align="center" colspan="6"><font color="#FF0000"><b><?php echo $r[17];?> Days</td></tr>
<tr>
  <td align="center" colspan="6"><font color="#FF0000"><b><?php echo $r[19];?> Houseboat</td>
</tr>
    
  <tr bgcolor=""><td align="center" colspan="6" bgcolor="#FFCCFF" height="50"><a href="boatplan.php?id=<?php echo $r[0];?>">VIEW BOATS>>></a></td></tr>
    <?php
}
?>
</table>

</form>

</body>
</html>