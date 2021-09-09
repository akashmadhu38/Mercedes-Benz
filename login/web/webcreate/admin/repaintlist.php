<?php
	include("adminheader.php");

include("testing.php");
include("../../../db/connection.php");
$obj=new connection();
error_reporting(0);
?>
<table width="100%">
<tr>
<td colspan="3" class="heading">Repaint Booking LIST</td>
</tr>
<tr>
  <td colspan="3">&nbsp;</td>
</tr>

<tr>
<td>
	<table width="100%" border="2px">
			
						
		<th>PID</th>
		<th>Colour</th>	
		<th>Date Of Booking</th>
		<th>Time</th>
		<th>User Name</th>
		<th>House Nmae</th> 
		<th>Location</th>
		<th>Pin</th>
		<th>Mobile</th>
		<th>Model Name</th>
		
 		
		<?php
		//PID	clr	dob	tym	uname	hname	location	pin	mobile	modelID
// modelID	servname	time	date	SID	uname	hname	location	pin	mobile	complaint	status
			$res=$obj->execute("select * from paint");
			while($row=mysqli_fetch_array($res))
			{
			?>				
				<tr>
				
					<td><?php echo $row["PID	"];?> </td>
					<td><?php echo $row["clr"];?> </td>
					<td><?php echo $row["dob"];?> </td>
					<td><?php echo $row["tym"];?> </td>
					<td><?php echo $row["uname"];?> </td>
					<td><?php echo $row["hname"];?> </td>
					<td><?php echo $row["location"];?> </td>
					<td><?php echo $row["pin"];?> </td>
					<td><?php echo $row["House"];?> </td>
					<td><?php echo $row["location"];?> </td>
					<td><?php echo $row["pin"];?> </td>
					<td><?php echo $row["mobile"];?> </td>
					<td><?php echo $row["modelID"];?> </td>
					
				
					
				
					 
					 
				</tr>
			
			<?php
			}
			
		?>
		</table>	</td>
  </tr>
</table>

<?php
 

	if(isset($_GET["vid_a"]))
	{
		$vid=$_GET["vid_a"];
		$obj->execute("update vaccancy set status='approve' where vid='$vid'");
		echo $obj->msg("Vaccancy details approved successfully");
		$obj->redirect("approvevaccancy.php");
	}
	if(isset($_GET["vid_d"]))
	{
		$vid=$_GET["vid_d"];
		$obj->execute("update vaccancy set status='disapprove' where vid='$vid'");
		echo $obj->msg("Vaccancy details disapproved successfully");
		$obj->redirect("approvevaccancy.php");
	}
?>

<?php
	include("footer.php");
?>
?>