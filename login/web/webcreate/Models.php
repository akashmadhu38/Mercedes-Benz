<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
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
<body >



<!-- !PAGE CONTENT! -->


  <!-- Header -->
  <header id="portfolio">
  
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>
	<?php


include("testing.php");



$idmodel=$_GET['classID'];


$qu="SELECT * FROM `benzclass` WHERE classID =".$idmodel;
$da=mysqli_query($conn,$qu);
$total=mysqli_num_rows($da);

if($total!=0)
{

while($result=mysqli_fetch_assoc($da))
{
  echo"<br><h1><b><img src='symbol3.png'style='position:relative;margin-left:50px;top:-5px; width:40px;'></img> MERCEDES BENZ ".$result['Classname']."</b></h1>";
}
}
?>
	<video autoplay muted loop id="myVideo" class="myVideo">
  <source src="The new Mercedes-Benz G-Class 2018- Stronger Than Time..mp4" type="video/mp4" style">
</video>
    <div class="w3-section w3-bottombar w3-padding-16">
    </div>
    </div>
  </header>
  
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
  
   <?php


include("testing.php");


$idClass=$_GET['classID'];

$qu="select * from benzmodel where classID=".$idClass;
$da=mysqli_query($conn,$qu);
$total=mysqli_num_rows($da);

if($total!=0)
{
$x="";

while($result=mysqli_fetch_assoc($da))
{
echo "
 <table width='100%' style='border:none;'>
   <tr>
	<td valign='middle' style='border:2px solid #000'>
<div class='w3-third w3-container w3-margin-bottom' id='about'>
<a href='e-class.php?modelID=".$result['modelID']."'>
      <img src='".$result['pic']."' alt='Norway' style='width:100%' class='w3-hover-opacity'>
     <p><strong>".$result['modelName']."</strong></p></img>
	 </a>
          <button class='w3-button w3-black' ><a  href='user/booking.php'> BOOKING</a></button>
		  <button class='w3-button w3-black'  ><a  href='e-class.php?modelID=".$result['modelID']."'>LEARN MORE</button>
    </div>
	
	</td>
	</tr>
</table>";
	
	

}
}




?>
  </div>
 
  <!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="Home.php" class="w3-bar-item w3-button"><img src="app/home.png" style="position:relative;margin-left:50px;top:-1px; width:20px;"></img> HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><img src="app/sedan-car-front.png" style="position:relative;margin-left:50px;top:-1px; width:20px;"></img> MODELS</a>
   
<br>    </a>
  </div>
  </div>
   
</body>
</html>
