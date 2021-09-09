<?php
	include("header.php");
?>
<table width="100%">
<tr>
<td colspan="2" class="heading">applied vaccancy status </td>
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
<td colspan="2" class="heading">Applied Students</td>
</tr>
<tr>
<td colspan="2" align="center" style="text-align:center;">
<div id="stud_info">

<?php
		
		$sql="select distinct CONCAT_WS(' ',student.fname,student.lname) AS name,student.regno, uexam.per, applicationdet.status from student,uexam,applicationdet,application where student.regno=uexam.regno and uexam.regno=applicationdet.regno and applicationdet.appno= application.appno and application.vid='$vid' order by student.fname asc";
	$res=$obj->execute($sql);
	$count=1;
	?>
		<table width="100%" align="center" border="1">
<th align="center">Sl No.</th>
<th align="center">Register No.</th>
<th align="center">Name</th>
<th align="center">Overall (%)</th>
<th align="center">Status</th>
		<?php
	while($row=mysqli_fetch_array($res))
	{
		?>
		<tr>
		<td><?php echo $count; ?></td>
		<td><?php echo $row["regno"]; ?></td>
		<td><?php echo $row["name"]; ?></td>
		<td><?php echo $row["per"]; ?></td>
		<td style="text-transform:uppercase;color:#FF0000;font-weight:bold;"><?php echo $row["status"]; ?></td>
		</tr>		
		<?php
		$count=$count+1;
	}
	?>
	</table>
	

</div>
</td>
</tr>
<tr>
<td colspan="2" class="heading"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td></td>
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
		$sql="select distinct student.regno from student,uexam where student.semester='" . $_POST["sem"] . "' and student.batch='" . $_POST["batch"] . "' and student.regno=uexam.regno and uexam.batch='" . $_POST["batch"] . "' HAVING AVG(uexam.per)>='" . $_POST["per"] . "' order by fname asc";
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