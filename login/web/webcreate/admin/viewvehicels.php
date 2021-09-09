<?php
	include("adminheader.php");

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
			
		<th>Stock	</th>
		<th>Colour</th>	
		<th>Model Name</th>
		<th>Class Name	</th>
		<th>Stock ID</th>
		<th>Stock Removal</th>
		<?php
		//	stock colour modelName Classname stID//	accno	accname	count	image	price	 //$res=$obj->execute("select * from booking where uname='". $_SESSION["email"] ."'");
// BID liscense modelName adhaarno color scheme uname dob House location pin occupation mobile status
			$res=$obj->execute("select * from stock ");
			while($row=mysqli_fetch_array($res))
			{
			?>				
				<tr>
				
					<td><?php echo $row["stock"];?> </td>
					<td><?php echo $row["colour"];?> </td>
				
					<td><?php echo $row["modelName"];?> </td>
					<td><?php echo $row["Classname"];?> </td>
					<td><?php echo $row["stID"];?> </td>
					
				
					<td><a href="viewvehicels.php?vid_d=<?php echo $row["stID"];?>">DELETE</a></td>
			
					
				
					 
					 
				</tr>
			
			<?php
			}
			
		?>
		</table>	</td>
  </tr>
</table>

<?php
 

	
	if(isset($_GET["vid_d"]))
	{
		$vid=$_GET["vid_d"];
		$obj->execute("delete from stock  where stID='$vid'");
		echo $obj->msg("Stock Deleted successfully");
		$obj->redirect("approvevaccancy.php");
	}
?>

<?php
	include("footer.php");
?>