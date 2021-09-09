<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
}
table {
   border: 3px solid black;
    border-spacing: 5px;
  border-collapse: collapse;
    padding: 15px;
}
th,td{
   border: 2px solid black;
  
   text-align: center;
    padding: 15px;

 td{
   border: 2px solid black;
    border-spacing: 5px;
   text-align: left;
    padding: 15px;
}
/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
  background-image: url('3rd.jpeg');
  min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
  background-image: url("/w3images/parallax2.jpg");
  min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
  background-image: url("/w3images/parallax3.jpg");
  min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}
</style>
	
<body>

  <!-- Header -->
  

<header id='portfolio'>
    <a href='#'><img src='1st.jpg' style='width:65px;' class='w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity'></a>
    <span class='w3-button w3-hide-large w3-xxlarge w3-hover-text-grey' onclick='w3_open()'><i class='fa fa-bars'></i></span>
    <div class='w3-container'>
  <?php


include("testing.php");



$idmodel=$_GET['modelID'];


$qu="SELECT * FROM `benzmodel` WHERE modelID =".$idmodel;
$da=mysqli_query($conn,$qu);
$total=mysqli_num_rows($da);

if($total!=0)
{

while($result=mysqli_fetch_assoc($da))
{
  echo"<br><h1><b><img src='symbol3.png' style='position:relative;margin-left:2px;top:-5px; width:40px;'></img> MERCEDES BENZ ".$result['modelName']."</b></h1>";
}
}
?>

	<img src='class.JPG' >
    <div class='w3-section w3-bottombar w3-padding-16'>
    </div>
    </div>
  </header>



<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="Home.php" class="w3-bar-item w3-button"><img src="app/home.png" style="position:relative;margin-left:50px;top:-1px; width:20px;"></img>HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><img src="app/sedan-car-front.png" style="position:relative;margin-left:50px;top:-1px; width:20px;"></img> ABOUT</a>
    

<br>    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()"></a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()"></a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()"></a>
  
  </div>
</div>

<!-- Container (About Section) -->

   
  
  <?php


include("testing.php");



$idmodel=$_GET['modelID'];


$qu="select * from spec where modelid=".$idmodel;
$da=mysqli_query($conn,$qu);
$total=mysqli_num_rows($da);

if($total!=0)
{
$x="";

while($result=mysqli_fetch_assoc($da))
{
echo "<div class='w3-content w3-container w3-padding-64' id='about'>
  <h3 class='w3-center'>ABOUT ME</h3>
  
    
        <table style='width:100%'><tr>
		<th><img src='app/suspension.png' style='position:relative;margin-left:50px;top:-10px; width:40px;'></img><br>DISPLACEMENT</th>
		<th><img src='app/fuel-station.png' style='position:relative;margin-left:1px;top:-10px; width:40px;'></img><br>FUEL</th>
		<th><img src='app/oil-gauge.png' style='position:relative;margin-left:2px;top:-10px; width:40px;'></img><br>POWER</th><br>
		<th><img src='app/motor.png' style='position:relative;margin-left:50px;top:-10px; width:40px;'></img><br>TORQUE</th>
		<th><img src='app/icon.png' style='position:relative;margin-left:50px;top:-10px; width:40px;'></img><br>DRIVETRAIN</th>
		<th><img src='app/air-pump.png' style='position:relative;margin-left:50px;top:-10px; width:40px;'></img><br>TRANSMISSION</th></tr>
		<tr><br>
          <td><p><strong>".$result['Displacement']."</strong></p></td>
          <td><p><strong>".$result['Fuel']."</strong></p></td>
          <td><p><strong>".$result['Power']."</strong></p></td>
          <td><p><strong>".$result['Torque']."</strong></p></td>
		  <td><p><strong>".$result['Drivetrain']."</strong></p></td>
          <td><p><strong>".$result['Transmission']."</strong></p></td></tr>
		<tr>
		<th><img src='app/automatic-transmission.png' style='position:relative;margin-left:50px;top:-10px; width:40px;'></img><br>GEARS</th>
		<th><img src='app/oxygen-tank.png' style='position:relative;margin-left:50px;top:-10px; width:40px;'></img><br>CYLINDERS</th>
		<th><img src='app/pistons.png' style='position:relative;margin-left:50px;top:-10px; width:40px;'></img><br>MILAGE</th>
		<th><img src='app/oil.png' style='position:relative;margin-left:50px;top:-10px; width:40px;'></img><br>FUEL TANK CAPACITY</th>
		<th><img src='app/alloy-wheel.png' style='position:relative;margin-left:50px;top:-10px; width:40px;'></img><br>WHEEL TYPE</th>
		<th><img src='app/racing.png' style='position:relative;margin-left:50px;top:-10px; width:40px;'></img><br>TYRE SIZE</th></tr>
		
		  <tr>
          <td><p><strong>".$result['Number of Gears']."</strong></p></td>
          <td><p><strong>".$result['No Of Cylinder']."</strong></p></td>
		  <td><p><strong>".$result['Mileage']." KM</strong></p></td>
          <td><p><strong>".$result['Fuel Tank Capacity']." LTRS</strong></p></td>
          <td><p><strong>".$result['Wheel Type']."</strong></p></td>
          <td><p><strong>".$result['Front Tyre Size']."</strong></p></td>
          </tr>      
		 </table>
	</div>";
}

}




?>



 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
