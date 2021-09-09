<?php
	include("adminheader.php");
	include("testing.php");
include("../../../db/connection.php");
$obj=new connection();
error_reporting(0);
?>
<table width="100%">
<tr>
<td colspan="3" class="heading">APPROVE NEW BOOKING </td>
</tr>
<tr>
  <td colspan="3">&nbsp;</td>
</tr>

<tr>
<td>
	<table width="100%" border="2px">
		
		<th>BID</th>
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
		<th>Email</th>	
		<th>Occupation</th> 
		<th>Mobile</th>	
		<th>Status</th>	
		<?php
		 //	BID liscense modelName adhaarno color scheme dob House location pin occupation mobile uname status
		 //BID  Uname Liscense Model Name  Adhaarno Color Scheme  DOB House Name Location  Pin email occupation mobile  
		 //$res=$obj->execute("select * from booking where uname='". $_SESSION["email"] ."'");
			$res=$obj->execute("select * from booking where status='pending' order by bid desc");
			while($row=mysqli_fetch_array($res))
			{
			?>				
				<tr>

					   <td><?php echo $row["BID"];?> </td>
				  <td><?php echo $row["uname"];?> </td>
				 <td><img src="../uploads/<?php echo $row["liscense"];?>" height="125" width="150" />  </td>

		      <td><?php echo $row["modelName"];?> </td>
					      <td><?php echo $row["adhaarno"];?> </td>
				       <td><?php echo $row["color"];?> </td>
					          <td><?php echo $row["scheme"];?> </td>
				        <td><?php echo $row["dob"];?> </td>
				    <td><?php echo $row["House"];?>
					</td> <td><?php echo $row["pin"];?> </td>
				          <td><?php echo $row["location"];?> </td>
				          <td><?php echo $row["occupation"];?> </td>
					     <td><?php echo $row["mobile"];?> </td>
					
					
					
					 
					<td><a href="approvevaccancy.php?bid_a=<?php echo $row["BID"];?>">APPROVE</a></td>
					<td><a href="approvevaccancy.php?bid_d=<?php echo $row["BID"];?>">DISAPPROVE</a></td>
				</tr>
			
			<?php
			}
			
		?>
		</table>	</td>
  </tr>
</table>

<?php
 

	if(isset($_GET["bid_a"]))
	{
		$bid=$_GET["bid_a"];
		$obj->execute("update Booking set status='approved' where bid='$bid'");
		echo $obj->msg("Booking details approved successfully");
		$obj->redirect("approvevaccancy.php");
	}
	if(isset($_GET["bid_d"]))
	{
		$bid=$_GET["bid_d"];
		$obj->execute("update Booking set status='disapproved' where bid='$bid'");
		echo $obj->msg("Booking details disapproved successfully");
		$obj->redirect("approvevaccancy.php");
	}
?>

<?php
	include("footer.php");
?>