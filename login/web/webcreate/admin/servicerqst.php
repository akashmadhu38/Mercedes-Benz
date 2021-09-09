<?php
	include("adminheader.php");
	include("testing.php");
include("../../../db/connection.php");
$obj=new connection();
error_reporting(0);
?>
<table width="100%">
<tr>
<td colspan="3" class="heading">Approve New Service Request </td>
</tr>
<tr>
  <td colspan="3">&nbsp;</td>
</tr>

<tr>
<td>
	<table width="100%" border="2px">
		
			
		<th>SID	</th>
		<th>Uname</th>	
		<th>Model Name</th>
		<th>Service Type</th>
		<th>Date Of Booking</th>
		<th>Time</th> 
		<th>House Name</th>
		<th>Location</th>
		<th>Pin</th>
		<th>Mobile</th>
		<th>Compalint</th>
 		<th>Status</th>	
		<?php
		
		 
		 //$res=$obj->execute("select * from booking where uname='". $_SESSION["email"] ."'");
			$res=$obj->execute("select * from service where status='pending' order by SID desc");
			while($row=mysqli_fetch_array($res))
			{
			?>				
				<tr>
					
					
					<td><?php echo $row["SID	"];?> </td>
					<td><?php echo $row["modelID"];?> </td>
					<td><?php echo $row["servname"];?> </td>
					<td><?php echo $row["date"];?> </td>
					<td><?php echo $row["time"];?> </td>
					<td><?php echo $row["hname"];?> </td>
					<td><?php echo $row["location"];?> </td>
					<td><?php echo $row["pin"];?> </td>
					<td><?php echo $row["House"];?> </td>
					<td><?php echo $row["location"];?> </td>
					<td><?php echo $row["pin"];?> </td>
					<td><?php echo $row["mobile"];?> </td>
					<td><?php echo $row["complaint"];?> </td>
					<td><?php echo $row["status"];?> </td>
					
					
					 
					<td><a href="approvevaccancy.php?bid_a=<?php echo $row["SID"];?>">APPROVE</a></td>
					<td><a href="approvevaccancy.php?bid_d=<?php echo $row["SID"];?>">DISAPPROVE</a></td>
				</tr>
			
			<?php
			}
			
		?>
		</table>	</td>
  </tr>
</table>

<?php
 

	if(isset($_GET["sid_a"]))
	{
		$bid=$_GET["sid_a"];
		$obj->execute("update service set status='approved' where SID='$sid'");
		echo $obj->msg("Booking details approved successfully");
		$obj->redirect("approvevaccancy.php");
	}
	if(isset($_GET["sid_d"]))
	{
		$bid=$_GET["sid_d"];
		$obj->execute("update Booking set status='disapproved' where bid='$sid'");
		echo $obj->msg("Booking details disapproved successfully");
		$obj->redirect("approvevaccancy.php");
	}
?>

<?php
	include("footer.php");
?>