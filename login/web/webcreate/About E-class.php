 <?php
include("testing.php");
session_start();
include("../../db/connection.php");
$obj=new connection();
?>

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
	<img src="class.JPG" >
    <div class="w3-section w3-bottombar w3-padding-16">
    </div>
    </div>
  </header>
  
  
  <!-- First Photo Grid-->
  <div class="about">
    
	
<table width="100%" style="border:none;">
		<tr>
		<?php
			
			$rcount=0;
			$idClass=$_GET['classID'];
			$qu="select * from benzmodel where classID=".$idClass;
			$res=$obj->execute($qu);
			while($row=mysqli_fetch_array($res))
			{			
				if ($rcount % 3 != 0)
				{
					?>
					<td valign="middle" style="border:2px solid #000">
					
					<div class='col-sm-4'>
        <div class='thumbnail' style="width:300px;">
          <img src="<?php echo $row['pic']; ?>" alt='C-Class' width="350px" height="280px">
          <p><strong><?php echo $row['modelName']; ?></strong></p> 
          <button class='w3-button w3-black' ><a  href='e-class.php?modelID=<?php echo $row["modelID"]; ?>> BOOKING</a></button>
		  <button class='w3-button w3-black'  ><a  href='e-class.php?modelID=<?php echo $row["modelID"]; ?>>TEST DRIVE</button>
		  <button class='btn'>TEST DRIVE</button>
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
					
	<div class='col-sm-4'>
        <div class='thumbnail' style="width:350px;">
          <img src="<?php echo $row['pic']; ?>" alt='C-Class' width="350px" height="280px">
          <p><strong><?php echo $row['modelName']; ?></strong></p> 
          <button class='w3-button w3-black' ><a  href='e-class.php?modelID=<?php echo $row["modelID"]; ?>> BOOKING</a></button>
		  <button class='w3-button w3-black'  ><a  href='e-class.php?modelID=<?php echo $row["modelID"]; ?>>TEST DRIVE</button>
		  <button class='btn'  >TEST DRIVE</button>
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
