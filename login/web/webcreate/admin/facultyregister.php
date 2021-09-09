<?php
include "header.php";
?>
<script type="text/javascript" src="../validation/validation.js" ></script>
<script type="text/javascript">
function checknull()
{
if(document.form1.txtfname.value=="")
{
alert("first name required");
return false;
}
else if(document.form1.txtlname.value=="")
{
alert("last name required");
return false;
}
else if(document.form1.gender.value=="")
{
alert("gender required");
return false;
}
else if(document.form1.txtdob.value=="")
{
alert("dob required");
return false;
}
else if(document.form1.txtresidence.value=="")
{
alert("residence required");
return false;
}
else if(document.form1.txtlocation.value=="")
{
alert("location required");
return false;
}
else if(document.form1.txtpin.value=="")
{
alert("pin required");
return false;
}
else if(document.form1.txtemail.value=="")
{
alert("email required");
return false;
}
else if(document.form1.txtmobile.value=="")
{
alert("mobile no required");
return false;
}
else if(document.form1.txtqual.value=="")
{
alert("qualification required");
return false;
}
else if(document.form1.txtdesig.value=="")
{
alert("designation required");
return false;
}
else if(document.form1.txtuname.value=="")
{
alert("user name required");
return false;
}
else if(document.form1.txtpwd.value=="")
{
alert("pwd required");
return false;
}
}
</script>

<table width="100%" border="1">
  <tr>
    <td colspan="2" class="heading">FACULTY REGISTRATION</td>
  </tr>
  <tr>
    <td>Firstname</td>
    <td><input type="text" name="txtfname" size="20" onChange="return fn_allLetter(document.form1.txtfname);"/></td>
  </tr>
  <tr>
    <td>Lastname</td>
    <td><input type="text" name="txtlname" size="20" onChange="return fn_allLetter(document.form1.txtlname);"/></td>
  </tr>
  <tr>
    <td>Gender</td>
    <td><input name="gender" type="radio" value="female"/>female
	<input name="gender" type="radio" value="male"/>male</td>
  </tr>
  <tr>
    <td>Date Of Birth</td>
    <td><input type="date" name="txtdob" size="20" onChange="return fn_checknumber(document.form1.txtdob);"/></td>
  </tr>
  <tr>
    <td>Residence</td>
    <td><input type="text" name="txtresidence" size="20"/></td>
  </tr>
  <tr>
    <td>Location</td>
    <td><input type="text" name="txtlocation" size="20"/></td>
  </tr>
  <tr>
    <td>Pin</td>
    <td><input type="text" name="txtpin" size="20" onChange="return fn_checkpin(document.form1.txtpin);"/></td>
  </tr>
  <tr>
    <td>EMail</td>
    <td><input type="text" name="txtemail" size="20" onChange="return fn_checkemail(document.form1.txtemail);"/></td>
  </tr>
  <tr>
    <td>Mobile</td>
    <td><input type="text" name="txtmobile" size="20" onChange="return fn_checkmobile(document.form1.txtmobile);"/></td>
  </tr>
  <tr>
    <td>jdate</td>
    <td><input type="date" name="txtjdate" size="20" onChange="return fn_checkjdate(document.form1.txtdate);"/></td>
  </tr>
  <tr>
    <td>Qualification</td>
    <td><input type="text" name="txtqual" size="20" onChange="return fn_allLetter(document.form1.txtqual);"/></td>
  </tr>
  <tr>
    <td>Designation</td>
    <td><select name="designation">
	<option value="0"> SELECT </option>
		<option value="placement"> placementcell officer </option>
		<option value="assistant proffeser"> assistent proffeser</option>
		<option value="staffs"> staffs </option>
		</select>
		</td>
  </tr>
  <tr>
    <td>Username</td>
    <td><input type="text" name="txtuname" size="20"  onchange="return fn_allLetter(document.form1.txtuname);"/></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="txtpwd" size="20" /></td>
  </tr>
  <tr>
    <td>Confirm password</td>
    <td><input type="password" name="txtcpwd" size="20" onChange="return fn_compare_pwd(document.form1.txtpwd,txtcpwd);"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="btnsubmit" value="SUBMIT" onclick= "checknull();"/>
	<input type="reset" value="CLEAR"/></td>
  </tr>
</table>
<?php
if(isset($_POST["btnsubmit"]))
{
include("../db/connection.php");
$obj=new connection();
extract($_POST);
$sql1="select * from login where uname='$txtuname'";
$res=$obj->execute($sql1);
if($row=mysqli_fetch_array($res))
{
?>
<script>alert('username already exists');</script>
<?php
}
else
{
$sql2="insert into login values('$txtuname','$txtpwd','faculty')";
$obj->execute($sql2);
$sql3="insert into faculty values(null,'$txtfname','$txtlname','$gender','$txtdob','$txtresidence','$txtlocation','$txtpin','$txtemail','$txtmobile','$txtjdate','$txtqual','designation','$txtuname')";
$obj->execute($sql3);
?>
<script>alert('faculty registered successfully');</script>
<?php
}
}
?>
<?php
include("footer.php");
?>
