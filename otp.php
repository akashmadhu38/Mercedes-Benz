<?php
	include("../../db/connection.php");
	$obj=new connection();
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Voting</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Home Loan Application Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/jquery-ui.css" />
<!-- //css files -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=GFS+Neohellenic:400,400i,700,700i&amp;subset=greek" rel="stylesheet">
<!-- //web-fonts -->
<script type="text/javascript" src="ajax.js"></script>
<script type="text/javascript" src="../../validation/validation.js"></script>

</head>
<body>
	<div class="center-container">
		<!--header-->
		<div class="header-w3l">
			<h1>OTP</h1>
		</div>
		<!--//header-->
		<!--main-->
	<div class="agileits-register">
		<form name="form1" method="post">
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>OTP :</span>
					<input name="otp" type="password" maxlength="15" placeholder="Enter OTP" required="" />
					<div class="clear"> </div>
				</div>
				
				<div class="w3_modal_body_grid">
				
				<input type="submit" name="btnsubmit" value="Login" />
				<div class="clear"></div>
			</form>
			<br/>
			<br/>
			<a href="../index.php" style="color:#FFCC00;font-weight:bold;">BACK TO HOME</a>
		</div> 
<?php
	
	if(isset($_POST["btnsubmit"]))
	{
		$txtotp=$_POST["otp"];
		$otp=$_SESSION["otp"];
		if($txtotp==$otp)
		{
			$obj->redirect("../../user/userhome.php");
		}
		else
		{
			echo $obj->msg("Invalid OTP");
		}	
	}

?>
		<!--//main-->
		
	</div>
	<!--footer-->
		<div class="footer">
			<h2>&copy; 2019 Online Voting. All rights reserved | Design by <a href="#">Sujith and Sarath</a></h2>
		</div>
		<!--//footer-->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- Calendar -->
<script src="js/jquery-ui.js"></script>
	<script>
	  $(function() {
		$( "#datepicker" ).datepicker();
	 });
	</script>
<!-- //Calendar -->		

</body>
</html>