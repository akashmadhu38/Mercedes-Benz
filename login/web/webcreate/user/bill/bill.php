<?php
session_start();
?>
<?php
include("../../../../db/connection.php");
include("../../testing.php");
$obj=new connection();
//error_reporting(0);
?>
<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Bill</title>
      <!-- Meta tags -->
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="keywords" content="Pet Found Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
         />
      <script>
         addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
      </script>
      <!-- Meta tags -->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//style sheet end here-->
      <link href="//fonts.googleapis.com/css?family=Barlow:300,400,500" rel="stylesheet">
   </head>
   <body>
      <h1 class="header-w3ls">
         BILLING
      </h1>
      <!-- multistep form -->
      <div class="main-bothside">
         <form name="form1" method="post">
		 
		 <?php
		 
		 $res=$obj->execute("select * from booking,benzmodel,register where booking.modelName=benzmodel.modelID and register.email=booking.uname and booking.bid='". $_SESSION["bid"] ."'");
		 if($row=mysqli_fetch_array($res))
		 {
		 ?>
            <div class="form-group">
               <div class="form-mid-w3ls">
                  <input type="text" name="name" readonly="true" value="<?php echo $row["fname"];?>&nbsp;<?php echo $row["lname"]; ?>" placeholder="Name" required="">
               </div>
               <div class="form-mid-w3ls">
                  <input type="email" name="email" readonly="true" value="<?php echo $row["email"];?>" placeholder="Email" required="">
               </div>
               <div class="form-mid-w3ls">
                  <input type="text" name="mobile" readonly="true" value="<?php echo $row["mobile"]; ?>" placeholder="Phone" required="">
               </div>
            </div>
            <div class="form-group">
               <div class="form-mid-w3ls">
                  <input type="text" name="location" readonly="true" value="<?php echo $row["location"]; ?>" placeholder="Location" required="">
               </div>
               <div class="form-mid-w3ls">
                  <input type="text" name="hname" readonly="true" value="<?php echo $row["House"]; ?>" placeholder="House Name" required="">
               </div>
               <div class="form-mid-w3ls">
                  <input type="text" name="pin" readonly="true" value="<?php echo $row["pin"]; ?>" placeholder="PIN" required="">
               </div>
            </div>
            <div class="parent-clss">
               <div class="personal-info">
                  <p>Scheme</p>
                 <div class="form-mid-w3ls">
                      <input type="text" name="scheme" readonly="true" value="<?php echo $row["scheme"]; ?>" placeholder="Scheme" required="">
                  </div>
               </div>
               <div class="personal-info">
                  <p>Booking Date</p>
                  <div class="form-mid-w3ls">
                      <input type="text" name="bdate" readonly="true" value="<?php echo $row["dob"]; ?>" placeholder="Booking Date" required="">
                  </div>
               </div>
               <div class="personal-info">
                  <p>Expected Delivery Date</p>                   
                  <div class="form-mid-w3ls">
				  <?php
				  
				  $bdate=$row["dob"];
				  $deldate= date('Y-m-d', strtotime($bdate. ' + 7 days'));
				  ?>
                      <input type="text" name="ddate" readonly="true" placeholder="Delivery Date" value="<?php echo $deldate; ?>" required="">
                  </div>
               </div>
            </div>
            <div class="form-group">
               <div class="form-mid-w3ls">
                  <input type="text" name="mname" readonly="true" value="<?php echo $row["modelName"]; ?>" class="form-control" placeholder="Model Name">
               </div>
               <div class="form-mid-w3ls">
                  <input type="text" name="color" readonly="true" value="<?php echo $row["color"]; ?>" placeholder="Color">
               </div>
               <div class="form-mid-w3ls">
                 <input type="text" name="amount" readonly="true" value="Rs. 50000/-" placeholder="Amount">
               </div>
            </div>
            <div class="form-group">
               <div class="form-mid-w3ls">
                  <img src="../../<?php echo $row["pic"];?>" width="250px" height="180px" />
               </div>
			   <div class="form-mid-w3ls"  style="color:#FFFFFF;">
                  *if the delivery date will be delayed, your can contact : +91-9447854127
               </div> 
			   <div class="form-mid-w3ls">
                   
               </div> 
			   
            </div>
			<?php
			}
			?>
			<input type="submit" value="PAY" name="btnpay" />
         </form>
		 
		 <?php
		 
		 if(isset($_POST["btnpay"]))
		 {
		 	$obj->redirect("../../banking/user/userhome.php");
		 }
		 
		 ?>
		 
      </div>
      <div class="copy">
         <p>©2019 Benz Showroom. All Rights Reserved | Design by <a href="#" target="_blank">Akash and Alex</a></p>
      </div>
   </body>
</html>