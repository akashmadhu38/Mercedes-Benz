<?php
session_start();
if(!isset($_SESSION['uname'])) { //if not yet logged in
   header("Location: ../login.php");// send to login page
  } ?>
             <!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->



<!DOCTYPE html>
<html>

<!-- Head -->
<head>

	<title>waste management layout</title>

	<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="Collective UI Kit Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //Meta-Tags -->

	<!-- Custom-Stylesheet-Links -->
		<link rel="stylesheet" href="css/style.css" 														type="text/css" media="all">
		<link rel="stylesheet" href="css/clndr.css" 														type="text/css" media="all">
		<link rel="stylesheet" href="css/acornmediaplayer.base.css" 										type="text/css" media="all">
		<link rel="stylesheet" href="acornmediaplayer/acorn.access.css" 									type="text/css" media="all">
		<link rel="stylesheet" href="css/audio.css" 														type="text/css" media="all">
		<link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" 		type="text/css" media="all">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" 	type="text/css" media="all">
	<!-- //Custom-Stylesheet-Links -->

	<!-- Web-Fonts -->
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800" 		type="text/css" media="all">
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" 			type="text/css" media="all">
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,900,700,500,300,100" 	type="text/css" media="all">
	<!-- //Web-Fonts -->

	<!-- Time-JavaScript -->
		<script>
			function startTime() {
				var today = new Date();
				var h = today.getHours();
				var m = today.getMinutes();
				var s = today.getSeconds();
				m = checkTime(m);
				s = checkTime(s);
				document.getElementById('txt').innerHTML = h + ":" + m + ":" + s;
				var t = setTimeout(startTime, 500);
			}
			function checkTime(i) {
				if (i < 10) {i = "0" + i};
				return i;
			}
		</script>
	<!-- //Time-JavaScript -->

	<!-- Chart -->
		<script src="js/Chart.js"></script>
	<!-- //Chart -->

    <style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style2 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #FFFFFF; }
.style3 {
	color: #FFFFFF;
	font-weight: bold;
}
.style4 {color: #80FF80}
-->
    </style>
</head>
<!-- //Head -->



	<!-- Body -->
	<body onLoad="startTime()" background="images/Event272243214Img.jpg">

		<blockquote>
		  <blockquote> 
		    <h1 class="style2">	CLEAN INDIA </h1>
		    <h1 class="style1 style4">ONLINE WASTE MANAGEMENT PROGRAMME</h1>
          	<!-- Slider -->
		  <!-- //Slider -->
              <!-- Sliding-Menu-Navbar -->
		  <section class="ccblue agileits w3layouts">
				<div class="mainmenu agileits w3layouts">
					<ul>
						<li><i class="icon-home icon-large aits agileits"></i>&nbsp;<main><a href="userhome.php">HOME</a></main></li>
						<li><i class="icon-user icon-large w3l w3layouts"></i>&nbsp;<main><a href="newreq.php">SEND REQUEST</a></main></li>
						<li><i class="icon-user icon-large w3l w3layouts"></i>&nbsp;<main><a href="mail.php">MAILBOX</a></li>
						<li><i class="icon-user icon-large w3l w3layouts"></i>&nbsp;<main><a href="editprofile.php">EDIT PROFILE</a></li>
                    	<li><i class="icon-user icon-large w3l w3layouts"></i>&nbsp;<main><a href="changepass.php">CHANGE PASSWORD</a></li>
                  		 <li><i class="icon-user icon-large w3l w3layouts"></i>&nbsp;<main><a href="../logout.php">LOGOUT</a><br>
                    </ul>
		       </div>
	    </section>
			<!-- //Sliding-Menu-Navbar -->

		    <p class="style1 style4">&nbsp;</p>
		  </blockquote>
	</blockquote>
<!-- Wrap -->
		<div class="wrap agileits w3layouts">
<!-- Dropdown-Menu-Navbar -->
					<div class="dropdown-menu agileits w3layouts">
						
        
          
          
      
           <form action="editprofilepro.php" method="post" name="form1" enctype="multipart/form-data">
.
    <table align="center" width="750" border="0" cellpadding="10" cellspacing="20" bgcolor="#66CC66" height="500">
  <tr>
    <th height="40" colspan="4" scope="row">EDIT PROFILE </th>
	
    </tr> <?php
	$id=$_SESSION['lid'];
   $con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"waste");
$sql="select * from userreg where loginid=$id";
$res=mysqli_query($con,$sql);
$r=mysqli_fetch_array($res);
?>
  <tr>
    <td>PersonName</td>
    <td><input type="text" name="name" id="name" placeholder="Your name" value="<?php echo $r[1];?>"/></td>
	<td>Address</td>
    <td><textarea name="address" placeholder="Your address"><?php echo $r[2];?>
	
	</textarea> </td>
	
    </tr>
    

   
     <td>District</td>
    <td><select name="dis" value="<?php echo $r[3];?>">
    <option value="0">--Select--</option>
	
	
	<?php 
		 $con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"waste");

 $s="select * from district";
