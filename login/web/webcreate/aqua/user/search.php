<?php
session_start();
if(!isset($_SESSION['uname'])) { //if not yet logged in
   header("Location: ../login.php");// send to login page
  } ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

	<script type="text/javascript">
function valid()
{

if(document.form.des.value=="0")//textbox name=name
{
alert("enter your description");

return false;
    }
	if(document.form.date.value=="")//textbox name=name
{
alert("enter date");
document.form.date.focus();
return false;
    }
if(document.form.type.value=="0")//textbox name=name
{
alert("enter your type");

return false;
    }
	
}
</script>
   </head>
   <body>             
          
          
         
				<form  method="post" name="form">
.
    <table  align="center" width="900" >

<tr><td rowspan="2"><img src="icons/r.jpg" width="150" height="150"><tr><td><font color="#FF0000">
<b>Search a boat</b></font></td><td><a href="userhome.php"><img src="icons/h.png " width="100" height="100"></a></td></tr>
<tr><td colspan="6"><hr></td></tr>
<tr bgcolor="#CCCCFF" height="50"><td align="center"><a href="searchby.php"><font color="#009900">Search by Boat type</font></a>
</td><td align="center" bgcolor="#0099FF" >
<a href="ratesearch.php"><font color="#FF0000">Search by Cheap Rate</a></td>
<td align="center" bgcolor="#009900"><a href="acsearch.php"> <font color="#99FF00">Search by Ac/Non Ac</a></td><td align="center" bgcolor="#FF9900">
<a href="roomsearch.php"><font color="#0000FF"> Search by Bed room Nos</a></td>
<td align="center" bgcolor="#FF66FF"><a href="startsearch.php"> <font color="#000000">Search by Starting place</a></td><td align="center">
<a href="routesearch.php"><font color="#009900"> Search by Route</a></td></tr></table>
<br><table height="300" align="center" width="300" ><tr bgcolor="#9999FF"><td colspan="6" align="center">Book your Boat Now!!!</td></tr>
  <tr>
   

    <td>Destination</td>
 
   <td><select name="des" >
    <option value="0">--Select destination--</font></option>
    <option value="Allepey">Allepey</option>
<option value="Thumboly">Thumboly</option>
    <option value="Kumarakom">Kumarakom</option>
	  <option value="Cochin">Cochin</option>
	  <option value="Quilon">Quilon</option>
	 
	</select></td></tr>
 <tr>
    <td>Date of stay</td>
<?php
$a=date("Y-m-d");
?>
    <td><input type="date" name="date" min="<?php echo $a;?>"></td></tr>
 
    


 
<tr> <td>House boat type </td><td><select name="type" >
    <option value="0">--Select boat type--</option>
    <option value="Luxury">Luxury</option>
    <option value="Delux">Delux</option>
<option value="Premium">Premium</option>
	  <option value="Super Delux">Super Delux</option>
	  <option value="standard">Standard</option>
	  
	 
	</select></td></tr>
<tr bgcolor="#FFCCFF"><td colspan="2" align="center">
   <input type="submit" value="SEARCH"   id="submit" name="b" onClick="return valid()"/></td>
 
 

 
    </tr>
    
</table>

</form>
<?php
if(isset($_POST['b']))
{


extract($_POST);

include("../connection.php");
$ob=new connection();
		$s="select * from addboat where dp='$des' and type='$type'";
$res3=$ob->execute($s);
while($r=mysqli_fetch_array($res3))
{

		?><table>
  <tr bgcolor="#6699CC">
    <TD rowspan="5" align="center"><img src="../owner/uploads/<?php echo $r[19];?>" height="200" width="290" ></TD>
    <tr><TD><?php echo $r[1];?></td></tr>
	 <tr><TD><?php echo $r[2];?></td></tr>
	
	<tr><td >
 <a href="viewboatmore.php?id=<?php echo $r[0];?>"><font color="#FF0000">View more...</font></a></td></tr>
 <tr><td><a href="booking.php?id=<?php echo $r[0];?> &amt=<?php echo $r[4];?> &oid=<?php echo $r[20];?>">Book Now</a></td></tr>

 
 
    <?php
}
}
?>
</table>
<br><br><br><br><br><br><br><br>
</body>
</html>