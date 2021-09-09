<?php
session_start();
if(!isset($_SESSION['uname'])) { //if not yet logged in
   header("Location: ../login.php");// send to login page
  } ?><!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>House Boat.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Yacht Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="applijegleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600,800,300italic,400italic|Lato:400,700,400italic' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<script src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
</head>
<body>
<!--start-home-->
		<div class="banner" id="home">
			<div class="header-top">
				<div class="container">	
					<!--top-nav-->
					 <div class="logo">
							  <a href="index.html"><h1>House Boat</h1></a>
						  </div>
					<span class="menu"> </span>
					<div class="top-menu">
						<nav>











							<ul class="cl-effect-16">
								<li><a class="active scroll" href="#home" data-hover="Home">Home</a></li>
								<li><a class="scroll" href="#about" data-hover="About">About</a></li>
								<li><a class="scroll" href="#service" data-hover="Services">Services</a></li>
								<li><a class="scroll" href="#team" data-hover="Popular Boats">Popular Boats</a></li>
							    <li><a class="scroll" href="#gallery" data-hover="Gallery">Gallery</a></li>
								<li><a class="scroll" href="#test" data-hover="Testimonials">Testimonials</a></li>
						        <li><a class="scroll" href="#contact" data-hover="Contact">Contact</a></li>