$res12=mysqli_query($con,$s);
while($r12=mysqli_fetch_array($res12))
{
?>
	
    <option value="<?php echo $r12[1];?>"><?php echo $r12[1];?></option>
    <?php
	}
	?>
	</select>
	
</td>
<td>Municipality</td>
    <td><select name="muni" required>
    <option value="0">--Select--</option>
	
	
	<?php 
		 $con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"waste");

 $s1="select * from munireg";
$re1=mysqli_query($con,$s1);
while($re=mysqli_fetch_array($re1))
{
?>
	
    <option value="<?php echo $re[1];?>"><?php echo $re[1];?></option>
    <?php
	}
	?>
	</select>
</td></tr><tr>
  <td>Landmark</td>
    <td><input type="text" name="land"  placeholder="Your place" value="<?php echo $r[8];?>"/></td>
  
   
	<td>Email id
</td><td><input name="email" type="text" placeholder="Your email" value="<?php echo $r[5];?>"></td></tr>


  <td>Contact Number</td><td><input name="contact" type="text" placeholder="Your contact no" value="<?php echo $r[6];?>"></td></tr><tr> 
  
	
	
	
	
	
	
<tr><td>


   <input type="submit" value="UPDATE"   id="submit" onClick="return validate()"/></td>
 <td> <input type="reset" value="RESET"   id="submit"/></td>
 

 
    </tr>
    
</table>

</form>

		
          

                
          
          
         
				


				  </div>
	        <!-- //Dropdown-Menu-Navbar -->
 <!-- slide imgs -->
 <!--//slide imgs -->
		  <!-- Vertical-Grids -->
<div class="vertical-grids agileits w3layouts">

				<!-- Vertical-Grid-1 -->
				<!-- //Vertical-Grid-2 -->
<div class="clear"></div>

		  </div>
	    <!-- //Vertical-Grids -->



			<!-- Pricing -->
			<div class="pricing agileits w3layouts" id="pricing">
				<div class="container agileits w3layouts">

					<div class="pricing-grids agileits w3layouts">
					  <div class="clear"></div>

						<!-- Popup-Box -->
						<div id="popup">
							<div id="small-dialog" class="mfp-hide agileits w3layouts">
								<div class="pop_up agileits w3layouts">
									<div class="payment-online-form-left agileits w3layouts">
										<form>
											<h4><span class="shipping agileits w3layouts"> </span>Customer Details</h4>
											<ul>
												<li><input class="text-box-dark agileits w3layouts" type="text" value="First Name" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'First Name';}"></li>
												<li><input class="text-box-dark agileits w3layouts" type="text" value="Last Name" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Last Name';}"></li>
											</ul>
											<ul>
												<li><input class="text-box-dark agileits w3layouts" type="text" value="Email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Email';}"></li>
												<li><input class="text-box-dark agileits w3layouts" type="text" value="Phone" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Phone';}"></li>
											</ul>
											<div class="clear"></div>
											<h4 class="paymenthead agileits w3layouts"><span class="agileits w3layouts"></span>Payment Details</h4>
											<div class="clear"></div>
											<ul class="payment-type agileits w3layouts">
												<li><span class="col_checkbox agileits w3layouts">
														<input id="3" class="css-checkbox1 aits" type="checkbox">
														<label for="3" class="css-label1 w3l"></label>
														<a class="visa agileits w3layouts" href="#"></a>
													</span>
												</li>
												<li>
													<span class="col_checkbox agileits w3layouts">
														<input id="4" class="css-checkbox2 agileits w3layouts" type="checkbox">
														<label for="4" class="css-label2 w3l"></label>
														<a class="paypal agileits w3layouts" href="#"></a>
													</span>
												</li>
											</ul>
											<ul>
												<li><input class="text-box-dark agileits w3layouts" type="text" value="Card Number" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Card Number';}"></li>
												<li><input class="text-box-dark agileits w3layouts" type="text" value="Name on card" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Name on card';}"></li>
											</ul>
											<ul>
												<li><input class="text-box-light hasDatepicker agileits w3layouts" type="text" id="datepicker" value="Expiration Date" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Expiration Date';}"><em class="pay-date"> </em></li>
												<li><input class="text-box-dark agileits w3layouts" type="text" value="Security Code" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Security Code';}"></li>
											</ul>
											<ul class="payment-sendbtns aits w3ls">
												<li><input type="reset" value="Reset"></li>
												<li><a href="#" class="order agileits w3layouts">Process order</a></li>
											</ul>
											<div class="clear"></div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<button title="Close (Esc)" type="button" class="mfp-close agileits w3layouts">×</button>
						<!-- //Popup-Box -->

					</div>

			  </div>
			</div>
			<!-- //Pricing -->

		</div>
