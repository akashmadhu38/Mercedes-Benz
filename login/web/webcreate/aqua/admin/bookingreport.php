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
<script language="javascript" src="prototype.js">
</script>
<script>
function sh()
{ 
 	new Ajax.Request("checkall.php",
	{
	method: 'post',
	postBody: 'first='+ $F('f')+'&second='+$F('s'),
	onComplete: showResponse
	});
}
function showResponse(req)
{
	$('show').innerHTML=req.responseText;
}
</script>	
   </head>
   <body>             
          
<form>
    <table align="center" width="550">
  <tr  bgcolor="#6699FF" height="40" ><td colspan="2" align="center"><b>Report</td></tr><tr>
    <td rowspan="2"><img src="icons/b.jpg" width="150" height="150"></td><td>From date<input type="date" name="f" id="f" required></td>
	
    </tr> 
<tr><td>To date<input type="date" name="s" id="s" required></td></tr>	

 <tr><td><td><input type="button" value="View Report" style="background-color:#FFCCFF;width:200px;height:40px" onclick="sh()">
</td></tr>
</table>

<div id="show"></div>
<?php
include("footer.php");
?>

</body>
</html>