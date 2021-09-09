<?php
session_start();
if(!isset($_SESSION['uname'])) { //if not yet logged in
   header("Location: ../login.php");// send to login page
  } 
INCLUDE("header.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

	
   </head>
   <body>             
          
          <a href="search.php">Back to search</a>
         
				<form  method="post" name="form1" enctype="multipart/form-data" action="booking.php">
.
    <table width="950" align="center" cellspacing="10" cellpadding="10" height="700">

<?php

$id=$_GET['id'];
 include("../connection.php");
$ob=new connection();
$sql="select * from addboat where bid=$id";
$res1=$ob->execute($sql);

while($r=mysqli_fetch_array($res1))
{

		?>
  <tr height="45">
   <td colspan="2" align="center"><b><h3><?php echo $r[1];?></h3></b> </td></tr><tr><TD align="center" colspan="2"><img src="../owner/uploads/<?php echo $r[19];?>" height="200" width="450" >
    </td>
	
    </tr> 
	
  <tr>
    
 <td><b><i><font color="#3333FF">Registration No </td>
 
   <td><?php echo $r[3];?></td></tr>
 <tr >    <td ><b><i><font color="#3333FF">Package Rate</td>

    <td><?php echo $r[4];?></td></tr>

<tr>
  <td ><b><i><font color="#3333FF">Provide Meals</td><td>
    <?php echo $r[5];?></td></tr><tr >
	  <td><b><i><font color="#3333FF">Bedrooms</td>
	<td><?php echo $r[6];?></td></tr><tr>
	
	  <td><b><i><font color="#3333FF">No of Bedrooms</td>
	
    <td><?php echo $r[7];?></td></tr><tr >
	<td><b><i><font color="#3333FF">No of Staffs</td>
	
    <td><?php echo $r[8];?></td></tr>
    
   <tr>  <td><b><i><font color="#3333FF">A/c</td>
   
    <td><?php echo $r[9];?></td></tr>
  
   <tr >
     <td><b><i><font color="#3333FF">No.of travellers allowed </td>
     <td><?php echo $r[10];?></td></tr>
     <td><b><i><font color="#3333FF">Starting point</td>
<td><?php echo $r[11];?></td></tr><tr >
  <td><b><i><font color="#3333FF">Destination point</td>
<td><?php echo $r[12];?></td></tr><tr>
  <td><b><i><font color="#3333FF">Route</td>
<td><?php echo $r[13];?></td></tr>



<tr >
  <td><b><i><font color="#3333FF">Kitchen facility</td><td><?php echo $r[14];?></td></tr><tr>
  <td><b><i><font color="#3333FF">Balcony</td>
<td><?php echo $r[15];?> </td>
</tr>
   
  



    <tr >

  <td><b><i><font color="#3333FF">Accomodation provided</td>
<td><?php echo $r[16];?></td></tr><tr>
    

 <td><b><i><font color="#3333FF">House boat type </td><td><?php echo $r[17];?></td></tr>
<tr ><td><b><i><font color="#3333FF">Lake name</td>
  <td><?php echo $r[18];?></td>
</tr>
    
  <tr b><td colspan="2" align="center"><a href="booking.php?id=<?php echo $r[0];?> &amt=<?php echo $r[4];?> &oid=<?php echo $r[20];?>"><b><font color="#FF6600">BOOK NOW!!! </a></td></tr>
    <?php
}
?>
</table>

</form>

</body>
</html>