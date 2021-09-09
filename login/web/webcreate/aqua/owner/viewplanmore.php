<?php
session_start();
if(!isset($_SESSION['uname'])) { //if not yet logged in
   header("Location: ../login.php");// send to login page
  } 
include("header.php");
?><html><body>
				<form  method="post" name="form1">
.
    <table  border="0" bgcolor="#9999FF" align="center" width="600"  cellpadding="20" cellspacing="20">
  <tr bgcolor="#FFCCFF">
    <th height="40" colspan="20">PLAN DETAILS</div></th></TR>


	
<td></td></tr><?php
$id=$_GET['id'];
 include("../connection.php");
$ob=new connection();
$sql="select * from adminplan where aid=$id";
$res1=$ob->execute($sql);

while($r=mysqli_fetch_array($res1))
{
         ?>

    <TR><td><font color="#FFFFFF">Plan id</td><td><font color="#99FF33"><?php echo $r[0];?></td></tr>
    
    
  <TR> <td><font color="#FFFFFF">Rate</td> <td><font color="#99FF33"><?php echo $r[2];?></td></tr>


   <tr><td><font color="#FFFFFF">Meals&nbsp;&nbsp;</td><td><font color="#99FF33"><?php echo $r[3];?></td></tr>
	  
	<tr><td><font color="#FFFFFF">Bedrooms&nbsp;&nbsp;</td><td><font color="#99FF33"><?php echo $r[4];?></td></tr>
	
    
	 
	
  <tr> <td><font color="#FFFFFF">No of Bedrooms&nbsp;&nbsp;</td>  <td><font color="#99FF33"><?php echo $r[5];?></td></tr>
	
    
     
  <tr> <td><font color="#FFFFFF">A/c&nbsp;&nbsp;</td>
    <td><font color="#99FF33"><?php echo $r[6];?>
</td></tr>
 
   
  
 <tr> <td><font color="#FFFFFF">Entertainment activities&nbsp;&nbsp; </td> <td><font color="#99FF33"><?php echo $r[7];?></td>  </tr> 
  <tr><td><font color="#FFFFFF">Cultural activities &nbsp;&nbsp;</td> <td><font color="#99FF33"><?php echo $r[8];?></td></tr>
   
 <tr> <td><font color="#FFFFFF">No.of persons allowed&nbsp;&nbsp; </td> <td><font color="#99FF33"><?php echo $r[9];?></td></tr>
 
<tr><td><font color="#FFFFFF">Starting point&nbsp;&nbsp;</td> <td><font color="#99FF33"><?php echo $r[10];?></td></font></tr>
 
<tr> <td><font color="#FFFFFF">Destination point&nbsp;&nbsp;</td><td><font color="#99FF33"><?php echo $r[11];?></td></font></tr>
  
<tr><td><font color="#FFFFFF">Route&nbsp;&nbsp;</td><td><font color="#99FF33"><?php echo $r[12];?></td></tr>


  <tr><td><font color="#FFFFFF">Kitchen facility&nbsp;&nbsp;</td><td><font color="#99FF33"><?php echo $r[13];?>  </td></tr>
  
<tr><td><font color="#FFFFFF">Balcony&nbsp;&nbsp;</td><td><font color="#99FF33"><?php echo $r[14];?> </td></tr>
   
<tr><td><font color="#FFFFFF">Free cancellation&nbsp;&nbsp;</td>
<td><font color="#99FF33"><?php echo $r[15];?>  </td></tr>
     

<tr> <td><font color="#FFFFFF">No.of nights&nbsp;&nbsp;</td>
<td><font color="#99FF33"><?php echo $r[16];?></td></tr>
 <tr> <td><font color="#FFFFFF">No.of days&nbsp;&nbsp;</td>
<td><font color="#99FF33"><?php echo $r[17];?></td></tr>
    

  <tr> <td><font color="#FFFFFF">Accomodation&nbsp;&nbsp;</td>
<td><font color="#99FF33"><?php echo $r[18];?>  </td></tr>
<tr><td><font color="#FFFFFF">House boat type &nbsp;&nbsp;</td>
<td><font color="#99FF33"><?php echo $r[19];?></td>
<td><a href="assigntoplan.php?planid=<?php echo $r[0];?>">Add a boat to this plan</a></td></tr>
</table>
<?php
}
?>
</form>
</body>
</html>