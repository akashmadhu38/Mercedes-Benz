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
xmlhttp.open("GET","getroom.php?q="+str,true);
xmlhttp.send();
}
</script>
   </head>
   <body>             
          
          
         
				<form  method="post" name="form1">
.
    <table width="600" align="center" cellpadding="10" cellspacing="20" bgcolor="#FFCCFF">
<tr ><td align="center" colspan="2"><B>SEARCH BY HOUSE BOAT BEDROOMS</B></td></tr>
<tr><td><a href="search.php"><img src="home.png" width="70" height="70"></a></td></tr>

<tr><td align="center" colspan="2">---------------------------------------------------------------------------------------------------------</td></tr>

<TR>
  <td><b>select No.of bedrooms </B></td>
  <td><select name="nbr" onChange="show(this.value)">
    <option value="0">--Select bedroom no--</option>
    <option value="One">One</option>
    <option value="Two">Two</option>
	  <option value="Three">Three</option>
	   <option value="Nil">Nil</option>
	  
	 
	</select></td></tr>
</table>

</form><br><br><br>
<div id="txtHint"></div>
</body>
</html>