<!DOCTYPE html>
<html>
<?php
include("testing.php");
?>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onClick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>MERCEDES BENZ<img src="symbol3 - Copy.png" style="position:relative;margin-left:10px;top:-5px; width:40px;"/></b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    
    <a href="aqua/carwash.php" class="w3-bar-item w3-button">CAR WASh</a>
    <a href="user/servbooking.php" class="w3-bar-item w3-button">
SERVICES
    </a>
    
    <a href="aqua/enginetopup.php" class="w3-bar-item w3-button">ENGINE TOP-UP</a>
    <a href="aqua/carpaint.php" class="w3-bar-item w3-button">PAINTING</a>


</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">LOGO</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onClick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onClick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left">BENZ SERVICES</p>
    
  </header>

  <!-- Image header -->
  <div class="w3-display-container w3-container">
    <img src="service1.jpg" alt="Jeans" style="width:100%">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
      <h1 class="w3-jumbo w3-hide-small">New arrivals</h1>
      <h1 class="w3-hide-large w3-hide-medium">New arrivals</h1>
      <h1 class="w3-hide-small">COLLECTION 2019</h1>
      <p><a href="#jeans" class="w3-button w3-black w3-padding-large w3-large">SHOP NOW</a></p>
    </div>
  </div>

  <div class="w3-container w3-text-grey" id="jeans">
  
  </div>

  <!-- Product grid -->
  <div class="w3-row w3-grayscale">
  <table width="100%">
  <tr>
  <td>
    <?php
			include("testing.php");
			
			$res=mysqli_query($conn,"select * from accstock" );
			while($row=mysqli_fetch_array($res))
			{			
				
					?>
					
      <td>
				<div class="w3-col l3 s6">
      <div class="w3-container">
	  <div class="w3-display-container">
        <img src="uploads/<?php echo $row['image']; ?>" style="width:100%;">
 <div class="w3-display-middle w3-display-hover">
             <a  href="user/accessoriesbooking.php?accno=<?php echo $row['accno']; ?>">Buy now </a>
          <i class="fa fa-shopping-cart"></i></a></button>
          </div>
		</div>
        <p><?php echo $row['accname'] ?><br><b><?php echo  $row['price'] ?></b></p>
		

	<?php
 			
				}
				?></td></tr>
				
					</table>
  <!-- Subscribe section -->
 
    </div>
  </footer>

  <div class="w3-black w3-center w3-padding-24">Powered by <a href="http://localhost/login/web/webcreate/home.php" title="Mercedes Benz Service" target="_blank" class="w3-hover-opacity">AKASH MADHU & ALEX M SUNNY</a></div>

  <!-- End page content -->
</div>

<!-- Newsletter Modal -->


<script>
// Accordion 
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
