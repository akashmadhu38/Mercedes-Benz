<?php
include("header.php");
?>
<script>
	
	function perc()
	{
		var mobt=document.form1.mobt;
    	var minpass=document.form1.minpass;
    	var maxmark=document.form1.maxmark;
    	var per=document.form1.per; 
		
		var per_=(mobt.value/maxmark.value)*100;
		per.value=per_;
	}
	
</script>
<table width="100%">
  <tr>
    <td colspan="4" class="heading">university exam details </td>
  </tr>
  <tr>
    <td width="25%">Batch</td>
    <td width="25%">Semester</td>
    <td width="25%">Student Name </td>
    <td width="25%">&nbsp;</td>
  </tr>
  <tr>
    <td>
	<select name="batch" id="batch">
  		<option value="0">SELECT </option>
		<option value="2017-2020"> 2017-2020 </option>
		<option value="2018-2021"> 2018-2021 </option>
		<option value="2019-2022"> 2019-2022 </option>
		<option value="2020-2023"> 2020-2023 </option>
		<option value="2021-2024"> 2021-2024 </option>
  </select>
  </td>
    <td>
	<select name="sem" id="sem" onchange="getstudent( document.getElementById('batch').value, this.value, student);">
  <option value="0">SELECT</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  </select> 
	</td>
    <td><select name="student" id="student">
       
    </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Marks Obtained </td>
    <td>Minimum Pass Mark </td>
    <td>Maximum Mark </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><input name="mobt" type="text" id="mobt"   /></td>
    <td><input name="minpass" type="text" id="minpass"   /></td>
    <td><input name="maxmark" type="text" id="maxmark"  onchange="perc();" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Marks Percentage (%) </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="per" type="text" id="per" readonly="true" /></td>
    <td><input name="btnsubmit" type="submit" /> &nbsp;
		<input name="btnreset" type="reset" />
	</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<?php
		
		if(isset($_POST["btnsubmit"]))
		{
			extract($_POST);
			$obj->execute("insert into uexam values(null,'$student','$batch','$sem','$mobt', '$minpass','$maxmark','$per')");
			echo $obj->msg("Exam details added successfully");
			$obj->redirect("uexamdet.php");
		}
		
?>

<?php
include("footer.php");
?>
