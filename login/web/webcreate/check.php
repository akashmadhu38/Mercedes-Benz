<?php


include("testing.php");


$idClass=$_GET['accno'];

$qu="select * from accssories where accno=".$idClass;
$da=mysqli_query($conn,$qu);
$total=mysqli_num_rows($da);

if($total!=0)
{
$x="";

while($result=mysqli_fetch_assoc($da))
{
echo "
<a href='e-class.php?modelID=".$result['modelID']."'>
      <img src='".$result['uname']."' alt='Norway' style='width:100%' >
     <p><strong>".$result['accname']."</strong></p></img>
	 </a>
          <button class='w3-button w3-black' ><a  href='user/booking.php'> BOOKING</a></button>
		  <button class='w3-button w3-black'  ><a  href='e-class.php?modelID=".$result['ACCID']."'>LEARN MORE</button>
    </div>
	
	</td>
	</tr>
</table>";
	
	

}
}




?>