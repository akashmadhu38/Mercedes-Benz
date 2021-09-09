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
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/amcharts.js"></script>	
<script src="js/serial.js"></script>	
<script src="js/light.js"></script>	
<script src="js/radar.js"></script>	
<link href="css/barChart.css" rel='stylesheet' type='text/css' />
<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>

<script src="js/jquery.easydropdown.js"></script>

<!--//skycons-icons-->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
						<!--menu-right-->
				<div class="top_menu">
						     
													
																	</div>
									<div class="srch"></div>
									<script type="text/javascript">
										 $('.main-search').hide();
										$('button').click(function (){
											$('.main-search').show();
											$('.main-search text').focus();
										}
										);
										$('.close').click(function(){
											$('.main-search').hide();
										});
									</script>
							<!--/profile_details-->
								<div class="profile_details_left">
									<ul class="nofitications-dropdown">
											<li class="dropdown note dra-down">
																			
																		<script type="text/javascript">
			
																	function DropDown(el) {
																		this.dd = el;
																		this.placeholder = this.dd.children('span');
																		this.opts = this.dd.find('ul.dropdown > li');
																		this.val = '';
																		this.index = -1;
																		this.initEvents();
																	}
																	DropDown.prototype = {
																		initEvents : function() {
																			var obj = this;

																			obj.dd.on('click', function(event){
																				$(this).toggleClass('active');
																				return false;
																			});

																			obj.opts.on('click',function(){
																				var opt = $(this);
																				obj.val = opt.text();
																				obj.index = opt.index();
																				obj.placeholder.text(obj.val);
																			});
																		},
																		getValue : function() {
																			return this.val;
																		},
																		getIndex : function() {
																			return this.index;
																		}
																	}

																	$(function() {

																		var dd = new DropDown( $('#dd') );

																		$(document).click(function() {
																			// all dropdowns
																			$('.wrapper-dropdown-3').removeClass('active');
																		});

																	});

																</script>
										    </li>
									       <li class="dropdown note">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope-o"></i> <span class="badge">3</span></a>

												
													<ul class="dropdown-menu two first">
														<li>
															<div class="notification_header">
																<h3>You have  new houseboat owner's requests  </h3> 
															</div>
														</li>
														
															
														 
														
															<div class="notification_bottom">
																<a href="ownerapproval.php">See all requests</a>
                                                                
															</div> 
                                                          
																<a href="contact.php">Contact form</a>
                                                                
															
                                                           
														</li>
													</ul>
										</li>
										
							<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o"></i> <span class="badge">5</span></a>

									<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have new users requests</h3>
											</div>
										</li>
										
										  
										   
										 <li>
											<div class="notification_bottom">
												<a href="userapproval.php">See all users requests</a>
											</div> 
										</li>
									</ul>
							</li>	
						<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i> <span class="badge blue1">9</span></a>
										<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 9 pending task</h3>
											</div>
										</li>
										<li><a href="#">
												<div class="task-info">
												<span class="task-desc">Database update</span><span class="percentage">40%</span>
												<div class="clearfix"></div>	
											   </div>
												<div class="progress progress-striped active">
												 <div class="bar yellow" style="width:40%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
											   <div class="clearfix"></div>	
											</div>
										   
											<div class="progress progress-striped active">
												 <div class="bar green" style="width:90%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
												<div class="clearfix"></div>	
											</div>
										   <div class="progress progress-striped active">
												 <div class="bar red" style="width: 33%;"></div>
										</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
											   <div class="clearfix"></div>	
											</div>
											<div class="progress progress-striped active">
												 <div class="bar  blue" style="width: 80%;"></div>
											</div>
										</a></li>
										<li>
											<div class="notification_bottom">
												<a href="#">See all pending task</a>
											</div> 
										</li>
									</ul>
							</li>		   							   		
							<div class="clearfix"></div>	
								</ul>
							</div>
							<div class="clearfix"></div>	
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
		 </div>
					<!-- //header-ends -->
						<div class="outter-wp">
								<!--custom-widgets-->
												
												<!--//custom-widgets-->
												<!--/candile-->
													
															

																
													<!--/candile-->
													
												<!--/charts-->
																						
												<!--/float-charts-->
												
																	
																				
																			 													<!--//weather-charts-->
														<div class="graph-visualization">
															<div class="col-md-6 map-1">
																<h3 class="sub-tittle">Weather </h3>
																	<div class="weather">
																	<div class="weather-top">
																		<div class="weather-top-left">
																			<div class="degree">
																			<figure class="icons">
																				<canvas id="partly-cloudy-day" width="64" height="64">
																				</canvas>
																			</figure>
																			<span>37°</span>
																			<div class="clearfix"></div>
																			</div>
																<script>
																			 var icons = new Skycons({"color": "#002561"}),
																				  list  = [
																					"clear-night", "partly-cloudy-day",
																					"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
																					"fog"
																				  ],
																				  i;

																			  for(i = list.length; i--; )
																				icons.set(list[i], list[i]);

																			  icons.play();
																		</script>
																			<p><?php echo date("l");?>
																				<label><?php echo date("d");?></label>
																				<sup>th</sup>
																				<?php echo date("M");?></p>
																		</div>
																		<div class="weather-top-right">
																			<p><i class="fa fa-map-marker"></i></p>
																			
																		</div>
																		<div class="clearfix"> </div>
																	</div>
																	<div class="weather-bottom">
															<div class="weather-bottom1">
																<div class="weather-head">
																<h4>Cloudy</h4>
																<figure class="icons">
																	<canvas id="cloudy" width="40" height="40"></canvas>
																</figure>					
																	<script>
																			 var icons = new Skycons({"color": "#00C6D7"}),
																				  list  = [
																					"clear-night", "cloudy",
																					"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
																					"fog"
																				  ],
																				  i;

																			  for(i = list.length; i--; )
																				icons.set(list[i], list[i]);

																			  icons.play();
																		</script>
																<h6>20°</h6>
																<div class="bottom-head">
																	<p>Monday</p>
																</div>
															</div>
															</div>
															<div class="weather-bottom1 ">
																<div class="weather-head">
															<h4>Sunny</h4>
															<figure class="icons">
																<canvas id="clear-day" width="40" height="40">
																</canvas>	
																
															</figure>					
																	<script>
																			 var icons = new Skycons({"color": "#00C6D7"}),
																				  list  = [
																					"clear-night", "clear-day",
																					"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
																					"fog"
																				  ],
																				  i;

																			  for(i = list.length; i--; )
																				icons.set(list[i], list[i]);

																			  icons.play();
																		</script>
															<h6>37°</h6>
															<div class="bottom-head">
																	<p>Tuesday</p>
																</div>
															</div>
															</div>
															<div class="weather-bottom1">
																<div class="weather-head">
																<h4>Rainy</h4>
																<figure class="icons">
																	<canvas id="sleet" width="40" height="40">
																	</canvas>
																</figure>
																<script>
																			 var icons = new Skycons({"color": "#00C6D7"}),
																				  list  = [
																					"clear-night", "clear-day",
																					"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
																					"fog"
																				  ],
																				  i;

																			  for(i = list.length; i--; )
																				icons.set(list[i], list[i]);

																			  icons.play();
																		</script>
														
																<h6>7°</h6>
																<div class="bottom-head">
																	<p>Wednesday</p>
																</div>
															</div>
															</div>
															<div class="weather-bottom1 ">
																<div class="weather-head">
															<h4>Snowy</h4>
															<figure class="icons">
																	<canvas id="snow" width="40" height="40">
																	</canvas>
																</figure>
																<script>
																			 var icons = new Skycons({"color": "#00C6D7"}),
																				  list  = [
																					"clear-night", "clear-day",
																					"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
																					"fog"
																				  ],
																				  i;

																			  for(i = list.length; i--; )
																				icons.set(list[i], list[i]);

																			  icons.play();
																		</script>
															<h6>-10°</h6>
															<div class="bottom-head">
																	<p>Thursday</p>
																</div>
																</div>
															</div>
															<div class="clearfix"> </div>
														</div>

																</div>

															</div>
															
												<!--//charts-->
										
										<div class="dev-table">    
											<div class="col-md-4 dev-col">                                    

                                            <div class="dev-widget dev-widget-transparent">
                                                <h2 class="inner one">Server Usage</h2>
                                                <p>Today server usage in percentages</p>                                        
                                                <div class="dev-stat"><span class="counter">68</span>%</div>                                                                                
                                                <div class="progress progress-bar-xs">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                                </div>                                        
                                                <p>We Todayly recommend you change your plan to <strong>Pro</strong>. Click here to get more details.</p>

                                                <a href="#" class="dev-drop">Take a closer look <span class="fa fa-angle-right pull-right"></span></a>
                                            </div>

                                        </div>
                                        <div class="col-md-4 dev-col mid">                                    

                                            <div class="dev-widget dev-widget-transparent dev-widget-success">
                                                 <h3 class="inner">Today Earnings</h3>
                                                <p>This is Today earnings per last year</p>                                        
                                                <div class="dev-stat">$<span class="counter">75,332</span></div>                                                                                
                                                <div class="progress progress-bar-xs">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 79%;"></div>
                                                </div>                                        
                                                <p>We happy to notice you that you become an Elite customer, and you can get some custom sugar.</p>

                                                <a href="#" class="dev-drop">Take a closer look <span class="fa fa-angle-right pull-right"></span></a>
                                            </div>

                                        </div>
                                        <div class="col-md-4 dev-col">                                    

                                            <div class="dev-widget dev-widget-transparent dev-widget-danger">
                                                 <h3 class="inner">Your Balance</h3>
                                                <p>All your earnings for this time</p>
                                                <div class="dev-stat">RS.<span class="counter">5,321</span></div>                                                                                
                                                <div class="progress progress-bar-xs">
                                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                                </div>                                        
                                                <p>You can withdraw this money in end of each month. Also you can spend it on our marketplace.</p>

                                                <a href="#" class="dev-drop">Take a closer look <span class="fa fa-angle-right pull-right"></span></a>                                        
                                            </div>

                                        </div>
										<div class="clearfix"></div>		
										
										</div>
										</div>
									<!--//bottom-grids-->
									
		 </div>
									<!--/charts-inner-->
	  </div>
										<!--//outer-wp-->
	 </div>
									 <!--footer section start-->
										<footer>
										   <p>&copy 2018 Augment . All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">Logic</a></p>
										</footer>
									<!--footer section end-->
