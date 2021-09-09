<?php
class connection
{
var $con,$res;
function getconnection()
{
$this->con=mysqli_connect("localhost","root","");
mysqli_select_db($this->con,"aqua");
}
function execute($q)
{
$this->getconnection();
$this->res=mysqli_query($this->con,$q);
return $this->res;
}

}
?>