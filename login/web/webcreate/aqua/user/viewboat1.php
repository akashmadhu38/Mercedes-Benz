<?php
session_start();
if(!isset($_SESSION['uname'])) { //if not yet logged in
   header("Location: ../login.php");// send to login page
  } include("header.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

	<script type="text/javascript">
function show(str)
{
if (str.length==0)
  { 
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","gethint.php?q="+str,true);
xmlhttp.send();
}
</script>
   </head>
   <body>             
          
          
         
				<form  method="post" name="form1" enctype="multipart/form-data">
.
    <table width="950" align="center" cellpadding="10" cellspacing="10" >
<tr><td align="center"><b>VIEW BOATS</td></tr>
</table>
<table>
<?php 
$id=$_SESSION['id'];
 include("../connection.php");
$ob=new connection();
$sql="select * from addboat";
$res1=$ob->execute($sql);

while($r=mysqli_fetch_array($res1))
{

		?>
  <tr bgcolor="#6699CC">
    <TD rowspan="5" align="center"><img src="../owner/uploads/<?php echo $r[19];?>" height="200" width="290" ></TD></tr>
    <tr ><TD ><b><font color="#0000FF"><?php echo $r[1];?></td></tr>
	 <tr><TD ><b><font color="#0000FF"><?php echo $r[2];?></td></tr>
	<tr><td><input type="radio" name="radio" value="superb" required><font color="#FF0000"><b>Superb
<input type="radio" name="radio" value="Very good"><font color="#FF0000"><b>Very Good
<input type="radio" name="radio" value="pleasant"><font color="#FF0000"><b>Pleasant
<input type="radio" name="radio" value="Good" ><font color="#FF0000"><b>Good
<input type="radio" name="radio" value="No rating" ><font color="#FF0000"><b>No rating
</td></tr>
	<tr><td ><input type="submit" value="SEND" name="b" style="background-color:#FFCC00;WIDTH:100px " >
 <input type="hidden" value="<?php echo $r[0];?>" name="h">

 
 
    <?php
}
?>

</table>
<br><br>
</form>
<?php
if(isset($_POST['b']))
{


extract($_POST);

		$sql3="insert into review(floginid,boatid,review)values($id,$h,'$radio')";
$res3=$ob->execute($sql3);
if($res3>0)
{
echo "<script>
window.onload=function()
{
alert('successfully added review....!');
window.location='userhome.php';
}
</script>";
}
}
?>
</body>
</html>