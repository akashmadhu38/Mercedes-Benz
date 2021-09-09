<?php
session_start();
if(!isset($_SESSION['uname'])) { //if not yet logged in
   header("Location: ../login.php");// send to login page
  } ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

   </head>
   <body bgcolor="#B4DDE9"> <div align="center"> <img 
src="icons/b.png" width="1000" height="120"> </div>          
          <form method="post" name="form1">
.
    <table align="center" width="600">
  <tr  b height="40" ><td colspan="2" align="center"><a href="index.php"><img src="icons/home.png" width="100" height="100"></a></td></tr><tr>
    <td rowspan="2"><img src="icons/b.jpg" width="150"  height="150"></td><td><b><font color="#FF6600"><u>Bank A/C Balance</td>
	
    </tr> 

	
          <?php
 include("../connection.php");
$ob=new connection();
$sql="select sum(bal) from adminaccount";
$res1=$ob->execute($sql);

$r=mysqli_fetch_array($res1);

         ?>
				
  
 
  

 <tr><td><b><font color="#0033FF"><i>Your Current balance is Rs.<font color="#FF0000"><?php echo $r[0];?></td></tr>
     

  <tr>

 </table>

 
</table>
<br><br><br><br>
<br><br>

</body>
</html>