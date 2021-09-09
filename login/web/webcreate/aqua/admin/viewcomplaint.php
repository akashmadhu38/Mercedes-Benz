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
          <form method="post" name="form1">
.
    <table align="center" width="550">
  <tr>
    <th><img src="icons/c.png" width="100" height="100">COMPLAINT BOX</th>
	
    </tr> 

	
          <?php
 include("../connection.php");
$ob=new connection();
$sql="select * from complaint";
$res1=$ob->execute($sql);

while($r=mysqli_fetch_array($res1))
{
         ?>
				
  
 
  

 <tr><td><b><font color="#0033FF"><?php echo $r[2];?></td>
     
<?php $ig=$r[1];?>
 <td><b><font color="#0033FF">
<?php
$sq="select * from userreg where loginid=$ig";
$res=$ob->execute($sq);

$r1=mysqli_fetch_array($res);
 echo "Posted by   ".$r1[1];?> 
         

</td>
    
  <td>
  <a href="deletecomplaint.php?id=<?PHP echo $r[0];?>"><img src="icons/d.jpg" width="80" height="80"></a>  
   
   

 
    </tr>
    <?php
}
?>

</table>
<?php
include("footer.php");
?>
</body>
</html>