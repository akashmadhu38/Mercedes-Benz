<!--
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
							  <a href="userhome.php"><h1>House Boat</h1></a>
				  </div>
          <span class="menu"> </span>
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
			<div class="container">
			       <div class="banner-info">
							 <div class="col-md-6 banner-slider">
							   <div  id="top" class="callbacks_container">
								<ul class="rslides" id="slider4">
								<li>
								  </li>
								  <li>
								  </li>
							</ul>
						 </div>
					   </div>
					  <div class="col-md-6 banner-pic">
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

     
</body>
</html>