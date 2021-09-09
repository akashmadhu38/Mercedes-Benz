<html>
<head>
<style>
table {
   border: 1px solid black;

   text-align: left;
    padding: 15px;
}
th, td{
   border: 1px solid black;
  border-collapse: collapse;
   text-align: left;
    padding: 15px;
}
</style>
</head>
<body>
<?php


include("testing.php");



//$idmodel=$_GET['modelID'];


$qu="select * from spec where modelid=1";
$da=mysqli_query($conn,$qu);
$total=mysqli_num_rows($da);

if($total!=0)
{
$x="";

while($result=mysqli_fetch_assoc($da))
{
echo "<div class='col-sm-4'>
        <div class='thumbnail'><table style='width:100%'><tr>
		<th><img src='app/icon.png' style='position:relative;margin-left:50px;top:-10px; width:40px;'></img><br>DISPLACEMENT</th>
		<th><img src='app/fuel-station.png' style='position:relative;margin-left:1px;top:-10px; width:40px;'></img><br>FUEL</th>
		<th><img src='app/speedometer.png' style='position:relative;margin-left:2px;top:-10px; width:40px;'></img><br>POWER</th>
		<th><img src='app/icon.png' style='position:relative;margin-left:2px;top:-10px; width:40px;'></img><br>TORQUE</th>
		<th><img src='app/icon.png' style='position:relative;margin-left:50px;top:-10px; width:40px;'></img><br>DRIVETRAIN</th>
		<th><img src='app/icon.png' style='position:relative;margin-left:50px;top:-10px; width:40px;'></img><br>TRANSMISSION</th>
		<th><img src='app/icon.png' style='position:relative;margin-left:50px;top:-10px; width:40px;'></img><br>GEARS</th>
		<th><img src='app/icon.png' style='position:relative;margin-left:50px;top:-10px; width:40px;'></img><br>CYLINDERS</th>
		<th><img src='app/icon.png' style='position:relative;margin-left:50px;top:-10px; width:40px;'></img><br>MILAGE</th>
		<th><img src='app/icon.png' style='position:relative;margin-left:50px;top:-10px; width:40px;'></img><br>FUEL TANK CAPACITY</th>
		<th><img src='app/icon.png' style='position:relative;margin-left:50px;top:-10px; width:40px;'></img><br>WHEEL TYPE</th>
		<th><img src='app/icon.png' style='position:relative;margin-left:50px;top:-10px; width:40px;'></img><br>TYRE SIZE</th></tr>
		<tr>
          <td><p><strong>".$result['Displacement']."</strong></p></td>
          <td><p><strong>".$result['Fuel']."</strong></p></td>
          <td><p><strong>".$result['Power']."</strong></p></td>
          <td><p><strong>".$result['Torque']."</strong></p></td>
		  <td><p><strong>".$result['Drivetrain']."</strong></p></td>
          <td><p><strong>".$result['Transmission']."</strong></p></td>
          <td><p><strong>".$result['Number of Gears']."</strong></p></td>
          <td><p><strong>".$result['No Of Cylinder']."</strong></p></td>
		  <td><p><strong>".$result['Mileage']."</strong></p></td>
          <td><p><strong>".$result['Fuel Tank Capacity']."</strong></p></td>
          <td><p><strong>".$result['Wheel Type']."</strong></p></td>
          <td><p><strong>".$result['Front Tyre Size']."</strong></p></td>
          </tr>      
		 </table>
		  </div>
      </div>";
}

}




?>
</body>
</html>