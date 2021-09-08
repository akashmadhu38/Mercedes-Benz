<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
   <?php
   
include("testing.php");
session_start();
include("../db/connection.php");
$obj=new connection();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Gaze Sign up & login Form a Flat Responsive Widget Template :: w3layouts </title>
      <!-- Meta tags -->
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="keywords" content="Gaze Sign up & login Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
         />
	<script type="script/javascript" src="../validation/validation.js"></script>
      <script>
         addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false); function hideURLbar() { window.scrollTo(0, 1); }
      </script>
      <!-- Meta tags -->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//style sheet end here-->
      <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
   </head>
   <body >
   
      <div class="mid-class">
         <div class="art-right-w3ls">
            <h2 align="center">Forgot Password</h2>
            <form name="form1" method="post" align="center">
			
               <div class="main">
                  <div class="form-left-to-w3l">
                     <input type="text" name="txtemail" placeholder="Enter Email ID">
                  </div>
               </div>
                
               <div class="clear"></div>
               <div class="btnn">
			   
			   <input type="submit" value="PROCEED" name="btnproceed" />

				 
               </div>
              
           
            <div class="w3layouts_more-buttn">
               <h3>Don't Have an account..?
                  <a href="#content1">Sign Up Here
                  </a>
               </h3>
            </div>
            <!-- popup-->
            <div id="content1" class="popup-effect">
               <div class="popup">
                  <!--login form-->
                  <div class="letter-w3ls">
                     
                       
                     </form>
				 <?php
					
					
	if(isset($_POST["btnproceed"]))
	{		
		$email=$_POST["txtemail"];
		$password=null;
		include("../../db/connection.php");
		$obj=new connection();
		$sql="select login.pwd from register,login where register.email=login.uname and register.email='$email'";
		$res=$obj->execute($sql);
		if($row=mysqli_fetch_array($res))
		{
			$password=$row["pwd"];
			SendEmail($password);
			$obj->redirect("login.php");
		}
		else
		{
			?>
			<script> alert('Invalid Email ID');</script>
			<?php
		}
			
	}
	
			function SendEmail($password)
			{
				$_SESSION["email"]=$_POST["txtemail"];
				$_SESSION["subject"]="PASSWORD RECOVERY";
				$_SESSION["message"]="Your registered Password for login is '". $password ."'";
				include("mail.php");
			}
			
			?>
	

                     <div class="clear"></div>
                  </div>
                  <!--//login form-->
                  <a class="close" href="#">&times;</a>
               </div>
            </div>
            <!-- //popup -->
         </div>
        
      </div>
      <footer class="bottem-wthree-footer">
         <p>
      </footer>
   </body>
</html>