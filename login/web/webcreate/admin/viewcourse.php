<?php
	include("adminheader.php");

include("testing.php");
include("../../../db/connection.php");
$obj=new connection();
error_reporting(0);
?>
<table width="100%">
<tr>
<td colspan="3" class="heading">ACCESSORY LIST</td>
</tr>
<tr>
  <td colspan="3">&nbsp;</td>
</tr>

<tr>
<td>
	<table width="100%" border="2px">
			
		<th>Accessory ID	</th>
		<th>Accessory Name</th>	
		<th>Amount</th>
		<th>Image</th>
		<th>Price</th>
			
		<?php
		//	//	accno	accname	count	image	price	 //$res=$obj->execute("select * from booking where uname='". $_SESSION["email"] ."'");
// BID liscense modelName adhaarno color scheme uname dob House location pin occupation mobile status
			$res=$obj->execute("select * from accstock ");
			while($row=mysqli_fetch_array($res))
			{
			?>				
				<tr>
				
					<td><?php echo $row["accno"];?> </td>
					<td><?php echo $row["accname"];?> </td>
					<td><?php echo $row["count"];?> </td>
					<td><img src="<?php echo $row["image"];?> "></td>
					<td><?php echo $row["price"];?> </td>
					
			
					
				
					 
					 
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