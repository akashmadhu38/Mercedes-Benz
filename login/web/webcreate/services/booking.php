<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Booking</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Medical Emergency Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs Sign up Web Templates, 
 Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<!--//fonts--> 
</head>
<body>

<script>
function ajaxFunction(){

               var ajaxRequest;  // The variable that makes Ajax possible!
               
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();

               }catch (e) {
                  // Internet Explorer Browsers
                  try {
					 
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
               // Create a function that will receive data 
               // sent from the server and will update
               // div section in the same page.
					
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
	
                     var ajaxDisplay = document.getElementById('content');

                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               
               // Now get the value from user and pass it to
               // server script.
					
               var dist = document.getElementById('district').value;
                         
               queryString =  dist;

               ajaxRequest.open("GET", "http://localhost/Animol/web/getdist.php"+"?dist="+dist, true);
               ajaxRequest.send(null); 
            }
</script>


<!--background-->
<h1> Asha Worker Booking Form</h1>
    <div class="bg-agile">
	<div class="book-appointment">
	<h2>Patient Information</h2>
			<form action="#" method="post">
				<div class="left-agileits-w3layouts same">
					<div class="gaps">
						<p>First Name <span class="form-required"> * </span></p>
						<input type="text" name="First Name" placeholder="" required=""/>
					</div>	
					<div class="gaps">
						<p>Last Name <span class="form-required"> * </span></p>
							<input type="text" name="Last Name" placeholder="" required=""/>
					</div>
					<div class="gaps">
						<p>Gender <span class="form-required"> * </span></p>	
							<select class="form-control">
								<option></option>
								<option>Male</option>
								<option>Female</option>
							</select>
					</div>
					<div class="gaps">
						<p>Select Date Of Birth <span class="form-required"> * </span></p>		
						<input  id="datepicker1" name="Text" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
					</div>
					
					<div class="gaps">
						<p>Patient Type <span class="form-required"> * </span></p>
						<select class="form-control">
							<option></option>
							<option>Paralised Patients</option>
							<option>Aged peoples</option>
							<option>Blind</option>
							<option>Mental</option>
							<option>Autism</option>
							<option>All of the above</option>
						</select>
					</div>		
					<div class="gaps">	
						<p>Phone Number <span class="form-required"> * </span></p>
						<input type="text" name="Number" placeholder="" required=""/>
					</div>
				</div>
				<div class="right-agileinfo same">
					
					<div class="gaps">
						<p>Address <span class="form-required"> * </span></p>
						<textarea id="message" name="message" placeholder="" title="Please enter Your Comments"></textarea>
						</div>
					<div class="gaps">
						<p>Pin Code <span class="form-required"> * </span></p>
						<input type="text" name="First Name" placeholder="" required=""/>
					</div>
					
					<div class="gaps">
						<p>District Name <span class="form-required"> * </span></p>	
								<?php


include("connection.php");


$qu="select * from district";
$da=mysqli_query($conn,$qu);
$total=mysqli_num_rows($da);

if($total!=0)
{
echo "<select class='form-control' id='district' name='dist' onchange='ajaxFunction()'>";
while($result=mysqli_fetch_assoc($da))
{
	
$x="<option value='".$result['Distd']."'>".$result['dname']."</option>";
echo $x;
}
echo "</select>";
}


?>


					</div>
					
					<div class="gaps">
						<p>Thaluk Name  <span class="form-required"> * </span></p>	
						
						<div id="content"><select>
						</select></div>
					</div>
					
					<div class="gaps">	
						<p>Addhar Numebr/Pan Card <span class="form-required"> * </span></p>
						<input type="text" name="Number" placeholder="" required=""/>
					</div>
				</div>
				<div class="clear"></div>
				<input type="submit" value="Submit">
			</form>
		</div>
   </div>
   <!--copyright-->
			<div class="copy w3ls">
		       <p>&copy; 2017. Medical Emergency Form . All Rights Reserved  | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	        </div>
		<!--//copyright-->
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->

</body>
</html>