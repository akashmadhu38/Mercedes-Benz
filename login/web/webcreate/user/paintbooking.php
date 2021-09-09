<?php
session_start();
include("header.php");
include("testing.php");
$obj=new connection();
error_reporting(0);
?>
<script type="text/javascript">
function checknull()
{
	if(document.form1.txtreg.value=="")
	{
	alert('USERNAME RIQUIRED');
	return false;
	}
	else if(document.form1.gender.value=="")
	{
	alert('Scheme required');
	return false;
	}
	else if(document.form1.txtdob.value=="")
	{
	alert('Date of Birth Required');
	return false;
	}
	else if(document.form1.txthname.value=="")
	{
	alert('House Name Required');
	return false;
	}
	else if(document.form1.txtloc.value=="")
	{
	alert('Location Required');
	return false;
	}
	else if(document.form1.txtpin.value=="")
	{
	alert('Pin Required');
	return false;
	}
	else if(document.form1.txtemail.value=="")
	{
	alert('Email Id Required');
	return false;
	}
	else if(document.form1.txtmob.value=="")
	{
	alert('Mobile Number Required');
	return false;
	}
	else if(document.form1.txtoccu1.value=="")
	{
	alert('lisence required');
	return false;
	}
	else if(document.form1.txtoccu1.value=="")
	{
	alert('Adhaar Numeber Required');
	return false;
	}
	else if(document.form1.txtoccu.value=="")
	{
	alert('model name required');
	return false;
	}
	else if(document.form1.txtoccu1.value=="")
	{
	alert('Occupation Required');
	return false;
	}
}
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
					
               var modelID = document.getElementById('modelID').value;
                         
               queryString =  dist;

               ajaxRequest.open("GET", "http://localhost/Animol/web/getdist.php"+"?modelID="+modelID, true);
               ajaxRequest.send(null); 
            }
			
function preview_photo(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imgphoto')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

function preview_sign(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imgsign')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }		
		
</script>	
</script>
<?php
	
	$bookingid="";
	$res=$obj->execute("select max(SID)+1 as sid from service");
	if($row=mysqli_fetch_array($res))
	{
		if($row["sid"]=="")
		{
			$bookingid=1;
		}
		else
		{
			$bookingid=$row["sid"];
		}
	}
	
?>
<table align="center" width="100%">
  <tr>
    <td colspan="3" class="heading">MERCEDES PAINT SERVICE BOOKING</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>SID</td>
    <td><input type="text" name="txtbid" readonly="true" value="<?php echo $bookingid; ?>" /></td>
  </tr>
   <tr>
     <td>&nbsp;</td>
    <td>COLOUR</td>
    <td><select name="colour" >
		<option value="0"> --SELECT-- </option>
		<option value="1"> red </option>
		<option value="2"> blue </option>
		<option value="3"> Silver </option>
		<option value="4"> Black </option>
		</select>
  </tr>
 <tr>
    <td>&nbsp;</td>
    <td>USERNAME</td>
    <td><input type="text" name="txtuname" value="<?php echo $_SESSION["email"]; ?>" readonly="true"  /></td>
  </tr>
  
  <tr>                                                    
    <td>&nbsp;</td>
    <td>DATE FOR PAINTING SERVICE</td>
    <td><input type="date" name="txtdob" /></td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>TIME </td>
    <td><input type="time" name="txtym" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>HOUSE NAME </td>
    <td><input type="text" name="txthname" value="<?php echo $_SESSION["hname"];?>"/>;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>LOCATION</td>
    <td><input type="text" name="txtloc" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>PIN</td>
    <td><input type="text" name="txtpin" value="<?php echo $_SESSION["pin"];?>"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>MOBILE</td>
    <td><input type="text" name="txtmob" value="<?php echo $_SESSION["mob"];?>"/></td>
  </tr>
  
  
  <tr>
    <td>&nbsp;</td>
    <td>MODEL NAME </td>
    <td><?php


include("testing.php");


$qu="select * from benzmodel";
$da=mysqli_query($conn,$qu);
$total=mysqli_num_rows($da);

if($total!=0)
{
echo "<select modelID='modelID' name='model' modelName='modelName' onchange='ajaxFunction()'>";
while($result=mysqli_fetch_assoc($da))
{
	
$x="<option value='".$result['modelID']."'>".$result['modelName']."</option>";
echo $x;
}
echo "</select>";
}


?>
	</td>
  </tr>
  
   
 
  
  <tr>
    <td colspan="3"><center>
        <input type="submit" value="SUBMIT" name="btnsubmit" onclick="return checknull();"/>
        <input type="reset" value="CLEAR"  name="btnclear" />
        </center></td>
  </tr>
  
  </tr>
  
</table>
</form>
<?php
	if(isset($_POST["btnsubmit"]))
	{
	extract($_POST);
	$sql1="select * from service where uname='$txtuname'";
	$res=$obj->execute($sql1);
	if($row=mysqli_fetch_array($res))
	{
	?>
	<script>alert('Booking Already Exists');</script>
	<?php
	}
	else
	{ 
		//txtuname $ txtym txthname txtloc  txtpin txtmob model txtoccu1
		
		//$fl=$_FILES['fileToUpload']['name'];
		//$tempname=$_FILES['fileToUpload']['tmp_name'];
		//move_uploaded_file($tempname,"../uploads/".$fl);
		
	$sql3="insert into service values(null,'$txtserv','". $_SESSION["email"] ."','$txtdob','$txtym','$txthname','txtloc','$txtpin','$txtmob','model')";
	$obj->execute($sql3);
	"<script>alert('Service Booked Successfully');</script>";
	$obj->redirect("../banking/user/userhome.php");
	?>
	
	<?php
	}
	}
	?>
<?php
include("footer.php");
?>
