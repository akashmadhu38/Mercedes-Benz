<?php
 
include("header.php");
include("../testing.php");
$obj=new connection();
//error_reporting(0);
?>
	<script type="text/javascript" src="ajax.js"></script>
<script type="text/javascript" src="jquerylib.js"></script>
<script type="text/javascript">
function checknull()
{
	if(document.form1.txtreg.value=="")
	{
	alert('USERNAME REQUIRED');
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
	$res=$obj->execute("select max(BID)+1 as bid from booking");
	if($row=mysqli_fetch_array($res))
	{
		if($row["bid"]=="")
		{
			$bookingid=1;
		}
		else
		{
			$bookingid=$row["bid"];
		}
	}
	
?>
<form name="form1" method="post">
<table align="center" width="100%">
  <tr>
    <td colspan="3" class="heading">MERCEDES BOOKING</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>BID</td>
    <td><input type="text" name="txtbid" readonly="true" value="<?php echo $bookingid; ?>" /></td>
  </tr>
 <tr>
    <td>&nbsp;</td>
    <td>USERNAME</td>
    <td><input type="text" name="txtuname" value="<?php echo $_SESSION["email"]; ?>" readonly="true"  /></td>
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
    <td><input type="text" name="txthname" value="<?php echo $_SESSION["hname"];?>" readonly="true""/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>LOCATION</td>
    <td><input type="text" name="txtloc" value="<?php echo $_SESSION["location"];?>" readonly="true"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>PIN</td>
    <td><input type="text" name="txtpin" value="<?php echo $_SESSION["pin"];?>" readonly="true""/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>MOBILE</td>
    <td><input type="text" name="txtmob" value="<?php echo $_SESSION["mobile"];?>" readonly="true""/></td>
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


?>	</td>
  </tr>
  
   <tr>
     <td>&nbsp;</td>
    <td>COLOUR</td>
    <td>
	<select name="colour" onchange="getimagedetails(document.form1.colour.value,document.form1.model.value, vehicle);">
		<option value="0"> --SELECT-- </option>
		<option value="red"> Red </option>
		<option value="blue"> Blue </option>
		<option value="Silver"> Silver </option>
		<option value="Black"> Black </option>
  	</select>
  </tr>
   <tr>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>
	 
	 <div id="vehicle">
	 
	 </div>
	 
	 </td>
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
//txtuname scheme txtdob  txthname  txtloc txtpin txtmob  fileToUpload txtadhar
	function SendEmail($msg)
			{
				$_SESSION["subject"]="MERECEDES BENZ";
				$_SESSION["message"]="Booking Completed Successfully. '". $msg ."'";
				include("mail.php");
			}
	
	if(isset($_POST["btnsubmit"]))
	{
	extract($_POST);
	$sql1="select * from booking where uname='$txtuname'";
	$res=$obj->execute($sql1);
	$_SESSION["amount"]="50000";
	if($row=mysqli_fetch_array($res))
	{
	?>
	
	<?php
	}
	else
	{
		//txtuname scheme txtdob txthname txtloc txtpin txtmob fileToUpload txtadhar model colour txtoccu1	
		
		$fl=$_FILES['fileToUpload']['name'];
		$tempname=$_FILES['fileToUpload']['tmp_name'];
		move_uploaded_file($tempname,"../uploads/".$fl);
		//$sql3="insert into booking values(null,'txtbid','". $_SESSION["email"] ."','$scheme','$txtdob','$txthname','$txtloc','txtpin','$txtmob','$fl', '$txtadhar','$model', '$colour','$txtoccu1','pending')";
	$sql3="insert into booking values(null,'$fl','$model','$txtadhar','$colour','$scheme','". $_SESSION["email"] ."','$txtdob','$txthname', '$txtloc','$txtpin', '$txtoccu1','$txtmob','pending')";
	$obj->execute($sql3);
	
	$res=$obj->execute("select max(bid) as bid from booking,benzmodel,register where booking.modelName=benzmodel.modelID and register.email=booking.uname and booking.uname='". $_SESSION["email"] ."'");
	if($row=mysqli_fetch_array($res))
	{
		$_SESSION["bid"]=$row["bid"];
	}	
	$msg="Booking Amount is Rs. ". $_SESSION["amount"];
	SendEmail($msg);
	$obj->redirect("bill/bill.php");
	//$obj->redirect("../banking/user/userhome.php");
	?>
	<script>alert('Booked Successfully');</script>
	<?php
	}
	}
	?>
<?php
include("footer.php");
?>