<a href="../logout.php"><img src="icons/rty.jpg" width="100" height="40"></a>								
<div class="clearfix"></div>
							</ul>
						</nav>		
					</div>

				<!-- script-for-menu -->
								<script>
									$("span.menu").click(function(){
										$(".top-menu ul").slideToggle("slow" , function(){
										});
									});
								</script>
								<!-- script-for-menu -->

				 <div class="clearfix"></div>
			  </div>
		   </div>
			<!-- script-for-menu -->
			  <div class="container">
			       <div class="banner-info">
							 <div class="col-md-6 banner-slider">
							   <div  id="top" class="callbacks_container">
								<ul class="rslides" id="slider4">
								<li>
								  <div class="banner-info two">
									 <h3>Enjoy a New Houseboat</h3>
									 <h4>Discover New Places ...!</h4>
								  </div>
								</li>
								  <div class="banner-info two">
								   <h3>Enjoy a New Trip</h3> 
								   <h4>Memorable Experience ...!</h4>		 
								 </div>
								<li>
								  <div class="banner-info two">
									 <h3>Enjoy a New Houseboat</h3>
									 <h4>Discover New Places ...!</h4>
								  </div>
								</li>
							</ul>
						 </div>
					   </div>
					  <div class="col-md-6 banner-pic">
					   <img class="img-responsive " src="images/ship.png" alt="" />  
					 </div>
							<div class="clearfix"></div>
					</div>
					<!--banner-slide-->
					<script src="js/responsiveslides.min.js"></script>
				   <script>
					// You can also use "$(window).load(function() {"
					$(function () {
					  // Slideshow 4
					  $("#slider4").responsiveSlides({
						destination: true,
						pager: true,
						nav: true,
						speed: 500,
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
			 <!--//banner-slide-->

		    </div>
		  </div>
		<!--//banner-->
		<!--welcome-->
		<div class="welcome" id="about">
		   <div class="container">
		      <div class="wel-top">
			    <h2>Welcome to our House boats</h2>
			    <img src="photos/bal.jpg" width="300" height="200" alt="" />
				<p>This site is an effective tool for booking a house boat. 
This has been developed keeping in mind the problems and limitations faced by clients to search for a good house boat package.
This site is very helpful for tourists to search a boat.
</p>
			  </div>
		  </div>
		</div>
		<!--//welcome-->
		<!--//services-->
		<div class="services" id="service">
	   <div class="container">
	   <h3 class="tittle">Our Services</h3>
		<div class="banner-bottom-info two">
			<div class="col-md-3 b-grids">
				 <div class="icon">
			       <i class="glyphicon glyphicon-time"> </i>
				 </div>
					 <div class="album-box">
				  <a href="search.php"><h4>Search</h4></a>
				     <p>We are glad to welcome you in our site.Search option gives you an opportunity to view all boats according to your choice</p>
				 </div>
			</div>
			<div class="col-md-3 b-grids">
			     <div class="icon">
			      <i class="glyphicon glyphicon-cog"> </i>
				 </div>
			     <div class="album-box">
				 <a href="viewboat.php"> <h4>View all Boats</h4></a>
				     <p>We are glad to welcome you in our site.this link is for view all registered boats.</p>
				 </div>
			</div>
			<div class="col-md-3 b-grids">
			      <div class="icon">
			        <i class="glyphicon glyphicon-user"> </i>
				   </div>
			       <div class="album-box">
				    <a href="viewplan.php"><h4>View Packages</h4></a>
				     <p>This option is for view all available packages that are provided by the various houseboat companies.</p>
				 </div>
			</div>
			<div class="col-md-3 b-grids lost">
			    <div class="icon">
			      <i class="glyphicon glyphicon-gift"> </i>
				 </div>
			     <div class="album-box">
				 <a href="viewboat1.php"> <h4>Add a Review</h4></a>
				     <p>This option is for add a review to a boat.Ratings are done by based on this review.</p>
				 </div>


			<div class="clearfix"></div>
		</div><div class="col-md-3 b-grids">
				 <div class="icon">
			       <i class="glyphicon glyphicon-time"> </i>
				 </div>
					 <div class="album-box">
				  <a href="myprofile.php"><h4>My Profile</h4></a>
				     <p>This link is used for view your own profile</p>
				 </div>
			</div>
			<div class="col-md-3 b-grids">
			     <div class="icon">
			      <i class="glyphicon glyphicon-cog"> </i>
				 </div>
			     <div class="album-box">
				 <a href="complaint.php"> <h4>Complaint box</h4></a>
				     <p>This lonk is used for send a feedback form or complaint against boat companies or site.</p>
				 </div>
			</div>
			<div class="col-md-3 b-grids">
			      <div class="icon">
			        <i class="glyphicon glyphicon-user"> </i>
				   </div>
			       <div class="album-box">
				    <a href="changepass.php"><h4>Settings</h4></a>
				     <p>This option is for view all available packages that are provided by the various houseboat companies.</p>
				 </div>
			</div>
			<div class="col-md-3 b-grids lost">
			    <div class="icon">
			      <i class="glyphicon glyphicon-gift"> </i>
				 </div>
			     <div class="album-box">
				 <a href="../logout.php"> <h4>End Tour</h4></a>
				     <p>This option is for stop the search tour.,and logout for a while.</p>
				 </div>
     </div>
    </div>
	<!--destination-starts-->
	<div class="destination" id="destination">
	     <h3 class="tittle two">Destinations</h3>
		<div class="destination-1">
			<div class="col-md-4 destination-left">
				<img src="images/d1.jpg" alt="">
				<div class="tool">
					<a class="tooltips" href="#">
					<span></span></a>
				</div>
			</div>
			<div class="col-md-4 destination-left destination-middle">
				<h4>Destination1</h4>
				<p>Kumarakom</p>
			</div>
			<div class="col-md-4 destination-left destination-right">
				<img src="images/d3.jpg" alt="">
				<div class="tool-1">
					<a class="tooltips-1" href="#">
					<span></span></a>
				</div>
			</div>
			<div class="clearfix"></div>	
		</div>
		<div class="destination-1">
			<div class="col-md-4 destination-left destination-middle">
				<h4>Destination2</h4>
				<p>Alleppey</p>
			</div>
			<div class="col-md-4 destination-left">
				<img src="images/d2.jpg" alt="">
				<div class="tool">
					<a class="tooltips" href="#">
					<span></span></a>
				</div>
			</div>
			<div class="col-md-4 destination-left destination-middle">
				<h4>Destination3</h4>
				<p>Cochin</p>
			</div>
			<div class="clearfix"></div>	
		</div>
	</div>
	<!--destination-end-->
	<!--start-team-->
		<div class="team" id="team">
	      <div class="container">
			 <h3 class="tittle">Popular House boats</h3>
				<ul class="ch-grid">
					<li>
						<div class="ch-item">				
							<div class="ch-info">
								<div class="ch-info-front ch-img-1"></div>
								<div class="ch-info-back">
										<h3><a href="viewboat.php">Jalarani</h3>
									<p>Mary Rani Group of House boats</p></a>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item">
							<div class="ch-info">
								<div class="ch-info-front ch-img-2"></div>
								<div class="ch-info-back">
										<a href="viewboat.php"><h3>Cochin Queen</h3>
									<p>Mary Rani Group of House boats</p></a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item">
							<div class="ch-info">
								<div class="ch-info-front ch-img-3"></div>
								<div class="ch-info-back">
										<a href="viewboat.php"><h3>Queen Elizabeth</h3>
									<p>HR Group of houseboats</p></a>
								</div>
							</div>
						</div>
					</li>
					 <li>
						<div class="ch-item">
							<div class="ch-info">
								<div class="ch-info-front ch-img-4"></div>
								<div class="ch-info-back">
										<a href="viewboat.php"><h3>Paradise</h3>
									<p>HR Group of houseboats</p></a>
								</div>
							</div>
						</div>
					</li>
				</ul>
				
		  </div>
       </div>
<!--start-yachts-->
<div class="yacht" id="gallery">
	<div class="container">
	  <h3 class="tittle">Our Gallery</h3>
			<div class="gallery-bottom">
			     <div class="view view-ninth">
                   <a href="images/g1.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title">
<img src="images/g1.jpg" alt="" class="img-responsive">
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="content">
                         <h3>Bedrooms</h3>
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                        <a href="#" class="info">Read More</a>
                    </div>
                </div>
              <div class="view view-ninth">
                   <a href="images/g2.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title">
<img src="images/g2.jpg" alt="" class="img-responsive">
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="content">
                        <h3>Cultural activities</h3>
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                        <a href="#" class="info">Read More</a>
                    </div>
                </div>
                 <div class="view view-ninth">
                   <a href="images/g3.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g3.jpg" alt="" class="img-responsive">
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="content">
                         <h3>Specialist in dinner</h3>
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                        <a href="#" class="info">Read More</a>
                    </div>
                </div>
                <div class="view view-ninth">
                   <a href="images/g4.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g4.jpg" alt="" class="img-responsive">
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="content">
                         <h3>Kathakali</h3>
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                        <a href="#" class="info">Read More</a>
                    </div>
                </div>
               <div class="view view-ninth">
                   <a href="images/g5.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g5.jpg" alt="" class="img-responsive">
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="content">
                        <h3>AC bedrooms</h3>
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                        <a href="#" class="info">Read More</a>
                    </div>
                </div>
                 <div class="view view-ninth">
                   <a href="images/g6.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g6.jpg" alt="" class="img-responsive">
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="content">
                        <h3>Spicy lunch</h3>
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                        <a href="#" class="info">Read More</a>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
	</div>
</div>
<link rel="stylesheet" href="css/swipebox.css">
	<script src="js/jquery.swipebox.min.js"></script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
</script>
<!--//yachts-->
	<!--start-testimonial-->
		<div class="testimonial" id="test">
	        <div class="container">
		      <div class="wmuSlider example1">
							   <div class="wmuSliderWrapper">
								   <article style="position: absolute; width: 100%; opacity: 0;">
								   	<div class="grid-matter-bottom">
								   		<div class="col-sm-8 testimonilal_left">
								   			<h3><span class="m_5"></span></h3>
											<p><span class="quotes"> </span>Enjoy a New houseboat
											Discover New Places and
											Feel Happy,to Share  
											Every One...<span class="quote_down"></span></p>
										</div>
										<div class="col-sm-4">
										  <div class="testimonilal_right">
											<img class="img-responsive" src="images/c1.jpg" alt="" />
										  </div>
										</div>
										<div class="clearfix"> </div>
									 </div>
								 	</article>
								 	 <article style="position: absolute; width: 100%; opacity: 0;">
								 	   <div class="grid-matter-bottom">
								   		<div class="col-sm-8 testimonilal_left">
								   			<h3><span class="m_5"></span></h3>
											<p><span class="quotes"> </span>A wonderful day that our family spend in <font color="#FF0000">PARADISE</FONT> houseboat.Super customer caring.<span class="quote_down"></span></p>
										</div>
										<div class="col-sm-4">
										  <div class="testimonilal_right">
											<img class="img-responsive" src="images/c2.jpg" alt="" />
										  </div>
										</div>
										<div class="clearfix"> </div>
									 </div>
								 	</article>
								 	 <article style="position: absolute; width: 100%; opacity: 0;">
								 	 	<div class="grid-matter-bottom">
								   		<div class="col-sm-8 testimonilal_left">
								   			<h3><span class="m_5"></span></h3>
										<p><span class="quotes"> </span>Have a wonderful and great experience with team <font color="#FF0000">JALARANI
											<span class="quote_down"></span></p>
										</div>
										<div class="col-sm-4">
										  <div class="testimonilal_right">
											<img class="img-responsive" src="images/c1.jpg" alt="" />
										  </div>
										</div>
										<div class="clearfix"> </div>
									 </div>
								 	</article>
								 </div>
				         </div>
				            <script src="js/jquery.wmuSlider.js"></script> 
							  <script>
				       			$('.example1').wmuSlider();         
				   		     </script> 	           	         
		   </div>
    </div>
<!--contact--><script type="text/javascript">
function validate()
{

if(document.form.name.value=="")
{
alert("enter your name");
document.form.name.focus();
return false;
    }

	if(!(isNaN(document.form.name.value)))
{
alert("Only alphabets are allowed");
document.form.name.focus();
return false;
}


var nameRegex = /^[a-zA-Z\ ]+$/;
    var validname = document.form.name.value.match(nameRegex);
    if(validname == null){
        alert("Your name is not valid. Only characters A-Z, a-z,space are  acceptable.");
        document.form.name.focus();
        return false;
    }
	 var emailid=document.form.email.value;
      var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   
 

if(document.form.email.value=="")
{
alert("enter your emailid");
document.form.email.focus();
return false;
}

 if(reg.test(emailid) == false)
 {
        alert("Please enter a valid Email id");
        document.form.email.focus();
       return false;
    }
if(document.form.sub.value=="")
{
alert("enter your subject");
document.form.sub.focus();
return false;
    }
if(document.form.msg.value=="")
{
alert("enter your message");
document.form.msg.focus();
return false;
    }

}
</script>
<div class="contact" id="contact">
	<div class="col-md-6 contact_left">
		<form method="post" action="contact.php" name="form">
				Name<input type="text" class="textbox" name="name" value=""  onfocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Name';}">
				Email<input type="text" class="textbox" name="email" value="" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Email';}">
				Subject<input type="text" class="textbox" name="sub" value="" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Subject';}">
				Message<textarea value="" name="msg"  onfocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Message';}"></textarea>
				<div class="contact_btn">
			        <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Send" onClick="return validate()"></label>
			    </div>
		</form>	
        
	</div>
	<div class="col-md-6 contact_right">
		<div class="map">
             <!--  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1578265.0941403757!2d-98.9828708842255!3d39.41170802696131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1407515822047"> </iframe>
			 </div>-->
		<ul class="address">
			<i class="address_icon glyphicon glyphicon-map-marker"></i>
			<li class="add_right"><br><br><br><br>
			<img src="../images/97b53592667a11e5b9570015c5f4277e.jfif">
						<br><br><br><br><br><br>	
				<p>Phone : 91-001-2010102</p>
				
			</li>
			<div class="clearfix"> </div>
		</ul>
	</div>
	<div class="clearfix"> </div>
</div>
   <!--footer-->
      <div class="copy">
		<p>&copy; 2019 Houseboat. All Rights Reserved | </p>
	  </div>
      <!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


</body>
</html>