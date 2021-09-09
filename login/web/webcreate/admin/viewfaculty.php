<?php
include("adminheader.php");
include("testing.php");
include("../db/connection.php");
$obj=new connection();
error_reporting(0);
?><table width="100%">
  
  <tr>
    <td colspan="3" class="heading">View Faculty</td>
  </tr>
      
  <tr> 
  <tr> 
    <td colspan="3">
	
	<table width="100%" border="5px">
		
		<th>BID</th>
		<th>USERNAME</th>
		<th>SCHEME</th>
		<th>DATE OF BOOKING</th>
		<th>HOUSE NAME</th>
		<th>LOCATION</th>
		<th>PIN</th>
		<th>EMAIL ID</th>
		<th>MOBILE</th>
		<th>UPLOAD LISENCE</th>
		<th>ADHAAR NUMBER</th>
		<th>MODEL NAME</th>
		<th>COLOUR</th>
		<th>OCCUPATION</th>
		<th></th>
	
		<?php
		
			$res=$obj->execute("select * from booking");
			while($row=mysqli_fetch_array($res))
			{
			?>
				
				<tr>
					<td><?php echo $row["BID"];?> </td>
					<td><?php echo $row["dob"];?> </td>
					<td><?php echo $row["House"];?> </td>
					<td><?php echo $row["location"];?> </td>
					<td><?php echo $row["pin"];?> </td>
					<td><?php echo $row["email"];?> </td>
					<td><?php echo $row["mobile"];?> </td>
					<td><?php echo $row["liscense"];?> </td>
					<td><?php echo $row["scheme"];?> </td>
					<td><?php echo $row["uname"];?> </td>
					<td><?php echo $row["adhaarno"];?> </td>
					<td><?php echo $row["modelName"];?> </td>
					<td><?php echo $row["color"];?> </td>
					<td><?php echo $row["occupation"];?> </td>
					<td><a href="viewfaculty.php?fid=<?php echo $row["BID"];?>" name="delete">DELETE</a>  </td>
				</tr>
			
			<?php
			}
			
		?>
		</table>	</td>
  </tr>
</table>
 
<?php

	if(isset($_GET["BID"]))
	{
		$fid=$_GET["BID"];
		$obj->execute("delete from booking where fid='$BID'");
		echo $obj->msg("Faculty deleted successfully");
		$obj->redirect("viewfaculty.php");
	}
	
include("footer.php");
?>