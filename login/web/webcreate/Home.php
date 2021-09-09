<!DOCTYPE html>
<?php
include("testing.php");
include("../../db/connection.php");
$obj=new connection();
error_reporting(0);
?>
<html>
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme The Band</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #111;
  }
  .myVideo 
  {
  
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
}
  .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
    -webkit-filter: grayscale(90%);
    filter: grayscale(90%); /* make all photos black and white */ 
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    background: #2d2d30;
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }
  #googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }  
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }  
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Mercedes-Benz<img src="symbol3 - Copy.png" style="position:relative;margin-left:195px;top:-30px; width:40px;"/></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="abtcar.php">SERVICES</a></li>
        <li><a href="#tour">VEHICLES</a></li>
       
     
            <li><a href="../../web1/login.php">LOGIN</a><img src="app/user-silhouette.png"style="position:relative;margin-left:73px;top:-35px; width:20px;"></img><img src="app/log.png"style="position:relative;margin-left:-6px;top:-30px; width:12px;"></img></li>
        
   
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->


    <!-- Wrapper for slides -->
    <div  class="myVideo" >
      <div class="item active">
	 
<video autoplay muted loop id="myVideo" class="myVideo">
  <source src="The Illuminated Star -- Mercedes-Benz Accessories.mp4" type="video/mp4" style">
</video>
	
	
	</div>
	
	
    <!-- Left and right controls -->
   
</div>

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3>THE MECEDES-BENZ</h3><img src="symbol3.png"/>
  <p><em>We love The class!</em></p>
  <p>Since its inception, Mercedes-Benz has maintained a reputation for its quality and durability. Objective measures looking at passenger vehicles, such as J. D. Power surveys, demonstrated a downturn in reputation in these criteria in the late 1990s and early 2000s. By mid-2005, Mercedes temporarily returned to the industry average for initial quality, a measure of problems after the first 90 days of ownership, according to J. D. Power.In J. D. Power's Initial Quality Study for the first quarter of 2007, Mercedes showed dramatic improvement by climbing from 25th to 5th place and earning several awards for its models.For 2008, Mercedes-Benz's initial quality rating improved by yet another mark, to fourth place.On top of this accolade, it also received the Platinum Plant Quality Award for its Mercedes’ Sindelfingen, Germany assembly plant.J. D. Power's 2011 US Initial Quality and Vehicle Dependability Studies both ranked Mercedes-Benz vehicles above average in build quality and reliability.In the 2011 UK J. D. Power Survey, Mercedes cars were rated above average. A 2014 iSeeCars.com study for Reuters found Mercedes to have the lowest vehicle recall rate.</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>GLC</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="SSPIP53729_MQ6_166824_large.png" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>The Beast</p>
        <p>Perfect for long ride</p>
        <p>Member since 2009</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>GLE</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="SSPIP62173_MQ6_253905_large.png" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Racer</p>
        <p>Most perfect sitting capacity</p>
        <p>Member since 2010</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>E-CLASS</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="index.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>Show stopper</p>
        <p>The perfect class look</p>
        <p>Member since 2005</p>
      </div>
    </div>
  </div>
</div>

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3>OUR VEHICLES</h3>
	All models| AMG models |Maybach
    <p class="text-center">Place your Booking Now</p>
      <div class="row text-center">
	  
	  
<table width="100%">
		<tr>
		<?php
			
			$rcount=0;
			$res=$obj->execute("select * from benzclass");
			while($row=mysqli_fetch_array($res))
			{			
				if ($rcount % 3 != 0)
				{
					?>
					<td valign="middle">
					
					<div class='col-sm-4'>
        <div class='thumbnail' style="width:300px;">
          <img src="<?php echo $row['pic']; ?>" alt='C-Class'  style='width:200px height:300px'>
          <p><strong><?php echo $row['Classname']; ?></strong></p>
          <button class='btn' ><a  href='Models.php?classID=<?php echo $row['ClassID']; ?>'> LEARN MORE</a></button>
		  
        </div>
      </div>
					
					
					 				
					</td>
					
					<?php
 				 	$rcount=$rcount+1;
				}
				else
				{
					?>
					</tr>
					<tr><td><div style="height:15px"></div></td></tr>
					<tr>
					<td valign="middle">
					
<div class='thumbnail' id='about' style="width:300px;">
          <img src="<?php echo $row['pic']; ?>" alt='C-Class'  style='width:200px height:300px'>
          <p><strong><?php echo $row['Classname']; ?></strong></p>
           <button class='btn' ><a  href='Models.php?classID=<?php echo $row['ClassID']; ?>'> LEARN MORE</a></button>
		 
        </div>
      </div>
					
					</td>
					
					<?php
					
 				 	$rcount=$rcount+1;					
				}
			}
			?>
			</tr>
		</table>	  
	  
	  
	 

	</div>


      </div>
    </div>
  </div>
  
  
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span>BOOKING</h4>
        </div>
        <div class="modal-body">
          <form role="form" method="post" action="bookings.php">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-car"></span> BRAND</label>
              <input type="TEXT" class="form-control" id="psw" placeholder="Make your choice">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
              <input type="text" class="form-control" id="usrsname" placeholder="Enter email">
            </div>
              <button type="submit" class="btn btn-block" name="submit">Pay
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div> 


</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
