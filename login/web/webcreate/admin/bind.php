<?php

function BindCourse_Master()
{
	include("../db/connection.php");
	$obj=new connection();
	$sql="select * from course";
	$res=$obj->execute($sql);
	?>	
		<option value="0">--COURSE--</option>
		<?php
	while($row=mysqli_fetch_array($res))
	{
		?>
		<option value="<?php echo $row["cid"];?>"><?php echo $row["cname"]; ?></option>
		<?php
	}
}

function BindDepartment()
{
	include("../db/connection.php");
	$obj=new connection();
	$sql="select * from department";
	$res=$obj->execute($sql);
	?>	
		<option value="0">--DEPARTMENT--</option>
		<?php
	while($row=mysqli_fetch_array($res))
	{
		?>
		<option value="<?php echo $row["deptid"];?>"><?php echo $row["dept"]; ?></option>
		<?php
	}
}

function BindCourse()
{
	include("../db/connection.php");
	$obj=new connection();
	$cat=$_POST["cat"];
	$sql="select * from course where category='" . $_POST["cat"] . "'";
	$res=$obj->execute($sql);
	?>	
		<option value="0">--COURSE--</option>
		<?php
	while($row=mysqli_fetch_array($res))
	{
		?>
		<option value="<?php echo $row["cid"];?>"><?php echo $row["cname"]; ?></option>
		<?php
	}
}

if(isset($_GET['cat_s'])) { 
BindCourse();
// get function name and parameter  $_GET['f']($_GET["p"]); 
}


function BindSubject()
{
	include("../db/connection.php");
	$obj=new connection();
	$sem=$_POST["sem"];
	$cid=$_POST["cid"];
	$sql="select * from subject where sem='" . $_POST["sem"] . "' and cid='" . $_POST["cid"] . "'";
	$res=$obj->execute($sql);
	?>
	
		<option value="0">--SUBJECT--</option>
		<?php
	while($row=mysqli_fetch_array($res))
	{
		?>
		<option value="<?php echo $row["subid"];?>"><?php echo $row["subname"]; ?></option>
		<?php
	}
}

if(isset($_GET['sem_m'])) { 
BindSubject();
// get function name and parameter  $_GET['f']($_GET["p"]); 
}


function BindSubject_lab()
{
	include("../db/connection.php");
	$obj=new connection();
	$sem=$_POST["sem"];
	$cid=$_POST["cid"];
	$sql="select * from subject where sem='" . $_POST["sem"] . "' and cid='" . $_POST["cid"] . "' and ctype='PRACTICAL'";
	$res=$obj->execute($sql);
	?>
	
		<option value="0">--SUBJECT--</option>
		<?php
	while($row=mysqli_fetch_array($res))
	{
		?>
		<option value="<?php echo $row["subid"];?>"><?php echo $row["subname"]; ?></option>
		<?php
	}
}

if(isset($_GET['sem_ml'])) { 
BindSubject_lab();
// get function name and parameter  $_GET['f']($_GET["p"]); 
}

function BindLocation()
{
	include("../connection.php");
	$obj=new connection();
	$sql="select * from location where did='" . $_POST["did"] . "'";
	$res=$obj->execute($sql);
	?>
	
		<option value="0">--LOCATION--</option>
		<?php
	while($row=mysqli_fetch_array($res))
	{
		?>
		<option value="<?php echo $row["lid"];?>"><?php echo $row["lname"]; ?></option>
		<?php
	}
}


if(isset($_GET['loc'])) { 
BindLocation();
// get function name and parameter  $_GET['f']($_GET["p"]); 
}

function BindSystemNo()
{
	include("../db/connection.php");
	$obj=new connection();
	$lab=$_POST["lab"];
	$sysno=$_POST["sysno"];
	
	$rcount=0;
	?>
	<table width="100%">
		<tr>
	<?php
	
	if($lab=="LAB 1")
	{
		for($s=1;$s<=$sysno;$s++)
		{
			$db_sysno="CSLB-1/"+$s;
			if ($rcount % 10 != 0)
				{
					?>
				<td><?php echo $db_sysno; ?></td>
					<?php
					$rcount=$rcount+1;
				}
			else
				{
					?>
				<td><?php echo $db_sysno; ?></td>
					<?php
					$rcount=$rcount+1;
				}
		}
	}
	else if($lab=="LAB 2")
	{
		for($s=1;$s<=$sysno;$s++)
		{
			$db_sysno="CSLB-2/"+$s;
			if ($rcount % 10 != 0)
				{
					?>
				<td><?php echo $db_sysno; ?></td>
					<?php
					$rcount=$rcount+1;
				}
			else
				{
					?>
				<td><?php echo $db_sysno; ?></td>
					<?php
					$rcount=$rcount+1;
				}
		}
	}
	?>
	</tr>
	</table>
	<?php
	
}


if(isset($_GET['sysno'])) { 
BindSystemNo();
// get function name and parameter  $_GET['f']($_GET["p"]); 
}


function BindGetSystemNo()
{
	include("../db/connection.php");
	$obj=new connection();
	$labid=$_POST["labid"];
	$sql="select * from systemno where labid='" . $_POST["labid"] . "'";
	$res=$obj->execute($sql);
	?>
	
		<option value="0">--SYSTEM NUMBER--</option>
		<?php
	while($row=mysqli_fetch_array($res))
	{
		?>
		<option value="<?php echo $row["snid"];?>"><?php echo $row["sysno"]; ?></option>
		<?php
	}
}


if(isset($_GET['sys'])) { 
BindGetSystemNo();
// get function name and parameter  $_GET['f']($_GET["p"]); 
}


function BindLab()
{
	include("../db/connection.php");
	$obj=new connection();
	$sql="select * from softlab";
	$res=$obj->execute($sql);
	?>	
		<option value="0">--SELECT--</option>
		<?php
	while($row=mysqli_fetch_array($res))
	{
		?>
		<option value="<?php echo $row["labid"];?>"><?php echo $row["stlab"]; ?></option>
		<?php
	}
}



function Get_Student_Info_Add()
{
	include("../db/connection.php");
	$obj=new connection();
	$dept=$_POST["dept"];
	$year=$_POST["year"];
	$name=$_POST["name"];
	$purpose=$_POST["purpose"];
	//dept='+dept+'&year='+year+'&name='+name+'&purpose='+purpose
	$obj->execute("insert into browse_temp values(null,'$dept','$year','$name','$purpose')");
	$sql="select * from browse_temp";
	$res=$obj->execute($sql);
	?>
	
	<table width="100%">
       
        <th>Department</th>
        <th>Year</th>
        <th>Student Name</th>
        <th>Purpose</th>
        <th></th>
      
		<?php
	while($row=mysqli_fetch_array($res))
	{
		?>
		<tr>
        <td><?php echo $row["dept"];?></td>
        <td><?php echo $row["byear"];?></td>
        <td><?php echo $row["name"];?></td>
        <td><?php echo $row["purpose"];?></td>
         
        <td><a href="browsedetail.php?bid=<?php echo $row["bid"];?>">DELETE</a> </td>
      </tr>
		<?php
	}
	?>
	</table>
	<?php
}


if(isset($_GET['stud_add'])) { 
Get_Student_Info_Add();
// get function name and parameter  $_GET['f']($_GET["p"]); 
}
?>