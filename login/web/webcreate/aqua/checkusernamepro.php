<?php
$q=$_GET['q'];

include("connection.php");
$ob=new connection();
$sql="select * from login where username='$q'";

$res=$ob->execute($sql);
$r=mysqli_num_rows($res);
if($r>0)
{
echo "Username already taken!!";
}
else
{
echo "Username Available";
}
?>