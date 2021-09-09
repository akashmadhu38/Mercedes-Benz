<?php
	include("header.php");
?>
<table width="100%">
<tr>
<td colspan="3" class="heading">approve new bookings </td>
</tr>
<tr>
  <td colspan="3">&nbsp;</td>
</tr>

<tr>
<td>
	<table width="100%">
		
		<th>Image</th>
		<th>Company</th>
		<th>Model</th>
		<th>Color</th>
		<th>Register No.</th>
		<th>Bid Amount</th>
		<th>Status</th>
		<th></th>	
		<th></th>	
		<th></th>	
		<?php
		
			$res=$obj->execute("select * from addvehicle,addmodel,addcompany where addvehicle.modelid=addmodel.modelid and addvehicle.cmpid=addcompany.cmpid and addmodel.cmpid=addcompany.cmpid and addvehicle.status='pending'");
			while($row=mysqli_fetch_array($res))
			{
			?>				
				<tr>
					<td><img src="../uploads/<?php echo $row["vehicleimage"];?>" height="125" width="150" />  </td>
					<td><?php echo $row["companyname"];?> </td>
					<td><?php echo $row["model"];?> </td>
					<td><?php echo $row["color"];?> </td>
					<td><?php echo $row["registerno"];?> </td>
					<td>Rs. <?php echo $row["estimatedbidamount"];?>/- </td>
					<td style="color:#009900;font-weight:bold;text-transform:uppercase;"><?php echo $row["status"];?> </td>
					<td><a href="viewvehicle_ad.php?vid=<?php echo $row["vehicleid"];?>">APPROVE</a></td>
					<td><a href="approvevehicle.php?vid_d=<?php echo $row["vehicleid"];?>">DISAPPROVE</a></td>
				</tr>
			
			<?php
			}
			
		?>
		</table>	</td>
  </tr>
</table>

<?php
if(isset($_GET["tid_dw"]))
{
    // Get parameters
	
	$fl="";
	$tid=$_GET["tid_dw"];
    
    $id=$_REQUEST['tid_dw'];
$res=$obj->execute("select file from tutorials where tid='$tid'");
	if($row=mysqli_fetch_array($res))
	{
		$_SESSION["file"]=$row["file"];
	}
	$obj->redirect("download.php");
}

	if(isset($_GET["vid_a"]))
	{
		$vehicleid=$_GET["vid_a"];
		$obj->execute("update addvehicle set status='approve' where vehicleid='$vehicleid'");
		echo $obj->msg("Vehicle details approved successfully");
		$obj->redirect("approvevehicle.php");
	}
	if(isset($_GET["vid_d"]))
	{
		$vehicleid=$_GET["vid_d"];
		$obj->execute("update addvehicle set status='disapprove' where vehicleid='$vehicleid'");
		echo $obj->msg("Vehicle details disapproved successfully");
		$obj->redirect("approvevehicle.php");
	}
?>

<?php
	include("footer.php");
?>