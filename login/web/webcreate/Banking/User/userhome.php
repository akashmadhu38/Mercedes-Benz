<?php
session_start();
include("enc.php"); 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Banking</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Machinery Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
					</script>

<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<link href='//fonts.googleapis.com/css?family=Dosis:400,200,300,500,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
	<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 2
										},
										tablet: { 
											changePoint:991,
											visibleItems: 2
										}
									}
								});
								
							});
					</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		
		<script type="text/javascript" src="ajax.js"></script>
		<script type="text/javascript" src="../validation/validation.js"></script>
		
</head>

<body>

<!--header-->
<div class="header head-t" id="top">
 

<!---->
	<div class="container">
<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
                        <div class="navbar-brand logo ">

                            <img src="img/paypal-logo.png" width="190" height="50" />

                        </div>
<div class="clearfix"></div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil links" id="bs-example-navbar-collapse-1">
					<div class="top-nav">
					 
    <a href="../../home.php?_i8b=<?php echo $home; ?>" class="demo-4">
      <span>
        <span>Home</span>
        <span>Home</span>
        <span></span>
      </span>
    </a>
    <a href="userhome.php?_i8b=<?php echo $transactions; ?>" class="demo-4">
      <span>
        <span>Transactions</span>
        <span>Transactions</span>
        <span></span>
      </span>
    </a>      
    <a href="../../../../web1/login.php" class="demo-4">
      <span>
        <span>Sign Out</span>
        <span>Sign Out</span>
        <span></span>
      </span>
    </a>

  </div>
					</div><!-- /.navbar-collapse -->
				</nav>
				</div>
				</div>

<!---->
   
<div class="about">

	<div class="container" style="background-image: url('/img/Paypal36.png'); background-repeat: no-repeat;min-height:400px; background-position: left center">
	
  <div class="col-md-8 content-pro-head1">
   		
      <form id="form1" name="form1" method="post">
    
      <table width="1000px">
          <tr>
              <td width="300px" style="vertical-align:top;">
                  <asp:Image ID="Image1" Width="300" Height="200" runat="server" />
              </td>
              <td width="50px">&nbsp;
              </td>
              <td width="650px" style="vertical-align:top;">
        
		
		
		
				<?php
					//PHP Master Page
					if(isset($_GET['_i8b']))
					{
						try
						{
							$page_name = $_GET['_i8b'];
							$val=enc_dec("0",$page_name);
							include ($val.'.php');
							$var_msg = "This is an exception example";
						    throw new Exception($var_msg);
						}
						catch(Exception $e)
						{
							//echo "<script>alert('" . $e->getMessage() . "');</script>";
							//echo "<script>alert('Error');</script>";
						}
					}
					else
					{
						include ("home.php");
					}
				?>
		
		
		
		
		
              </td>
          </tr>
      </table>

    
        
     
    </form>




		<div class="clearfix"> </div>
  </div>
  
	<div class="clearfix"> </div>
	</div>
</div>
    
<div class="footer">
	 
	<div class="footer-bottom">
		<div class="container">
			<img src="images/in.png" alt=""/>
			 
			<ul>
              
				<li><a href="../../home.php?page=home">Home</a></li>
				<li><a href="userhome.php?page=transactions">Transactions</a></li>
				<li><a href="../../../../web1/login.php?page=signout">Sign Out</a></li>
				</ul>
		<div class="copy">
			<p class="footer-gri" >©onlinebanking. All rights reserved</p>
		</div>
		</div>
	</div>
</div>
<!--footer-->
<!-- for bootstrap working -->
	<script src="js/bootstrap.min.js"></script>
<!-- //for bootstrap working -->


</body>
</html>
