<?php


include("testing.php");



$qu="select * from benzclass";
$da=mysqli_query($conn,$qu);
$total=mysqli_num_rows($da);

if($total!=0)
{
$x="";
while($result=mysqli_fetch_assoc($da))
{
$x=$x."<img src='{$result['pic']}'></img>";
}

}

echo $x;


?>
