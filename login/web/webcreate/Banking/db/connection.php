<?php

class connection
{

var $con,$res;

function getconnection()
{
	$this->con=mysqli_connect("localhost","root","");
	mysqli_select_db($this->con,"project");	
}

function execute($sql)
{
	$this->getconnection();
	$this->res=mysqli_query($this->con,$sql);
	return $this->res;	
}

}


?>