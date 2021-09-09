<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
include("../testing.php");
include("../../../db/connection.php");
$obj=new connection();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Car Wash</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Villas Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Oxygen:300,400,700&amp;subset=latin-ext" rel="stylesheet">
	<!-- //Web-Fonts -->
	<script type="text/javascript">
function valid()
{

if(document.form1.cname.value=="")//textbox name=name
{
alert("Enter your company name");
document.form1.cname.focus();
return false;
    }

	

if(document.form1.oname.value=="")//textbox name=name
{
alert("Enter the owner name");
document.form1.oname.focus();
return false;
    }
	if(!(isNaN(document.form1.oname.value)))
{
alert("Only alphabets are allowed");
document.form1.oname.focus();
return false;
}

var nameRegex = /^[a-zA-Z\ ]+$/;
    var validname = document.form1.oname.value.match(nameRegex);
    if(validname == null){
        alert("Your name is not valid. Only characters A-Z, a-z,space are  acceptable.");
        document.form1.oname.focus();
        return false;
    }

if(document.form1.lic.value=="")//textbox name=licence no
{
alert("Enter the license number");
document.form1.lic.focus();
return false;
    }

if(document.form1.address.value=="")//textarea name=address
{
alert("Enter your official address");
document.form1.address.focus();
return false;
}

if(document.form1.dis.value=="0")
{
alert("Select your district");
document.form1.dis.focus();
return false;
}
if(document.form1.place.value=="")//textbox name=licence no
{
alert("Enter your location");
document.form1.place.focus();
return false;
    }
if(!(isNaN(document.form1.place.value)))
{
alert("Only alphabets are allowed");
document.form1.place.focus();
return false;
}

 
	  var emailid=document.form1.email.value;
      var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   
 

if(document.form1.email.value=="")
{
alert("Enter your emailid");
document.form1.email.focus();
return false;
}

 if(reg.test(emailid) == false)
 {
        alert("Please enter a valid Email id");
        document.form1.email.focus();
       return false;
    }


var phone=document.form1.contact.value;
	var regx=/^(\+91)([6789]\d{9})$/;
	if(regx.test(phone)==false)
	{
		alert("enter country code +91,then 10 digit no starting with 6|7|8|9");
		document.form1.contact.focus();
		return false;
	}
	

if(document.form1.uname.value=="")//textbox name=name
{
alert("Enter your user name");
document.form1.uname.focus();
return false;
    }

if(document.form1.psd.value=="")//textbox name=name
{
alert("Enter your password");
document.form1.psd.focus();
return false;
    }
	var val = document.form1.psd.value;
        var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{7,}$/;
  
 if (!regex.test(val)) 
{
   alert("Must contain at least one number and one uppercase and lowercase letter,1 special character and at least 7 or more characters");
   document.form1.psd.focus();
return false;
}
}
</script>

</head>

<body>
	
		<header>
			<div class="container-fluid">
				<div class="header d-md-flex justify-content-between align-items-center py-3 px-xl-5 px-lg-3 px-2">
					<!-- logo -->
					<div id="logo">
						<h1><a href="../home.php">MERCEDES BENZ<img src="../symbol3 - Copy.png" style="position:relative;margin-left:10px;top:-5px; width:40px;"/></a></h1>
					</div>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop" />
							
						</nav>
					</div>
					<!-- //nav -->
				</div>
			</div>
		</header>
		<!-- //header -->

		<!-- banner -->
		<div class="banner_w3lspvt-2">

		</div>
		<!-- //banner -->
	</div>
	<!-- //main banner -->

	<!-- page details -->
	<div class="breadcrumb-mobamu">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="../home.php">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">MECEDES CARWASH BOOKING</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- booking form -->
	<div class="register-w3 py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-bl font-weight-bold">MECEDES CARWASH BOOKING</h3>
			
			<div class="comment-top mt-5">
				<div class="comment-bottom mobamuinfo_mail_grid_right">
					<form method="post" name="form1">
						<div class="row">
							<div class="col-lg-6 form-group">
							<label>Model Name</label>
								<?php


include("../testing.php");


$qu="select * from benzmodel";
$da=mysqli_query($conn,$qu);
$total=mysqli_num_rows($da);

if($total!=0)
{
echo "<select modelID='modelID' name='model' modelName='modelName' onchange='ajaxFunction()'>";
while($result=mysqli_fetch_assoc($da))
{
	
$x="<option value='".$result['modelID']."'>".$result['modelName']."</option>";
echo $x;
}
//<input type="text" name="txtuname" value="<?php echo $_SESSION["email"]; " readonly="true"  >
						
echo "</select>";
}


