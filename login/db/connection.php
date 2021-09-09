
<style type="text/css">
input[type="submit"] {
	background: #00a1ff;
	outline: none;
	color: #fff;
	font-size: 14px;
	font-weight: 400;
	border: none;
	padding: 11px 20px;
	letter-spacing: 1px;
	text-transform: capitalize;
	cursor: pointer;
	transition: 0.5s all;
	margin: 56px 0px 0px;
	-webkit-transition: 0.5s all;
	-o-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-ms-transition: 0.5s all;
}

input[type="submit"]:hover {
	opacity: 0.8;
}

</style>

<?php

if(!class_exists('connection'))
{

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