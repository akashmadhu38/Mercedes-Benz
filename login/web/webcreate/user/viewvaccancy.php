<?php
	include("header.php");
?>
<table width="100%">
<tr>
<td colspan="3" class="heading">view vaccancies</td>
</tr>
<tr>
  <td colspan="3">&nbsp;</td>
</tr>

<tr>
<td>
	<table width="100%">
		
		<th></th>
		<th>Company</th>
		<th>Post</th>
		<th>Vaccancies</th>
		<th>Elegibility</th>
		<th>Details</th>
		<th>% of Marks</th> 
		<th>Status</th>  
		<th></th>  
		<?php
		
			$res=$obj->execute("select * from vaccancy,company where vaccancy.cmpid=company.cmpid and vaccancy.cmpid='". $_SESSION["cmpid"] ."'");
			while($row=mysqli_fetch_array($res))
			{
			?>				
				<tr>
					<td><img src="../uploads/<?php echo $row["logo"];?>" height="125" width="150" />  </td>
					<td><?php echo $row["cmpname"];?> </td>
					<td><?php echo $row["post"];?> </td>
					<td><?php echo $row["totalv"];?> </td>
					<td><?php echo $row["elegibility"];?> </td>
					<td>
					Other Info : <?php echo $row["details"];?> <br/>
					Year of Passout : <?php echo $row["vyear"];?> <br/>
					Last Date : <?php echo $row["ldate"];?> <br/>
					Location : <?php echo $row["loc"];?>
					</td>
					<td><?php echo $row["marksp"];?> </td>
					<td style="text-transform:uppercase;color:#FF0000;"><?php echo $row["status"];?> </td>
					<td><a href="viewvaccancy.php?vid_d=<?php echo $row["vid"];?>">DELETE</a></td>
					 
					 
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
		$obj->execute("delete from vaccancy where vid='$vid'");
		echo $obj->msg("Vaccancy deleted successfully");
		$obj->redirect("viewvaccancy.php");
	}
?>

<?php
	include("footer.php");
?>