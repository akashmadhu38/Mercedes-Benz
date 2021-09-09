

			<?php



extract($_POST);

include("connection.php");
$ob=new connection();

 $sql1="insert into login(username,password,role,status)values('$uname','$psd','user',0)";
$res1=$ob->execute($sql1);

$sql2="select max(loginid) from login";
$res2=$ob->execute($sql2);

$r=mysqli_fetch_array($res2);
 $id=$r[0];


$sql3="insert into userreg(Name,hname,Email,contact,loginid,status)values('$name','$address','$email','$contact',$id,0)";
$res3=$ob->execute($sql3);

if($res3>0)
{
echo "<script>
window.onload=function()
{
alert('successfully registered....!');
window.location='index.html';
}
</script>";
}
else
{
echo "<script>
window.onload=function()
{
alert('something wrong,pls check your details....!');
window.location='userreg.php';
}
</script>";
}
?>
