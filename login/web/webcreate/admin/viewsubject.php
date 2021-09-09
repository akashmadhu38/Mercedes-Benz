<?php
include("adminheader.php");
include("testing.php");
include("../db/connection.php");
$obj=new connection();
error_reporting(0);
?>
<table width="100%">
  
  <tr>
    <td colspan="3" class="heading">View Subject </td>
  </tr>
   
  <tr>
    <td width="10%"></td>
    <td width="80%"></td>
    <td width="10%"></td>
  </tr>
   
  <tr>
    <td></td>
    <td><table width="90%">
      <tr>
        <td width="30%">Course</td>
        <td width="30%">Semester</td>
        <td width="30%">&nbsp;</td>
      </tr>
      <tr>
        <td><select name="course">
		<?php
			BindCourse_Master();
		?>
        	</select>
		</td>
        <td><select name="sem">
          <option value="0">--SELECT--</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select></td>
        <td><input type="submit" name="btnsearch" value="Search"></td>
      </tr>
    </table></td>
    <td></td>
  </tr>
  <tr>
   <td></td>
    <td>
	<?php
	
		if(isset($_POST["btnsearch"]))
		{
			extract($_POST);
			$res=$obj->execute("select subid,subname,sem,ctype from subject where sem='$sem' and cid='$course'");
			if($rcount=mysqli_num_rows($res))
			{
			?>
				
		<table width="100%" style="margin-top:7px;">
				 
		<th>Subject</th>
		<th>Subject Type</th>
		<th>Semester</th>
		<th></th>
				
			<?php
			while($row=mysqli_fetch_array($res))
			{
			?>
				
				<tr>					 
					<td><?php echo $row["subname"];?> </td>						 
					<td><?php echo $row["ctype"];?> </td>						 
					<td><?php echo $row["sem"];?> </td>					 
					<td><a href="viewsubject.php?subid=<?php echo $row["subid"];?>" name="delete">DELETE</a>  </td>
				</tr>
			
			<?php
			}
			
			}
			else
			{
				echo $obj->msg("No Data Exists!!!");
			}
			
		}
	
	?>
		</td>
		<td></td>
  </tr>
</table>
 
<?php
	
	if(isset($_GET["subid"]))
	{
		$subid=$_GET["subid"];
		$obj->execute("delete from subject where subid='$subid'");
		echo $obj->msg("Subject deleted successfully");
		$obj->redirect("viewsubject.php");
	}

?>
<?php
include("footer.php");
?>