</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <h1>Site Administrator</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
									  <a href="index.php"><img src="images/admin.jpg"></a>
									  <a href="index.php"><span class=" name-caret">Stephy Roy</span></a>
									 
									<ul>
									<li><a class="tooltips" href="index.php"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
										<li><a class="tooltips" href="changepass.php"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
										<li><a class="tooltips" href="../logout.php"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
							  </ul>
</div>
							   <!--//down-->
                           <div class="menu">
									<ul id="menu" >


										<li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
										 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> New Requests</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="ownerapproval.php"> Boat Company</a></li>
											<li id="menu-academico-boletim" ><a href="userapproval.php">Users</a></li>
											<li id="menu-academico-avaliacoes" ><a href="viewcompanyplan.php">Packages</a></li>
											
										  </ul>
										</li>
										 <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i> <span>View Contents</span> <span class="fa fa-angle-right" style="float: right"></span></a>
											 <ul id="menu-academico-sub" >
												<li id="menu-academico-avaliacoes" ><a href="viewadminplan.php">Admin Plans</a></li>
												<li id="menu-academico-boletim" ><a href="viewowner.php">Houseboat companies</a></li>
												<li id="menu-academico-boletim" ><a href="viewcomplaint.php">Users complaints</a></li>
												<li id="menu-academico-boletim" ><a href="viewreview.php">Users reviews</a></li>
												<li id="menu-academico-boletim" ><a href="contact.php">Contacts</a></li>
										   </ul>
										 </li>
									<li><a href="addplan.php"><i class="lnr lnr-pencil"></i> <span>Add a plan</span></a></li>

									<!-- <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Mail Box</span><span class="fa fa-angle-right" style="float: right"></span></a>
									   <ul>
										<li><a href="inbox.html"><i class="fa fa-inbox"></i> Inbox</a></li>
										<li><a href="compose.html"><i class="fa fa-pencil-square-o"></i> Compose Mail</a></li>
										<li><a href="editor.html"><span class="lnr lnr-highlight"></span> Editors Page</a></li>
									
									  </ul>
									</li>-->
							        <li id="menu-academico" ><a href="#"><i class="lnr lnr-layers"></i> <span>Booking</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										 <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="bookingreport.php">Report</a></li>
                                            <li id="menu-academico-boletim" ><a href="bal.php">Check balance</a></li>

											<li id="menu-academico-boletim" ></li>

									  </ul>
</li>
									
																		<li id="menu-academico" ><a href="#"><i class="lnr lnr-book"></i> <span>Settings</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										  <ul id="menu-academico-sub" >
										    <li id="menu-academico-avaliacoes" ><a href="changepass.php">Change password</a></li>
										    <li id="menu-academico-boletim" ><a href="../logout.php">Logout</a></li>
											
										  </ul>
</li>
										
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<link rel="stylesheet" href="css/vroom.css">
<script type="text/javascript" src="js/vroom.js"></script>
<script type="text/javascript" src="js/TweenLite.min.js"></script>
<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>