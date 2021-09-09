<?php
include("adminheader.php");
include("testing.php");
include("db/connection.php");
$obj=new connection();
error_reporting(0);
?><table width="100%">
  
  <tr>
    <td colspan="3" class="heading">VIEW USER DETAILS</td>
  </tr>
      
  <tr> 
  <tr> 
    <td colspan="3">
	
	<table  width="100%" border="3px">
		
		<th>UID</th>
		<th>FIRST NAME</th>
		<th>LAST NAME</th>
		<th>MOBILE</th>
		<th>EMAIL ID</th>
		<?php
		
			$res=$obj->execute("select * from register");
			while($row=mysqli_fetch_array($res))
			{
			?>
				
				<tr>
					<td><?php echo $row["UID"];?> </td>
					<td><?php echo $row["fname"];?> </td>
					<td><?php echo $row["lname"];?> </td>
					<td><?php echo $row["mobile"];?> </td>
					<td><?php echo $row["email"];?> </td>
					<td><a href="userdetails.php?fid=<?php echo $row["UID"];?>" name="delete">DELETE</a>  </td>
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
		$obj->execute("delete from register where fid='$UID'");
		echo $obj->msg("Faculty deleted successfully");
		$obj->redirect("userdetails.php");
	}
	
include("footer.php");
?>