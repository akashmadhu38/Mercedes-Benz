<?php
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
<table align="center" width="100%">
  <tr>
    <td colspan="3" class="heading">MERCEDES BOOKING</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>BID</td>
    <td><input type="text" name="txtbid" /></td>
  </tr>
 <tr>
    <td>&nbsp;</td>
    <td>USERNAME</td>
    <td><input type="text" name="txtuname" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>SCHEME</td>
    <td><input type="radio" name="scheme" value="EMI" />EMI
	<input type="radio" name="scheme" value="READY CASH" />READY CASH
	<input type="radio" name="scheme" value="CANTEEN FACILITY" />CANTEEN FACILITY</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>DATE OF BOOKING </td>
    <td><input type="date" name="txtdob" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>HOUSE NAME </td>
    <td><input type="text" name="txthname" onchange="return fn_null_label(document.form1.txthname);"/>;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>LOCATION</td>
    <td><input type="text" name="txtloc" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>PIN</td>
    <td><input type="text" name="txtpin" onchange="return fn_checkpin(document.form1.txtpin);"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>EMAIL ID </td>
    <td><input type="text" name="txtemail" onchange="return fn_checkemail(document.form1.txtemail);" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>MOBILE</td>
    <td><input type="text" name="txtmob" onchange="return fn_checkmobile(document.form1.txtmob);"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>UPLOAD LISENCE</td>
    <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>ADHAAR NUMBER</td>
    <td><input type="text" name="txtadhar" onchange="return fn_checkemail(document.form1.txtoccu1.value=="");" /></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>MODEL NAME </td>
    <td><?php


include("testing.php");


echo "<script>alert('')</script>";
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
     <td>&nbsp;</td>
    <td>COLOUR</td>
    <td><select name="colour" >
		<option value="0"> --SELECT-- </option>
		<option value="1"> red </option>
		<option value="2"> blue </option>
		<option value="3"> Silver </option>
		<option value="4"> Black </option>
		
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>OCCUPATION</td>
    <td><input type="text" name="txtoccu1" /></td>
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
	include("../db/connection.php");
	$obj=new connection();
	extract($_POST);
	$sql1="select * from booking where uname='$txtuname'";
	$res=$obj->execute($sql1);
	if($row=mysqli_fetch_array($res))
	{
	?>
	<script>alert('Booking Already Exists');</script>
	<?php
	}
	else
	{
	
	$sql3="insert into booking values(null,'txtuname','scheme','txtdob','txthname','txtloc','txtpin','txtemail','txtmob','fileToupload','txtadhar','colour','txtoccu1')";
	$obj->execute($sql3);
	?>
	<script>alert('Booked Successfully');</script>
	<?php
	}
	}
	?>
<?php
include("footer.php");
?>
