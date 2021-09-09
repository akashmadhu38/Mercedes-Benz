<?php
	include("adminheader.php");
?>
<table width="100%">
  <tr>
    <td colspan="2" class="heading">ADD SUBJECT</td>
  </tr>
  <tr>
    <td>SEMESTER</td>
    <td><select name="semester">
      <option value="SElECT">SELECT</option>
	   <option value="1">1</option>
	   <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
	   <option value="5">5</option>
	    <option value="6">6</option>
    </select></td>
  </tr>
  <tr>
    <td>SUBJECT</td>
    <td><input type="text" name="txtsubj" size="20"/></td>
  </tr>
  <tr>
  	<td>TYPE</td>
    <td><select name="type">
      <option value="theory">theory</option>
      <option value="practical">practical</option>
      <option value="opencourse">opencourse</option>
    </select></td>
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
	
	$sql3="insert into subject values(null,'$semester','$txtsubj','$type')";
	$obj->execute($sql3);
	?>
	<script>alert('subject Registered Successfully');</script>
	<?php
	}
	
	?>
<?php
	include("footer.php");
?>

