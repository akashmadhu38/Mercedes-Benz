<?php
session_start();
if(!isset($_SESSION['uname'])) { //if not yet logged in
   header("Location: ../login.php");// send to login page
  } 
include("header.php");
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
    <table width="950" align="center" cellpadding="10" cellspacing="20">
<tr><td align="center"><H3>VIEW  ALL AVAILABLE BOATS</td></tr>
<tr><td><a href="userhome.php"><img src="home.png" width="70" height="70"></a></td></tr>


<tr><td align="center" colspan="2">----------------------------------------------------
------------------------------------------------------------------------------------------------------</td></tr>

<tr><td><p id="txtHint"></p></td></tr></table>
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
    <TD rowspan="4" align="center"><img src="../owner/uploads/<?php echo $r[19];?>" height="200" width="290" ></TD></tr>
    <tr ><TD ><b><font color="#0000FF"><?php echo $r[1];?></td></tr>
	 <tr><TD ><b><font color="#0000FF"><?php echo $r[2];?></td></tr>
	
	<tr><td >
 <a href="viewboatmore.php?id=<?php echo $r[0];?>"><font color="#FF0000">View more...</font></a></td></tr>
 

 
 
    <?php
}
?>
</table>

</form>

</body>
</html>