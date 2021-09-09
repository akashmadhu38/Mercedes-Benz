<?php
session_start();
if(!isset($_SESSION['uname'])) { //if not yet logged in
   header("Location: ../login.php");// send to login page
  } ?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Finance In a Banking Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Finance In Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="header">
			<div class="container">
				<div class="header-left">
					<div class="w3layouts-logo">
						<h1>
							<a href="index.html">Houseboats.com</a>
						</h1>
					</div>
					<div class="agileinfo-phone">
						
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="top-nav">
						<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><a href="../logout.php"><img src="icons/log.jpg" width="60" height="60"></a>
								<ul class="nav navbar-nav">
									<li><a class="active" href="home.php">Home</a></li>
									<li><a href="payment.php">Payments</a></li>
									<li><a href="viewreview.php">Reviews</a></li>
<li><a href="booking.php">Bookings</a></li>
<li class="dropdown">
										<a href="" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Packages <b class="caret"></b>
										<ul class="dropdown-menu">
											<li><a href="addplan.php"> Add a plan</a></li>
											<li><a href="viewappplan.php">Approved plans</a></li>
<li><a href="viewplan.php">Admin Plans</a></li>
										</ul>
									</li>



									<li class="dropdown">
										<a href="" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">House Boats <b class="caret"></b>
										<ul class="dropdown-menu">
											<li><a href="addboat.php"> Register a boat</a></li>
											<li><a href="viewboat.php">View Boats</a></li>
										</ul>
									</li>
									<li><a href="changepass.php">Settings</a></li>
								</ul>	
								<div class="clearfix"> </div>
							</div>	
						</nav>		
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="banner-info">
			<div class="container">
				<div class="w3-banner-info">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider4">
								<li>
									<div class="w3layouts-banner-info">
										<font color="#99FF00" size="+6">House Boat Special Packages</font>
										<p>Boat companies provide special packages for tourists</p>
										
									</div>
								</li>
								<li>
									<div class="w3layouts-banner-info">
										
										
									</div>
								</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
									<script>
										// You can also use "$(window).load(function() {"
										$(function () {
										  // Slideshow 4
										  $("#slider4").responsiveSlides({
											auto: true,
											pager:true,
											nav:false,
											speed: 400,
											namespace: "callbacks",
											before: function () {
											  $('.events').append("<li>before event fired.</li>");
											},
											after: function () {
											  $('.events').append("<li>after event fired.</li>");
											}
										  });
									
										});
									 </script>
									<!--banner Slider starts Here-->
					</div>
				</div>
				<div class="agileinfo-social-grids">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-rss"></i></a></li>
						<li><a href="#"><i class="fa fa-vk"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<div class="agileits-heading">
				<h4>Welcome <?php echo $_SESSION['uname'];?>...</h4>
			</div>  
			<div class="w3lcome-grids">
				<div class="welcome-agile-row">
					<div class="col-md-6 welcome-grid">
						<div class="welcome-grid-right">
							<img src="images/2.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="welcome-grid-left">
							<h4>Payments</h4>
							<p>Companies receive payments very fast and effectively.</p>
						</div> 
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 welcome-grid">
						<div class="welcome-grid-right agileinfo-welcm-grid">
							<img src="icons/se.jpg"  alt=" " class="img-responsive" />
						</div>
						<div class="welcome-grid-left agileinfo-welcm-grid2">
							<h4>Search option</h4>
							<p>companies can search a boat fast.</p>
						</div> 
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="welcome-agile-row2">
					<div class="col-md-6 welcome-grid">
						<div class="welcome-grid-right">
							<img src="icons/reg.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="welcome-grid-left">
							<h4>Boat registration</h4>
							<p>Companies can register their own boat with all facilities.</p>
						</div> 
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 welcome-grid">
						<div class="welcome-grid-right agileinfo-welcm-grid">
							<img src="icons/de.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="welcome-grid-left agileinfo-welcm-grid2">
							<h4>Delete</h4>
							<p>Companies can delete or edit their own boats.</p>
						</div> 
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //welcome --> 
	<!-- services -->
	<div class="services">
		<div class="container">
			<div class="agileits-heading">
				<h3>Services</h3>
			</div>
			<div class="agileinfo-services-grids">
				<div class="services-top-grids">
					<div class="col-md-3 wthree-services-grid">
						<i class="fa fa-money" aria-hidden="true"></i>
						<h4><a href="addboat.php">Register a boat</a></h4>
						<p>Registration of a new boat</p>
					</div>
					<div class="col-md-3 wthree-services-grid">
						<i class="fa fa-credit-card" aria-hidden="true"></i>
						<h4><a href="viewboat.php">View all boats</a></h4>
						<p>Here view all boats that are registered</p>
					</div>
					<div class="col-md-3 wthree-services-grid">
						<i class="fa fa-cc-paypal" aria-hidden="true"></i>
						<h4><a href="addplan.php">Add a plan</a></h4>
						<p>Here add a new package with all details.</p>
					</div>
					<div class="col-md-3 wthree-services-grid">
						<i class="fa fa-cc-stripe" aria-hidden="true"></i>
						<h4><a href="viewappplan.php">Approved plans</a></h4>
						<p>Here view all plans that are approved by administrator.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="services-bottom-grids">
					<div class="col-md-3 wthree-services-grid">
						<i class="fa fa-user" aria-hidden="true"></i>
						<h4><a href="payment.php">Payments</a></h4>
						<p>Here view all payment transactions.</p>
					</div>
					<div class="col-md-3 wthree-services-grid">
						<i class="fa fa-thumbs-up" aria-hidden="true"></i>
						<h4><a href="viewreview.php">Reviews</a></h4>
						<p>Here can read all reviews regarding boats.</p>
					</div>
					<div class="col-md-3 wthree-services-grid">
						<i class="fa fa-asterisk" aria-hidden="true"></i>
						<h4><a href="viewplan.php">Admin plans</a></h4>
						<p>Here view all plans that are added by administrator.</p>
					</div>
					<div class="col-md-3 wthree-services-grid">
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<h4><a href="changepass.php">Settings</a></h4>
						<p>Here change basic settings like change password.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //services -->
	<!-- testimonial -->
	
	<!-- //here ends scrolling icon -->
</body>	
</html>