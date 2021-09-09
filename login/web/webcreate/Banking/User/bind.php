<?php

function BindBank()
{
	include("../db/connection.php");
	$obj=new connection();
	$sql="select * from bank";
	$res=$obj->execute($sql);
	while($row=mysqli_fetch_array($res))
	{
		?>
		<option value="<?php echo $row["bankid"];?>" label="<?php echo $row["bname"]; ?>"><?php echo $row["bname"]; ?></option>
		<?php
	}
}

function BindBranch()
{
	include("../db/connection.php");
	$obj=new connection();
	$bankid=$_POST["bankid"];
	$sql="select * from branch where bankid='" . $_POST["bankid"] . "'";
	$res=$obj->execute($sql);
	?>
	<option>--BRANCH--</option>
		<?php
	while($row=mysqli_fetch_array($res))
	{
		?>
		<option value="<?php echo $row["branchid"];?>"><?php echo $row["brname"]; ?></option>
		<?php
	}
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

if(function_exists($_GET['bankid'])) { 
BindBranch();
// get function name and parameter  $_GET['f']($_GET["p"]); 
}

if(function_exists($_GET['loc'])) { 
BindLocation();
// get function name and parameter  $_GET['f']($_GET["p"]); 
}

?>