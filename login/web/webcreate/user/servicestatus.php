<?php
	include("header.php");

include("testing.php");
include("../../../db/connection.php");
$obj=new connection();
error_reporting(0);
?>
<table width="100%">
<tr>
<td colspan="3" class="heading">BOOKING LIST</td>
</tr>
<tr>
  <td colspan="3">&nbsp;</td>
</tr>

<tr>
<td>
	<table width="100%" border="2px">
			
		<th>BID	</th>
		<th>Uname</th>	
		<th>Liscense</th>
		<th>Model Name	</th>
		<th>Adhaarno</th>
		<th>Color</th>
		<th>Scheme</th> 
		<th>DOB	</th>
		<th>House Name</th>
		<th>Location</th>
		<th>Pin</th>
			
		<th>occupation</th> 
		<th>mobile</th>	
		<th>status</th>	
		<?php
		//	 //$res=$obj->execute("select * from booking where uname='". $_SESSION["email"] ."'");
// BID liscense modelName adhaarno color scheme uname dob House location pin occupation mobile status
			$res=$obj->execute("select * from service where uname='". $_SESSION["email"] ."'");
			while($row=mysqli_fetch_array($res))
			{
			?>				
				<tr>
				    <td><?php echo $row["SID"];?> </td>
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
		$obj->redirect("servicestatus.php");
	}
	if(isset($_GET["vid_d"]))
	{
		$vid=$_GET["vid_d"];
		$obj->execute("update vaccancy set status='disapprove' where vid='$vid'");
		echo $obj->msg("Vaccancy details disapproved successfully");
		$obj->redirect("servicestatus.php");
	}
?>

<?php
	include("footer.php");
?>