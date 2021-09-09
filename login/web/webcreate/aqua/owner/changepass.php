<?php
session_start();
if(!isset($_SESSION['uname'])) { //if not yet logged in
   header("Location: ../login.php");// send to login page
  } 

include("header.php");

?><!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	
-->



<!DOCTYPE html>
<html>

<!-- Head -->
<head>

	<title></title>

	<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="Collective UI Kit Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="text/javascript">
function valid()
{

if(document.form.npw.value=="")//textbox name=name
{
alert("enter your password");
document.form.npw.focus();
return false;
    }
	
	var val = document.form.npw.value;
        var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{7,}$/;
  
 if (!regex.test(val)) 
{
   alert("Must contain at least one number and one uppercase and lowercase letter,1 special character and at least 7 or more characters");
   document.form.npw.focus();
return false;
}

if(document.form.cpw.value=="")//textbox name=name
{
alert("enter confirm password");
document.form.cpw.focus();
return false;
    }
if((document.form.npw.value)!=(document.form.cpw.value))
{
alert("enter same password");
document.form.cpw.focus();
return false;
    }
}
</script>

</head>
<!-- //Head -->



	<!-- Body -->
	<body>

					     
       
           <form method="post" name="form">
				
					
                    
<table align="center"  cellpadding="20" cellspacing="20" height="300">
<tr><td colspan="2" align="center"><b><font color="#FF0000">CHANGE PASSWORD</td></tr><TR>
<td> <b><font color="#FFFF00">Enter New Password </td>
<td><input type="password" name="npw" required placeholder="Enter new password" size="100" style="height:40px "></td>
</tr>
<tr>
<td><b><font color="#FFFF00">Confirm Password </td>
<td><input type="password" name="cpw" required placeholder=" Enter again new password" size="100" style="height:40px "></td>
</tr><tr><td colspan="2" align="center"><input type="submit" name="b" value="Change password" onClick="return valid()" style="background-color:#FF9900;width:150px;height:45px ">
                    </td></tr>
</table>

        
				
</form> 
							<?php
if(isset($_POST['b']))
{

$id=$_SESSION['id'];

extract($_POST);
$cpw=$_POST["cpw"];
$npw=$_POST["npw"];


include("../connection.php");
$ob=new connection();
	$sql="update login set password='$npw' where loginid=$id";
	$res3=$ob->execute($sql);
	if($res3>0)
{
echo "<script>
window.onload=function()
{
alert('successfully  updated your password.....!');
window.location='home.php';
}
</script>";
}
}
	
?>
			
	</body>
	<!-- //Body -->



</html>