?>

							</div>
							<div class="col-lg-6 form-group">
								<label>User Name</label>
								<input class="form-control" type="text" name="oname"  value="<?php echo $_SESSION["email"]; ?>" readonly="true"  />
								
							</div>
						</div>
						<div class="row"> 
						
                         <div class="col-lg-6 form-group">
								<label>Date Of Booking</label>
								<input class="form-control" type="date" name="txtdate" >
							</div> 
						
							<div class="col-lg-6 form-group">
								<label>House Name</label>
								<input class="form-control" type="text" name="oname" value="<?php echo $_SESSION["hname"];?>" readonly="true"/ >
								
							</div>
							
							<div class="col-lg-6 form-group">
								<label>Location</label>
								<input class="form-control" type="text" name="oname"  value="<?php echo $_SESSION["location"];?>" readonly="true" />
								
							</div>
							<div class="col-lg-6 form-group">
								<label>Pin</label>
								<input class="form-control" type="text" name="oname" value="<?php echo $_SESSION["pin"];?>" readonly="true"/>
								
							</div>
							 
							<div class="col-lg-6 form-group">
								<label>Time</label>
								<input class="form-control" type="time" name="txttime"  placeholder="Time">
								
							</div>
							<div class="col-lg-6 form-group">
								<label>Mobile Number</label>
								<input class="form-control" type="text" name="oname"  value="<?php echo $_SESSION["mobile"];?>" readonly="true" />
								
							</div>
							
						</div>
						
						
						</div>
						</div>
						
					<input type="submit" name="btnsubmit" value="SUBMIT FORM" id="submit" onClick="return valid()" class="btn submit mt-3"/>
					</form>
				</div>
			</div>
		</div>
	</div>
	
<?php

	if(isset($_POST["btnsubmit"]))
	{
		extract($_POST);
		$_SESSION["amount"]="1000";
		$obj->execute("insert into carwash values(null,'$model','". $_SESSION["email"] ."','$txttime', '$txtdate')");
		
		$mname="";
		$res=$obj->execute("select modelName from benzmodel where modelID='$model'");
		if($row=mysqli_fetch_array($res))
		{
			$mname=$row["modelName"];
		}
		$res=$obj->execute("select max(cwid) as cwid from carwash where uname='". $_SESSION["email"] ."'");
	if($row=mysqli_fetch_array($res))
	{
		$_SESSION["cwid"]=$row["cwid"];
	}	
		$msg="Your Car Wash Booking for the vehicle '$mname' will be washed on '$txtdate' at '$txttime'";
		SendEmail($msg);
		$obj->redirect("bill/bill_w.php");
		//echo $obj->msg("Paint Booking Completed Successfully");
		//$obj->redirect("../banking/user/userhome.php");
	}
	
			function SendEmail($msg)
			{
				$_SESSION["subject"]="MERECEDES BENZ";
				$_SESSION["message"]=$msg;
				include("mail.php");
			}

?>

<script>

function showusername(s)
{


var nameRegex = /^[a-zA-Z0-9\_]+$/;
    var validUsername = document.form1.uname.value.match(nameRegex);
    if(validUsername == null){
        alert("Your username is not valid. Only characters A-Z, a-z,0-9 and '_' are  acceptable.");
        document.form1.uname.focus();
        return false;
    }

//var s=document.form1.t1.value;
//alert(s);
if (s.length==0)
  { 
  document.getElementById("show").innerHTML="";
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
    document.getElementById("show").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","checkusernamepro.php?q="+s,true);
xmlhttp.send();
}
	</script>	
	<!-- //booking form -->

	<!-- footer -->
		<footer class="py-5">
		<div class="container pt-xl-4">
			<div class="row footer-top">
				<div class="col-lg-4 col-md-6 footer-grid_section_1its">
					<h2 class="logo-2 mb-lg-4 mb-3">
						<a href="index.html" class="text-uppercase text-wh">Aqua Tourism</a>
					</h2>
					<!-- Map -->
					<div class="map-fo">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3048.5130900428026!2d44.506621715459396!3d40.17539347939393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abcf86e940951%3A0x87a1923d7df42367!2sBest+Western+Congress+Hotel!5e0!3m2!1sen!2sin!4v1509605601510"></iframe>
					</div>
					<!-- //Map -->
				</div>
				<div class="col-lg-2 col-md-6 footer-grid_section_1its mt-md-0 mt-4">
					<h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Links</h3>
					<ul class="list-unstyled">
						<li class="mb-3">
						<a href="../home.php">Home</a>
						</li>
					
					</ul>
				</div>
				<div class="col-lg-3 col-md-6 footer-grid_section_1its mt-lg-0 mt-4">
					<h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Contact Info</h3>
					<div class="contact-info">
						<div class="footer-style-w3ls mb-4">
							<h4 class="text-li mb-2">Phone</h4>
							<p>+121 098 8907 9987</p>
						</div>
						<div class="footer-style-w3ls mb-4">
							<h4 class="text-li mb-2">Email </h4>
							<p><a href="mailto:info@example.com">mercedesbenz@gmail.com</a></p>
						</div>
						<div class="footer-style-w3ls mb-4">
							<h4 class="text-li mb-2">Location</h4>
							<p>Avenue Motors,Kakkanad</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-grid_section_1its mt-lg-0 mt-4">
					<!-- social icons -->
					
						
					<!-- social icons -->
				</div>
			</div>
		</div>
	</footer>
	<!-- //footer -->
	

</body>

</html>