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
<tr><td align="center"><H3>VIEW  BOOKING DETAILS</td></tr>
<tr><td><a href="userhome.php"><img src="home.png" width="70" height="70"></a></td></tr>


<tr><td align="center" colspan="2">----------------------------------------------------
------------------------------------------------------------------------------------------------------</td></tr>

<tr><td><p id="txtHint"></p></td></tr></table>
<table align="center" width="600" height="400">
<?php 
$id=$_GET['bookid'];
 include("../connection.php");
$ob=new connection();
$sql="select * from booking where bookid=$id";
$res1=$ob->execute($sql);

$r=mysqli_fetch_array($res1);

$boat=$r[1];
$name=$r[2];
$y="select * from addboat where bid=$boat";
$s=$ob->execute($y);

$i=mysqli_fetch_array($s);
$y1="select * from userreg where loginid=$name";
$s1=$ob->execute($y1);

$i1=mysqli_fetch_array($s1);


		?><tr>
    <TD><font color="#FF0000"><b>Booking No</td><td><?php echo $id;?></TD></tr>
  <tr>
    <TD><font color="#FF0000"><b>Name</td><td><?php echo $i1[1];?></TD></tr>
<tr >
    <TD><font color="#FF0000"><b>Address</td><td><?php echo $i1[2];?></TD></tr>
<tr >
    <TD><font color="#FF0000"><b>Email</td><td><?php echo $i1[3];?></TD></tr>
<tr>
    <TD><font color="#FF0000"><b>Contact No</td><td><?php echo $i1[4];?></TD></tr>
<tr >
    <TD><font color="#FF0000"><b>Boat Name</td><td><?php echo $i[1];?></TD></tr>
<tr >
    <TD><font color="#FF0000"><b>Starting point</td><td><?php echo $i[11];?></TD></tr>
<tr >
    <TD><font color="#FF0000"><b>Destination Point</td><td><?php echo $i[12];?></TD></tr>
<tr >
    <TD><font color="#FF0000"><b>Route</td><td><?php echo $i[13];?></TD></tr>
<tr >
    <TD><font color="#FF0000"><b>Total Amount</td><td><?php echo $r[6];?></TD></tr>
<tr >
    <TD><font color="#FF0000"><b>Travelling Day</td><td><?php echo $r[7];?></TD></tr>
<tr><td align="center" colspan="2" bgcolor="#FFCC00"><a href="javascript:window.print()"><font color="#0000FF"><font color="#FF00CC"><b>click to print>>></font></a></td></tr>
   
 

 
 
</table>
<br><br><br>
</form>

</body>
</html>