<?php
	include("header.php");
?>



<table width="100%">
<tr>
<td colspan="3" class="heading">applied vaccancies</td>
</tr>
<tr>
  <td colspan="3">&nbsp;</td>
</tr>

<tr>
<td>
	<table width="100%">
		<tr>
		<?php
			
			$rcount=0;
			$res=$obj->execute("select * from vaccancy,company where vaccancy.cmpid=company.cmpid and vaccancy.status='approved' and vaccancy.vid in (select vid from application)");
			while($row=mysqli_fetch_array($res))
			{			
				if ($rcount % 4 != 0)
				{
					?>
					<td>
					<table border="1">					
					<tr><td align="center"><img src="../uploads/<?php echo $row["logo"];?>" height="175" width="200" /></td>	</tr>	
					<tr><td><?php echo $row["cmpname"];?></td></tr>
					<tr><td>Post : <?php echo $row["post"];?> </td> </tr>
					<tr><td>Total Vaccancies : <?php echo $row["totalv"];?> </td></tr>
					<tr>
					  <td>Eligibility : <?php echo $row["elegibility"];?> </td>
					</tr>
					<tr><td>Total Vaccancies : <?php echo $row["totalv"];?> </td></tr>
					<tr><td>
					Other Info : <?php echo $row["details"];?> <br/>
					Year of Passout : <?php echo $row["vyear"];?> <br/>
					Last Date : <?php echo $row["ldate"];?> <br/>
					Location : <?php echo $row["loc"];?>
					 </td></tr>
					<tr><td>% of Marks : <?php echo $row["marksp"];?> </td></tr>
					<tr><td><div style="height:15px"></div></td></tr>
					<tr><td align="center"><a class="button" href="appliedvaccancystatus.php?vid=<?php echo $row["vid"];?>">VIEW STATUS</a>  </td></tr>
					</table>					
					</td>
					
					<?php
 				 	$rcount=$rcount+1;
				}
				else
				{
					?>
					</tr>
					<tr><td><div style="height:15px"></div></td></tr>
					<tr>
					<td>
					<table border="1">					
					<tr><td align="center"><img src="../uploads/<?php echo $row["logo"];?>" height="175" width="200" /></td>	</tr>
					<tr><td><?php echo $row["cmpname"];?></td></tr>
					<tr><td>Post : <?php echo $row["post"];?> </td> </tr>
					<tr><td>Total Vaccancies : <?php echo $row["totalv"];?> </td></tr>
					<tr><td>Eligibility : <?php echo $row["elegibility"];?> </td></tr>
					<tr><td>Total Vaccancies : <?php echo $row["totalv"];?> </td></tr>
					<tr><td>
					Other Info : <?php echo $row["details"];?> <br/>
					Year of Passout : <?php echo $row["vyear"];?> <br/>
					Last Date : <?php echo $row["ldate"];?> <br/>
					Location : <?php echo $row["loc"];?>
					 </td></tr>
					<tr><td>% of Marks : <?php echo $row["marksp"];?> </td></tr>
					<tr><td><div style="height:15px"></div></td></tr>
					<tr><td align="center"><a class="button" href="appliedvaccancystatus.php?vid=<?php echo $row["vid"];?>">VIEW STATUS</a>  </td></tr>
					</table>						
					</td>
					
					<?php
					
 				 	$rcount=$rcount+1;					
				}
			}
			?>
			</tr>
		</table>	
				 	</td>
  </tr>
</table>
<?php
	include("footer.php");	
?>