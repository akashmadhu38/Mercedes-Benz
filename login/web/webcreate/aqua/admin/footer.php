<footer>
										   <p align="right">&copy 2019 Aqua . All Rights Reserved | </p>
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