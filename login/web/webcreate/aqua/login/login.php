<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Login Form </title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Video Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Marck+Script&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext"
	    rel="stylesheet">
	<!-- //web-fonts -->
	<script type="text/javascript">
function valid()
{

if(document.form.uname.value=="")//textbox name=name
{
alert("enter your username");
document.form.uname.focus();
return false;
    }
if(document.form.pwd.value=="")//textbox name=name
{
alert("enter your password");
document.form.pwd.focus();
return false;
    }
	}
</script>
</head>

<body>
	<div class="video-w3l" data-vide-bg="video/1">
		<!-- title -->
		<h1>
			<span>A</span>qua
			<span>L</span>ogin
			<span>F</span>orm</h1>
		<!-- //title -->
		<!-- content -->
		<div class="sub-main-w3">
		<form action="../loginprocess.php" method="post" name="form">

				<div class="form-style-agile">
					<label>
						<i class="fas fa-user"></i>Username</label>
					<input placeholder="Username" name="uname" type="text" required="">
				</div>
				<div class="form-style-agile">
					<label>
						<i class="fas fa-unlock-alt"></i>Password</label>
					<input placeholder="Password" name="pwd" type="password" required="">
				</div>
				<!-- switch -->
				<div class="checkout-w3l">
					<div class="demo5">
						<div class="switch demo3">
							<input type="checkbox">
							<label>
								<i></i>
							</label>
						</div>
					</div>
					<a href="#">Remember Me</a>
				</div>
				<!-- //switch -->
				<input type="submit" value="Log In" onClick="return valid()">
				<!-- social icons -->
				<div class="footer-social">
				
					<ul>
						<li>
							<a href="#">
								<i class="fab fa-facebook-f icon_facebook"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-twitter icon_twitter"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-dribbble icon_dribbble"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-google-plus-g icon_g_plus"></i>
							</a>
						</li>
					</ul>
				</div><a href="../index.html"><font color="#FFFF00">Home</a>
				<!-- //social icons -->
			</form>
		</div>
		<!-- //content -->

		<!-- copyright -->
		<div class="footer">
			<p>&copy; 2019 Login Form. All rights reserved 
			</p>
		</div>
		<!-- //copyright -->
	</div>

	
	<!-- Jquery -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //Jquery -->

	<!-- Video js -->
	<script src="js/jquery.vide.min.js"></script>
	<!-- //Video js -->
	
</body>

</html>