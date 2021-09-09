<?php
include("adminheader.php");
?>
<script type="text/javascript" src="../validation/validation.js"></script>
<script type="text/javascript">
function checknull()
{
	if(document.form1.txtfname.value=="")
	{
	alert('First Name Required');
	return false;
	}
	else if(document.form1.txtlname.value=="")
	{
	alert('Last Name Required')
	return false;
	}
	else if(document.form1.gender.value=="")
	{
	alert('Gender Required')
	return false;
	}
	else if(document.form1.txtdob.value=="")
	{
	alert('DOB Required')
	return false;
	}
	else if(document.form1.txtres.value=="")
	{
	alert('Residence Required')
	return false;
	}
	else if(document.form1.txtloc.value=="")
	{
	alert('Location Required')
	return false;
	}
	else if(document.form1.txtpin.value=="")
	{
	alert('Pin Required')
	return false;
	}
	else if(document.form1.txtemail.value=="")
	{
	alert('Email Required')
	return false;
	}
	else if(document.form1.txtmob.value=="")
	{
	alert('Mobile Required')
	return false;
	}
	else if(document.form1.txtdate.value=="")
	{
	alert('Date of Joining Required')
	return false;
	}
	else if(document.form1.txtqual.value=="")
	{
	alert('Qualification Required')
	return false;
	}
	else if(document.form1.txtdes.value=="")
	{
	alert('Designation Required')
	return false;
	}
	else if(document.form1.txtuname.value=="")
	{
	alert('Username Required')
	return false;
	}
	else if(document.form1.txtpswd.value=="")
	{
	alert('Password Required')
	return false;
	}
	else if(document.form1.txtpswd1.value=="")
	{
	alert('Confirm Password')
	return false;
	}
	
}
</script>

<?php
	
	$stid="";
	$res=$obj->execute("select max(stid)+1 as stockid from stock");
	if($row=mysqli_fetch_array($res))
	{
		if($row["bid"]=="")
		{
			$stid=1;
		}
		else
		{
			$stid=$row["stockid"];
		}
	}
	
?>
 
<table width="100%">

  <tr>
    <td colspan="3" class="heading">ADDING VEHICLES</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Stock ID</td>
    <td><input type="text" name="txtstockid" value="<?php echo $stid; ?>" readonly="true" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Class Name</td>
    <td>
	<?php


include("testing.php");


//echo "<script>alert('')</script>";
$qu="select * from benzclass";
$da=mysqli_query($conn,$qu);
$total=mysqli_num_rows($da);

if($total!=0)
{
echo "<select ClassID='ClassID' name='class' Classname='Classname' onchange='ajaxFunction()'>";
while($result=mysqli_fetch_assoc($da))
{
	
$x="<option value='".$result['ClassID']."'>".$result['Classname']."</option>";
echo $x;
}
echo "</select>";
}


?>
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Number Of Vehicels</td>
    <td><?php


include("testing.php");


//echo "<script>alert('')</script>";
$qu="select * from benzmodel";
$da=mysqli_query($conn,$qu);
$total=mysqli_num_rows($da);

if($total!=0)
{
echo "<select modelID='modelID' name='model' modelName='modelName' onchange='ajaxFunction()'>";
while($result=mysqli_fetch_assoc($da))
{
	
$x="<option value='".$result['modelID']."'>".$result['modelName']."</option>";
echo $x;
}
echo "</select>";
}


?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Colour</td>
    <td>
	<select name="color">
	<option value="0">--select--</option>
	<option value="assistant prof">Red</option>
	<option value="placement">Blue</option>
	<option value="placement">Black</option>
	<option value="placement">Silver</option>
	<option value="placement">Gray</option>
	</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Number Of Vehicels</td>
    <td><input type="text" name="txtstock"/></td>
  </tr> 
    <td>&nbsp;</td>
    <td><center><input type="submit" value="SUBMIT" name="btnsubmit" onClick="return checknull();"/>
	<input type="reset" value="CLEAR"/></center></td>
    <td ></td> </tr>
</table>
</form>
<?php
if(isset($_POST["btnsubmit"]))
{ 
extract($_POST);
//txtstock class model txtdes txtstock
$sql1="select stID from stock where colour='$color' and modelName='$model' and Classname='$class'";
$res=$obj->execute($sql1);
if($row=mysqli_fetch_array($res))
{
	$obj->execute("update stock set stock=stock+'$txtstock' where colour='$color' and modelName='$model' and Classname='$class'");
	echo $obj->msg("Stock Updated Successfully");
	$obj->redirect("addvehicle.php");
?>
<script>alert('Stock Already Exits');</script>
<?php
}
else
{
	$sql3="insert into stock values('$txtstock','$color','$model','$class',null)";
	$obj->execute($sql3);
?>
<script>alert('Vehicels Added Successfully');</script>
<?php
} 
}
?>
<?php
include("footer.php");
?>
