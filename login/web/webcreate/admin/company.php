<?php
	include("adminheader.php");
	include("testing.php");
	include("db/connection.php");
	$obj=new connection();
?>
<form name="form1" enctype="multipart/form-data" method="post">
<table width="100%">
  <tr>
    <td colspan="2" class="heading">ADD ACCESSORIES</td>
  </tr>
  <tr>
    <td>ACCESSORIES NAME</td>
    <td><input type="text" name="accname"   /></td>
  </tr>
  <tr>
    <td>NUMBER OF ITEM</td>
    <td><input type="text" name="noitem"   /></td>
  </tr>
  
  <tr>
    <td>IMAGE</td>
    <td><input type="file" name="txtlogo"   /></td>
  </tr>
  <tr> 
  <td>  PRICE  </td>
  <td><input type="text" name="txtprice"   /></td>
  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="btnsubmit" value="SUBMIT"/>
	<input type="reset" value="CLEAR"/></td>
  </tr>
</table>
</form> 
<?php
	if(isset($_POST["btnsubmit"]))
	{
	
	extract($_POST);
	$sql1="select * from accstock where accname='$accname'";
	$res=$obj->execute($sql1);
	if($row=mysqli_fetch_array($res))
	{
	?>
	<script>alert('Username Already Exists');</script>
	<?php
	}
	//accname noitem txtlogo txtprice
	else
	{
	$logo=$_FILES['txtlogo']['name'];
		$tempname=$_FILES['txtlogo']['tmp_name'];
		move_uploaded_file($tempname,"../uploads/".$logo);
	
	$sql3="insert into accstock values(null,'$accname','$noitem','$logo','$txtprice')";
	$obj->execute($sql3);
	?>
	<script>alert('ACCESSORIES Inserted Successfully');</script>
	<?php
	}
	}
	?>
<?php
	include("footer.php");
?>