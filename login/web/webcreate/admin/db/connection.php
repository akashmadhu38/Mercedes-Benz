<?php

if(!class_exists('connection'))
{

class connection
{

var $con,$res;

function getconnection()
{
	$this->con=mysqli_connect("localhost","root","");
	mysqli_select_db($this->con,"placementcell");	
}

function execute($sql)
{
	$this->getconnection();
	$this->res=mysqli_query($this->con,$sql);
	return $this->res;	
}

function msg($ms)
{
	$this->message="<script>alert('" . $ms . "')</script>";
	return $this->message;
}

function redirect($location)
{
	echo '<meta http-equiv="Refresh" Content="0; URL='.$location.'">';
	exit;
}


}

}

?>