<!-- //Wrap -->



		<!-- Copyright -->
		<div class="copyright agileits w3layouts">
			<p> &copy; 2017 Online Programs India. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank"> W3layouts </a></p>
	</div>
		<!-- //Copyright -->



		<!-- Custom-JavaScript-File-Links -->

			<!-- Default-JavaScript --> <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

			<!-- Slider-JavaScript -->
				<script src="js/responsiveslides.min.js"></script>
				<script>
					$(function () {
						$("#slider, #slider2").responsiveSlides({
							auto: true,
							nav: true,
							speed: 1500,
							namespace: "callbacks",
							pager: true,
						});
					});
				</script>
			<!-- //Slider-JavaScript -->

			<!-- Icon-Navbar-JavaScript -->
				<script type="text/javascript">
					$(window).load(function() {
						$('a.btn').click(function() {
							$(this).toggleClass("active");
						});
					});
				</script>
			<!-- //Icon-Navbar-JavaScript -->

			<!-- File-Upload-Widget-JavaScript -->
				<!-- JavaScript-Includes -->
				<script src="js/jquery.knob.js"></script>
				<!-- JavaScript Includes -->

				<!-- jQuery-File-Upload-Dependencies -->
				<script src="js/jquery.ui.widget.js"></script>
				<script src="js/jquery.iframe-transport.js"></script>
				<script src="js/jquery.fileupload.js"></script>
				<!-- //jQuery-File-Upload-Dependencies -->

				<!-- Main JavaScript file -->
					<script src="js/script.js"></script>
				<!-- Main JavaScript file -->
			<!-- //File-Upload-Widget-JavaScript -->

			<!-- Weather-Widget-JavaScript -->
				<script src="js/skycons.js"></script>
				<script>
					var icons = new Skycons({"color": "#FFD700"}),
					list  = [
						"clear-day"
					],
					i;
					for(i = list.length; i--; )
					icons.set(list[i], list[i]);
					icons.play();
				</script>
				<script>
					var icons = new Skycons({"color": "#f5f5f5"}),
					list = [
						"clear-night", "partly-cloudy-day",	"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind", "fog"
					],
					i;
					for(i = list.length; i--; )
					icons.set(list[i], list[i]);
					icons.play();
				</script>
			<!--//Weather-Widget-JavaScript -->

			<!-- Pricing-Popup-Box-JavaScript -->
				<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
				<script>
					$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
					});
				</script>
			<!-- //Pricing-Popup-Box-JavaScript -->

			<!-- Calender-JavaScript -->
				<script src="js/underscore-min.js"></script>
				<script src= "js/moment-2.2.1.js"></script>
				<script src="js/clndr.js"></script>
				<script src="js/site.js"></script>
			<!-- //Calender-JavaScript -->

			<!-- Horizontal-Tabs-JavaScript -->
				<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab').easyResponsiveTabs({
						type: 'default',
						width: 'auto',
						fit: true,
					});
				});
				</script>
			<!-- //Horizontal-Tabs-JavaScript -->

			<!-- Tabs-JavaScript --> <script src="js/tabs.js"></script>

			<!-- Vertical-Accordion-JavaScript -->
				<script type="text/javascript">
					function DropDown(el) {
						this.dd = el;
						this.initEvents();
					}
					DropDown.prototype = {
						initEvents : function() {
							var obj = this;
							obj.dd.on('click', function(event){
								$(this).toggleClass('active');
								event.stopPropagation();
							});	
						}
					}
					$(function() {
						var dd = new DropDown( $('#dd1') );
						$(document).click(function() {
							$('.wrapper-dropdown-1').removeClass('active');
						});
					});
				</script>
			<!-- //Vertical-Accordion-JavaScript -->

			<!-- Video-Player-JavaScript -->
				<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
				<script src="js/modernizr.custom.js"></script>
				<script src="js/jquery.acornmediaplayer.js"></script>
				<!-- Call the plugin -->
				<script>
					jQuery(function() {
						jQuery('video, audio').acornMediaPlayer();
					});
				</script>
			<!-- //Video-Player-JavaScript -->

			<!-- Map-JavaScript -->
				<script src="js/jquery.vmap.js" type="text/javascript"></script>
				<script src="js/jquery.vmap.usa.js" type="text/javascript"></script>
				<script type="text/javascript">
					jQuery(document).ready(function() {
						jQuery('#vmap').vectorMap({
							map: 'usa_en',
							enableZoom: true,
							showTooltip: true,
							selectedRegion: 'AK',
						});
					});
				</script>
			<!-- //Map-JavaScript -->

			<!-- Slide-To-Top JavaScript -->
				<script type="text/javascript">
					$(document).ready(function() {
						var defaults = {
							containerID: 'toTop',
							containerHoverID: 'toTopHover',
							scrollSpeed: 100,
							easingType: 'linear',
						};
						$().UItoTop({ easingType: 'easeOutQuart' });
					});
				</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
			<!-- //Slide-To-Top JavaScript -->

			<!-- Smooth-Scrolling-JavaScript -->
				<script type="text/javascript" src="js/move-top.js"></script>
				<script type="text/javascript" src="js/easing.js"></script>
				<script type="text/javascript">
						jQuery(document).ready(function($) {
							$(".scroll, .navbar li a, .footer li a").click(function(event){
								$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
							});
						});
				</script>
			<!-- //Smooth-Scrolling-JavaScript -->

		<!-- //Custom-JavaScript-File-Links -->

	</body>
	<!-- //Body -->



</html>