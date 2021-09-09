<?php
include("adminheader.php");
include("testing.php");
include("../../../db/connection.php");
$obj=new connection();
error_reporting(0);
?>

<table width="100%">
<tr>
<td colspan="3" class="heading" align="center">change password </td>
</tr>
<tr>
<td>&nbsp;</td>
<td>Old Password </td>
<td><input type="password" name="opwd"/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>New Password </td>
<td><input type="password" name="npwd"/></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>Confirm Password </td>
  <td><input type="password" name="cpwd"/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>
<input type="submit" name="btnupdate" value="update"/>
<input type="reset" name="btnreset" value="clear"/></td>
</tr>
</table>
</form>
<?php
if(isset($_POST["btnupdate"]))
{
$opwd=$_POST["opwd"];
$npwd=$_POST["npwd"];
$cpwd=$_POST["cpwd"];
$db_pwd=null;
$uname=$_SESSION["uname"];

$r1=$obj->execute("select pwd from login where uname='$uname'");
if($row1=mysqli_fetch_array($r1))
{
	$db_pwd=$row1["password"];
}
if($db_pwd==$opwd)
{
	if($npwd==$cpwd)
	{
		$obj->execute("update login set pwd='$npwd' where uname='$uname'");
		echo $obj->msg("Password Updated Succesfully");
		$obj->redirect("changepwd.php");
	}
	else
	{
		echo $obj->msg("Password mismatch");
	}
}
else
{
	echo $obj->msg("Invalid Old Password");
}
  
}
?>
<?php
include("footer.php");
?>
