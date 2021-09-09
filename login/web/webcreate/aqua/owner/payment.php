<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['uname'])) { //if not yet logged in
   header("Location: ../login.php");// send to login page
  } 

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

	
   </head>
   <body>          
          <form method="post" name="form1" action="">

    <table align="center" ><div align="center">
<img src="icons/b.png" width="1000" height="160"> </div>
  <tr  bgcolor="#CCCCCC" height="40" ><td colspan="2"></td></tr><tr>
    <td rowspan="2"><a href="home.php"><img src="icons/re.jpg" width="150" height="150"></a></td><td><b><font color="#FF6600"><u>Bank A/C Balance</td>
	
    </tr> 

	
          <?php

 include("../connection.php");
$ob=new connection();
$id=$_SESSION['id'];
$sql="select sum(bal) from owneraccount where ownid=$id";
$res1=$ob->execute($sql);

$r=mysqli_fetch_array($res1);

         ?>
				
  
 
  

 <tr><td><b><font color="#0033FF"><i>Your Current balance is Rs.<font color="#FF0000"><?php echo $r[0];?></td></tr>
     

  <tr  bgcolor="#CCCCCC" height="40" ><td colspan="2"></td></tr><tr>

 <tr><td><img src="icons/c.jpg" width="100" height="100"></td><td><input type="submit" value="View all Transactions" style="background-color:#FFCCCC;width:200px;height:40px " name="v"></td></tr></table>
<table width="700" align="center">
<?php
if(isset($_POST["v"]))
{
?>
<tr bgcolor="#FFCCFF" height="50" ><td><b><font color="#FF0000">Credited Amount</td><td><b><font color="#FF0000">Payment date</td>
<td><b><font color="#FF0000">Amount Category</td><td><b><font color="#FF0000">Credited By</td></tr><?php



$sq="select * from owneraccount where ownid=$id";
$res=$ob->execute($sq);

while($r1=mysqli_fetch_array($res))
{

         ?>
				
<tr><td><?php echo $r1[1];?></td>
<td><?php echo $r1[3];?></td><td>For booking of House boat <?php echo $r1[5];?></td>

 <?php
$fl=$r1[2];
$s="select * from userreg where loginid=$fl";
$re=$ob->execute($s);

$d=mysqli_fetch_array($re);?>
<td><?php echo $d[1];?></td>

        </tr><?php
}
}
?>

</table>
<br><br><br><br><br><br>

</form>
</body>
</html>