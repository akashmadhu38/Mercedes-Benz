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
    <table width="950" align="center" cellpadding="10" cellspacing="20">
<tr bgcolor="#CCCCCC"><td colspan="4" align="center">VIEW BOATS</td></tr>
<?php

$id=$_GET['id'];
 include("../connection.php");
$ob=new connection();
$sql="select * from addboat where bid=$id";
$res1=$ob->execute($sql);

while($r=mysqli_fetch_array($res1))
{

		?>
  <tr bgcolor="#6699CC">
    <TD><img src="uploads/<?php echo $r[19];?>" height="200" width="290" ></TD>
    <TD align="center" colspan="3"><?php echo $r[1];?></td>
	
    </tr> 
	
  <tr>
    
 <td><font color="#FFFF00">Registration No </td>
 
   <td><input type="text" name="no" value="<?php echo $r[3];?>" disabled></td></tr>
 <tr bgcolor="#999999">    <td>Fix Rate</td>

    <td><input type="text" name="no3"  value="<?php echo $r[4];?>"disabled/></td>


  <td>Provide Meals</td><td>
    <input type="text" name="no2" value="<?php echo $r[5];?>"disabled/></td></tr><tr>
	  <td><font color="#FFFF00">Bedrooms</td>
	<td><input type="text" name="no4" value="<?php echo $r[6];?>" disabled/></td>
	
	  <td><font color="#FFFF00">No of Bedrooms</td>
	
    <td><input type="text" name="no5"  value="<?php echo $r[7];?>"disabled/></td></tr><tr bgcolor="#999999">
	<td>No of Staffs</td>
	
    <td><input type="text" name="no7" value="<?php echo $r[8];?>"disabled/></td>
    
     <td>A/c</td>
   
    <td><input type="text" name="no6" value="<?php echo $r[9];?>"disabled/></td></tr>
  
   <tr>
     <td><font color="#FFFF00">No.of travellers allowed </td>
     <td><input type="text" name="no9" value="<?php echo $r[10];?>" disabled/></td>
     <td><font color="#FFFF00">Starting point</td>
<td><input type="text" name="no8" value="<?php echo $r[11];?>"disabled/></td></tr><tr bgcolor="#999999">
  <td>Destination point</td>
<td><input type="text" name="no10" value="<?php echo $r[12];?>"disabled/></td>
  <td>Route</td>
<td><input type="text" name="no11" value="<?php echo $r[13];?>"disabled/></td></tr>



<tr>
  <td><font color="#FFFF00">Kitchen facility</td><td><input type="text" name="no12"  value="<?php echo $r[14];?>"disabled/></td>
  <td><font color="#FFFF00">Balcony</td>
<td><input type="text" name="no13"value="<?php echo $r[15];?>"disabled /> </td>
</tr>
   
  



    <tr bgcolor="#999999">

  <td>Accomodation provided</td>
<td><input type="text" name="no14" value="<?php echo $r[16];?>" disabled/></td>
    

 <td>House boat type </td><td><input type="text" name="no15"  value="<?php echo $r[17];?>" disabled/></td></tr>
<tr><td><font color="#FFFF00">Lake name</td>
  <td><input type="text" name="no15"  value="<?php echo $r[18];?>"/ disabled></td>
</tr>
    
  <tr bgcolor="#6699CC"><td colspan="4" align="center"><a href="deleteboat.php?id=<?php echo $r[0];?>"> <img src="../icons/DE.jpg" height="50" width="100"></a>
 

 
    </tr>
    <?php
}
?>
</table>

</form>

</body>
</html>