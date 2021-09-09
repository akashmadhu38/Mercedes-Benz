<?php
	include("header.php");
?>
<table width="100%">
  <tr>
    <td colspan="2" class="heading">ADD COURSE</td>
  </tr>
  <tr>
    <td>COURSE NAME</td>
    <td><input type="text" name="txtcorname" size="20"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" value="ADD" name="btnsubmit"/>
	<input type="reset" value="CLEAR" name="btnclear"/></td>
  </tr>
</table>
<?php
	if(isset($_POST["btnsubmit"]))
	{
	
	include("../db/connection.php");
	$obj=new connection();
	extract($_POST);
	
	 $sql3="insert into course values(null,'$txtcorname')";
	$obj->execute($sql3);
	?>
	<script>alert('course Registered Successfully');</script>
	<?php
	}
	
	?>

<?php
include("footer.php");
?>

