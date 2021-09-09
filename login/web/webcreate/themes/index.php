<html>
	<head>
		<meta http-evquiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Master page - Youlay</title>
		<style>
			#wrap{
				background-color: #f4f4f4;
				//border:solid 1px;
				margin: 0 auto;
				padding: 0 auto;
				max-width: 50%;
			}
			.nav{
				background-color:#fff;
			}
			.menu li {
				display: inline;
				padding: 10px;
			}
			.menu li a{
				text-decoration: none;
			}
			.menu li a:hover{
				background-color:blue;
				color: #ffffff;
			}
			.footer{
				background-color:#ffffff;
			}
		</style>
	</head>
	<body>
		<div id='wrap'>
			<div class='header'>PHP Master Page</div>
			<div class='nav'>
				<ul class='menu'>
					<li><a href='index.php?page=home'>Home</a></li>
					<li><a href='index.php?page=about'>About</a></li>
					<li><a href='index.php?page=service'>Service</a></li>
					<li><a href='index.php?page=contact'>Contact</a></li>
				</ul>
			</div>
			<div class='content'>
				<?php
					//PHP Master Page
					if(isset($_GET['page'])){
						$page_name = $_GET['page'];
						include ("pages/".$page_name.'.php');
					}
					else{
						include ("pages/home.php");
					}
				?>
			</div>
			<br/>
			<div class='footer'>Copy right by: Youlay</div>
			<br/>
		</div>
	</body>
</html>