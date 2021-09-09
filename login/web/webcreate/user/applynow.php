<?php
	include("header.php");
?>
<table width="100%">
<tr>
<td colspan="2" class="heading">apply now for the vaccancy </td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td style="vertical-align:top;" width="30%">

<?php
	
	$bamt="";
	$vid=$_GET["vid"];
	$res=$obj->execute("select * from vaccancy,company where vaccancy.cmpid=company.cmpid and vaccancy.status='approved' and vaccancy.vid='". $vid ."'");
			if($row=mysqli_fetch_array($res))
			{	
	?>
	
<table width="100%">
<tr>
<td><img src="../uploads/<?php echo $row["logo"];?>" height="300" width="100%" /></td>
</tr>
<tr>
<tr><td>
<input type="hidden" value="<?php echo $vid; ?>" name="vid" id="vid" />
<?php echo $row["cmpname"];?></td></tr>
					<tr><td>Post : <?php echo $row["post"];?> </td> </tr>
					<tr><td>Total Vaccancies : <?php echo $row["totalv"];?> </td></tr>
					<tr>
					  <td>Eligibility : <?php echo $row["elegibility"];?> </td>
					</tr>
					<tr><td>Total Vaccancies : <?php echo $row["totalv"];?> </td></tr>
					<tr><td>
					Other Info : <?php echo $row["details"];?> <br/>
					Year of Passout : <?php echo $row["vyear"];?> <br/>
					Last Date : <?php echo $row["ldate"];?> <br/>
					Location : <?php echo $row["loc"];?>
					 </td></tr>
					<tr><td>Total Vaccancies : <?php echo $row["totalv"];?> </td></tr>
					<tr><td>% of Marks : <?php echo $row["marksp"];?>
					<input type="hidden" name="marksp" id="marksp" value="<?php echo $row["marksp"];?>" />
					 </td></tr>
 
</table>
<?php
 
}
?>
</td>
<td style="vertical-align:top;" width="70%">

<table width="100%">
<tr>
<td colspan="2" class="heading">Eligible Students</td>
</tr>
<tr>
  <td>Batch</td>
  <td>Semester</td>
</tr>
<tr>
<td><select name="batch" id="batch">
  <option value="0">SELECT </option>
  <option value="2017-2020"> 2017-2020 </option>
  <option value="2018-2021"> 2018-2021 </option>
  <option value="2019-2022"> 2019-2022 </option>
  <option value="2020-2023"> 2020-2023 </option>
  <option value="2021-2024"> 2021-2024 </option>
</select></td>
<td><select name="sem" id="sem" onchange="getstudent_details(document.getElementById('batch').value, this.value, document.getElementById('marksp').value, document.getElementById('vid').value, stud_info);">
  <option value="0">SELECT</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
</select></td>
</tr>
<tr>
<td colspan="2" align="center" style="text-align:center;">
<div id="stud_info"></div>
</td>
</tr>
<tr>
<td colspan="2" class="heading"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="btnproceed" value="Proceed" /></td>
</tr>
</table></td>
</tr>
</table>

<script type="text/javascript">
function checknull()
{

if(document.form1.yourbidamt.value=="")
{
alert("Enter Bid Amount");
document.form1.yourbidamt.focus();
return false;
}

}
</script>
<?php
	
	if(isset($_POST["btnproceed"]))
	{
		$sem=$_POST["sem"];
		$batch=$_POST["batch"];
		$per=$_POST["marksp"];
		$obj->execute("insert into application values(null,'$vid','". $_SESSION["uname"] ."')");
		$appno="";
		$r=$obj->execute("select max(appno) as appno from application");
		if($rw=mysqli_fetch_array($r))
		{
			$appno=$rw["appno"];
		}
		$sql="select distinct student.regno from student,uexam where student.semester='" . $_POST["sem"] . "' and student.batch='" . $_POST["batch"] . "' and student.regno=uexam.regno and uexam.batch='" . $_POST["batch"] . "' and uexam.per >='" . $_POST["per"] . "' order by fname asc";
		$res=$obj->execute($sql);
		while($row=mysqli_fetch_array($res))
		{
			$regno=$row["regno"];
			$obj->execute("insert into applicationdet values(null,'$appno','$regno','applied')");
		}
		echo $obj->msg("Applied Successfully for this Vaccancy");
		$obj->redirect("newvaccancy.php");
	}
	include("footer.php");
?>