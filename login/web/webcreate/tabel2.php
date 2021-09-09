	<?php


include("testing.php");



$qu="select * from spec where modelID='(select modelID from benzmodel where classID=1)'";
$da=mysqli_query($conn,$qu);
$total=mysqli_num_rows($da);

if($total!=0)
{
$x="";

while($result=mysqli_fetch_assoc($da))
{
echo "<div class='col-sm-4'>
        <div class='thumbnail'>
          <p><strong>".$result['Displacement']."</strong></p>
          <p><strong>".$result['Fuel']."</strong></p>
		   <p><strong>".$result['Power']."</strong></p>
          <p><strong>".$result['Torque']."</strong></p>
		   <p><strong>".$result['Drivetrain']."</strong></p>
          <p><strong>".$result['Transmission']."</strong></p>
		   <p><strong>".$result['Number of Gears']."</strong></p>
		   <p><strong>".$result['No Of Cylinder']."</strong></p>
          <p><strong>".$result['Mileage']."</strong></p>
		   <p><strong>".$result['Fuel Tank Capacity']."</strong></p>
          <p><strong>".$result['Wheel Type']."</strong></p>
		   <p><strong>".$result['Front Tyre Size']."</strong></p>
          <button class='btn' ><a  href='About E-class.php?classID=".$result['modelID']."'>BOOKING</a></button>
        </div>
      </div>";
}

}




?>