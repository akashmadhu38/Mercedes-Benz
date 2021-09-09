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


function BindColorDetails()
{
	include("../../../db/connection.php");
	$obj=new connection();
	$color=$_POST["color"];
	$classid=$_POST["classid"];
	$sql="select distinct pic from colour where colour='$color' and modelID='$classid'";
	$res=$obj->execute($sql);
	
	// semester='" . $_POST["sem"] . "' and 
	//color,classid
	
	?>
	
	
		<?php
	if($row=mysqli_fetch_array($res))
	{
		?><table width="300px">
		<tr>
		<td><img src="../<?php echo $row["pic"];?>" width="250px" height="180px" /></td>
		</tr>
	</table>
		<?php
	}
	else
	{
	 echo "No Image Uploaded!!!";
	}
	?>
	<?php
}

if(isset($_GET['clid'])) 
{ 
	BindColorDetails();
// get function name and parameter  $_GET['f']($_GET["p"]); 
}


function BindStudent()
{
	include("../db/connection.php");
	$obj=new connection();
	$sem=$_POST["sem"];
	$batch=$_POST["batch"];
	$sql="select CONCAT_WS(' ',fname,lname) AS name,regno from student where batch='" . $_POST["batch"] . "' and regno not in(select regno from uexam where sem='" . $_POST["sem"] . "' and batch='" . $_POST["batch"] . "') order by fname asc";
	$res=$obj->execute($sql);
	
	// semester='" . $_POST["sem"] . "' and 
	//
	
	?>
	
		<option value="0">--STUDENT--</option>
		<?php
	while($row=mysqli_fetch_array($res))
	{
		?>
		<option value="<?php echo $row["regno"];?>"><?php echo $row["name"]; ?></option>
		<?php
	}
}

if(isset($_GET['stud_sb'])) { 
BindStudent();
// get function name and parameter  $_GET['f']($_GET["p"]); 
}




function BindStudent_Details()
{
	include("../db/connection.php");
	$obj=new connection();
	$sem=$_POST["sem"];
	$batch=$_POST["batch"];
	$per=$_POST["per"];
	$vid=$_POST["vid"];
	$sql="select distinct CONCAT_WS(' ',student.fname,student.lname) AS name,student.regno, uexam.per from student,uexam where student.semester='" . $_POST["sem"] . "' and student.batch='" . $_POST["batch"] . "' and student.regno=uexam.regno and uexam.batch='" . $_POST["batch"] . "' and uexam.per >='" . $_POST["per"] . "' and student.regno not in (select applicationdet.regno from applicationdet,application where applicationdet.appno= application.appno and application.vid='". $_POST["vid"] ."') order by student.fname asc";
	$res=$obj->execute($sql);
	$count=1;
	?>
		<table width="100%" align="center" border="1">
<th align="center">Sl No.</th>
<th align="center">Register No.</th>
<th align="center">Name</th>
<th align="center">Overall (%)</th>
		<?php
	while($row=mysqli_fetch_array($res))
	{
		?>
		<tr>
		<td><?php echo $count; ?></td>
		<td><?php echo $row["regno"]; ?></td>
		<td><?php echo $row["name"]; ?></td>
		<td><?php echo $row["per"]; ?></td>
		</tr>		
		<?php
		$count=$count+1;
	}
	?>
	</table>
	<?php
}

if(isset($_GET['stud_details'])) { 
BindStudent_Details();
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