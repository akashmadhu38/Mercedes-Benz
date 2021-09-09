<?php
include "header.php";

?>
<script type="text/javascript" src="../validation/validation.js" ></script>
<script type="text/javascript">
function checknull()
{
	if(document.form1.txtreg.value=="")
	{
	alert('Register Number Required');
	return false;
	
	else if(document.form1.txtfname.value=="")
	{
	alert('First Name Required');
	return false;
	}
	else if(document.form1.txtlname.value=="")
	{
	alert('Last Name Required');
	return false;
	}
	else if(document.form1.gender.value=="")
	{
	alert('Gender Required');
	return false;
	}
	else if(document.form1.txtdob.value=="")
	{
	alert('Date of Birth Required');
	return false;
	}
	else if(document.form1.txthname.value=="")
	{
	alert('House Name Required');
	return false;
	}
	else if(document.form1.txtloc.value=="")
	{
	alert('Location Required');
	return false;
	}
	else if(document.form1.txtpin.value=="")
	{
	alert('Pin Required');
	return false;
	}
	else if(document.form1.txtemail.value=="")
	{
	alert('Email Id Required');
	return false;
	}
	else if(document.form1.txtmob.value=="")
	{
	alert('Mobile Number Required');
	return false;
	}
	else if(document.form1.batch.value=="0")
	{
	alert('Batch Required');
	return false;
	}
	else if(document.form1.txtfathername.value=="")
	{
	alert('Father Name Required');
	return false;
	}
	else if(document.form1.txtoccu.value=="")
	{
	alert('Occupation Required');
	return false;
	}
	else if(document.form1.txtmname.value=="")
	{
	alert('Mother Name Required');
	return false;
	}
	else if(document.form1.txtoccu1.value=="")
	{
	alert('Occupation Required');
	return false;
	}
	else if(document.form1.txtuname.value=="")
	{
	alert('Username Required');
	return false;
	}
	else if(document.form1.txtpswd.value=="")
	{
	alert('Password Required');
	return false;
	}
	else if(document.form1.txtpswd1.value=="")
	{
	alert('Confirm Password');
	return false;
	}
}	
</script>

<table align="center" width="50%" border="1">
  <tr>
    <td colspan="2" class="heading">STUDENT REGISTRATION</td>
  </tr>
  <tr>
    <td>REGISTER NUMBER </td>
    <td><input type="text" name="txtreg" /></td>
  </tr>
  <tr>
    <td>FIRST NAME </td>
    <td><input type="text" name="txtfname" onChange="return fn_allLetter(document.form1.txtfname);" /></td>
  </tr>
  <tr>
    <td>LAST NAME </td>
    <td><input type="text" name="txtlname" onChange="return fn_allLetter(document.form1.txtlname);"/></td>
  </tr>
  <tr>
    <td>GENDER</td>
    <td><input type="radio" name="gender" value="Male" />
      Male
	    <input type="radio" name="gender" value="Female" />
      Female</td>
  </tr>
  <tr>
    <td>DATE OF BIRTH </td>
    <td><input type="date" name="txtdob" /></td>
  </tr>
  <tr>
    <td>HOUSE NAME </td>
    <td><input type="text" name="txthname" onChange="return fn_null_label(document.form1.txthname);"/>;</td>
  </tr>
  <tr>
    <td>LOCATION</td>
    <td><input type="text" name="txtloc" /></td>
  </tr>
  <tr>
    <td>PIN</td>
    <td><input type="text" name="txtpin" onChange="return fn_checkpin(document.form1.txtpin);"/></td>
  </tr>
  <tr>
    <td>EMAIL ID </td>
    <td><input type="text" name="txtemail" onChange="return fn_checkemail(document.form1.txtemail);" /></td>
  </tr>
  <tr>
    <td>MOBILE</td>
    <td><input type="text" name="txtmob" onChange="return fn_checkmobile(document.form1.txtmob);"/></td>
  </tr>
  <tr>
    <td>BATCH </td>
    <td><select name="batch" >
		<option value="0"> SELECT </option>
		<option value="2017-2020"> 2017-2020 </option>
		<option value="2018-2021"> 2018-2021 </option>
		<option value="2019-2022"> 2019-2022 </option>
		<option value="2020-2023"> 2020-2023 </option>
		<option value="2021-2024"> 2021-2024 </option>
		</select>	</td>
  </tr>
  <tr>
  <td>SEMESTER</td>
  <td><select name="sem">
    <option value="1"> 1</option>
    <option value="2"> 2 </option>
    <option value="3"> 3 </option>
    <option value="4"> 4 </option>
    <option value="5"> 5</option>
    <option value="6">6</option>
  </select></td>
	</tr>
  
  <tr>
    <td>FATHER NAME </td>
    <td><input type="text" name="txtfathername" onChange="return fn_allLetter(document.form1.txtfathername);"/></td>
  </tr>
  <tr>
    <td>OCCUPATION</td>
    <td><input type="text" name="txtoccu" /></td>
  </tr>
  <tr>
    <td>MOTHER NAME </td>
    <td><input type="text" name="txtmname" onChange="return fn_allLetter(document.form1.txtmname);" /></td>
  </tr>
  <tr>
    <td>OCCUPATION</td>
    <td><input type="text" name="txtoccu1" /></td>
  </tr>
  <tr>
    <td>USERNAME</td>
    <td><input type="text" name="txtuname" /></td>
  </tr>
  <tr>
    <td>PASSWORD</td>
    <td><input type="password" name="txtpswd" /></td>
  </tr>
  <tr>
    <td>CONFIRM PASSWORD </td>
    <td><input type="password" name="txtpswd1" onChange="return fn_compare_pwd((document.form1.txtpswd,txtpswd1));" /></td>
  </tr>
  <tr>
    <td colspan="2"><center>
        <input type="submit" value="SUBMIT" name="btnsubmit" onclick= "checknull();"/>
        <input type="reset" value="CLEAR"  name="btnclear" />
        </center></td>
  </tr>
</table>
<?php
	if(isset($_POST["btnsubmit"]))
	{
	?>
	<script>
	alert('reached');
	</script>
	<?php
	include("../db/connection.php");
	$obj=new connection();
	extract($_POST);
	echo $sql1="select * from login where uname='$txtuname'";
	$res=$obj->execute($sql1);
	if($row=mysqli_fetch_array($res))
	{
	?>
	<script>alert('Username Already Exists');</script>
	<?php
	}
	else
	{
	echo $sql2="insert into login values('$txtuname','$txtpswd','student')";
	$obj->execute($sql2);
	echo $sql3="insert into student values('$txtreg','$txtfname','$txtlname','$gender','$txtdob','$txthname','$txtloc','$txtpin','$txtemail','$txtmob','$batch','$sem','$txtfathername','$txtoccu','$txtmname','$txtoccu1','$txtuname')";
	$obj->execute($sql3);
	?>
	<script>alert('Student Registered Successfully');</script>
	<?php
	}
	}
	?>

<?php
include("footer.php");
?>