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
            <h2 align="center">Sign In and Sign Up</h2>
            <form name="form1" method="post" align="center">
			
               <div class="main">
                  <div class="form-left-to-w3l">
                     <input type="text" name="uname" placeholder="Username/Email">
                  </div>
                  <div class="form-left-to-w3l ">
                     <input type="password" name="password" placeholder="Password">
                     <div class="clear"></div>
                  </div>
               </div>
               <div class="right-side-forget">
                  <a href="forgotpwd.php" class="for">Forgot password...?</a>
               </div>
               <div class="clear"></div>
               <div class="btnn">
			   
			   <input type="submit" value="Sign In" name="btnlogin" />

				 
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
                     
                        <div class="form-left-to-w3l">
                           <input type="text" name="fname" placeholder="First Name"  onchange="return fn_allLetter(document.form1.fname.value);">
                        </div>
                        <div class="form-left-to-w3l">
                           <input type="text" name="lname" placeholder="Last Name" >
                        </div>
                        <div class="form-left-to-w3l">
                           <input type="text" name="mob" placeholder="Mobile" >
                        </div>
                        <div class="form-left-to-w3l">
                           <input type="email" name="email" placeholder="Email" >
                        </div>
						<div class="form-left-to-w3l">
                           <input type="text" name="hname" placeholder="House Name" >
                        </div>
						<div class="form-left-to-w3l">
                           <input type="text" name="location" placeholder="Location" >
                        </div>
						<div class="form-left-to-w3l">
                           <input type="text" name="pin" placeholder="PIN" >
                        </div>
                        <div class="form-left-to-w3l">
                           <input type="password" name="pwd" placeholder="Password" >
                        </div>
                        <div class="form-left-to-w3l margin-zero">
                           <input type="password" name="confirm" placeholder="Confirm Password" >
                        </div>
                        <div class="btnn">
							<input type="submit" name="btnsignup" value="SIGN UP" />
                           <br>
                        </div>
                     </form>
				 <?php
					
					if(isset($_POST["btnlogin"]))
					{
						extract($_POST);
						$res=$obj->execute("select * from login where uname='$uname' and pwd='$password'");
						if($row=mysqli_fetch_array($res))
						{
							$utype=$row["utype"];
							if($utype=="admin")
							{
								$obj->redirect("../web/webcreate/admin/adminhome.php");
							}
							else if($utype=="user")
							{
								$_SESSION["email"]=$_POST["uname"];
								$res=$obj->execute("SELECT concat_ws(' ',fname,lname) as name, hname, location,mobile,pin FROM register WHERE email='$uname'");
								if($row=mysqli_fetch_array($res))
								{
									$_SESSION["name"]=$row["name"];
									$_SESSION["hname"]=$row["hname"];
									$_SESSION["location"]=$row["location"];
									$_SESSION["mobile"]=$row["mobile"];	
									$_SESSION["pin"]=$row["pin"];									
								}
								$obj->redirect("../web/webcreate/user/userhome.php");
							}
						}
						else
						{
							echo $obj->msg("Invalid Login. Access Denied!!!");	
						}
					}
			?>
	

			<?php
					
					if(isset($_POST["btnsignup"]))
					{
						extract($_POST);
						$res=$obj->execute("select * from login where uname='$email'");
						if($row=mysqli_fetch_array($res))
						{
							echo $obj->msg("Email id already exists!!!");							
						}
						else
						{
							$obj->execute("insert into register values(null,'$fname','$lname','$mob','$email','$pwd','$hname','$location','$pin')");
							$obj->execute("insert into login values(null,'$email','$pwd','user')");
							$msg="Username is '$email' and Password='$pwd'";
							SendEmail($msg);
							echo $obj->msg("Registration completed successfully");	
							$obj->redirect("login.php");
						}
					}
			function SendEmail($msg)
			{
				$_SESSION["email"]=$_POST["email"];
				$_SESSION["subject"]="MERECEDES BENZ";
				$_SESSION["message"]="Account created Successfully. Your registration details is '". $msg ."'";
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