<?php
session_start();
if(!isset($_SESSION['uname'])) { //if not yet logged in
   header("Location: ../login.php");// send to login page
  } include("header.php");

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<script type="text/javascript">
function valid()
{
if(document.form.bname.value=="")//textbox name=name
{
alert("enter boat name");
document.form.bname.focus();
return false;
    }
if(!(isNaN(document.form.bname.value)))
{
alert("Only alphabets are allowed");
document.form.bname.focus();
return false;
}
if(document.form.no.value=="")//textbox name=name
{
alert("enter boat registration no");
document.form.no.focus();
return false;
    }
if(document.form.rate.value=="")//textbox name=name
{
alert("enter boat rate");
document.form.rate.focus();
return false;
    }	
if((document.form.meals[0].checked==false) && (document.form.meals[1].checked==false ))//radiobutton name=gender
{
alert("select meals");
document.form.meals.focus();
return false;
}
if(document.form.br.value=="0")//textbox name=name
{
alert("enter bedroom type");
document.form.br.focus();
return false;
    }	
if(document.form.nbr.value=="0")//textbox name=name
{
alert("enter bedroom no");

return false;
    }	
if(document.form.staff.value=="0")//textbox name=name
{
alert("enter no of staffs");

return false;
    }	

if((document.form.ac[0].checked==false) && (document.form.ac[1].checked==false ))//radiobutton name=gender
{
alert("select ac type");

return false;
}
if(document.form.nop.value=="0")//textbox name=name
{
alert("enter no of travellers");

return false;
    }	
if(document.form.sp.value=="0")//textbox name=name
{
alert("enter starting point");

return false;
    }
if(document.form.dp.value=="0")//textbox name=name
{
alert("enter destination point");

return false;
    }		
if(document.form.route.value=="0")//textbox name=name
{
alert("enter route");

return false;
    }	
if((document.form.kf[0].checked==false) && (document.form.kf[1].checked==false ))//radiobutton name=gender
{
alert("select kitchen facility");

return false;
}
if((document.form.bal[0].checked==false) && (document.form.bal[1].checked==false ))//radiobutton name=gender
{
alert("select balcony type");

return false;
}

if((document.form.acco[0].checked==false) && (document.form.acco[1].checked==false ))//radiobutton name=gender
{
alert("select accomodation provided");

return false;
}
if(document.form.type.value=="0")//textbox name=name
{
alert("enter boat type");

return false;
    }	

if(document.form.lname.value=="")//textbox name=name
{
alert("enter lake name");
document.form.lname.focus();
return false;
    }	
if(!(isNaN(document.form.lname.value)))
{
alert("Only alphabets are allowed");
document.form.lname.focus();
return false;
}
if(document.form.file.value=="")//textbox name=name
{
alert("upload image");
document.form.file.focus();
return false;
    }	
if(document.form.des.value=="")//textbox name=name
{
alert("enter boat description");
document.form.des.focus();
return false;
    }	
}
</script>
   </head>
   <body>             
          
          
         
				<form  method="post" name="form" enctype="multipart/form-data">
.
    <table  align="center" cellpadding="10" cellspacing="10" height="1000" >

  <tr>
    <TD><a href="addboat.php"><img src="../icons/r.jpg" height="150"></a></TD><TD align="center" colspan="3"><b><font color="#FFFF00">REGISTER A BOAT</td>
	
    </tr> 
	
  <tr>
    <td><b><font color="#FF0000">Boat name </td>
 
   <td><input type="text" name="bname" placeholder="enter boat name"  /></td>
 <td><b><font color="#FF0000">Registration No </td>
 
   <td><input type="text" name="no" placeholder="enter boat registration no"></td></tr>
 <tr>    <td><b><font color="#FF0000">Fix Rate</td>

    <td><input type="text" name="rate" placeholder="enter boat rate" /></td>


  <td><b><font color="#FF0000">Provide Meals</td><td>
<input type="radio" name="meals" value="yes"><b><font color="#FF0000">Yes
<input type="radio" name="meals" value="no"><b><font color="#FF0000">No
   </td></tr><tr >
	  <td><b><font color="#FF0000">Bedrooms</td>
	<td><select name="br" >
    <option value="0">--Select bedroom type--</option>
    <option value="Single bedrooms">Single bedrooms</option>
    <option value="Double bedrooms">Double bedrooms</option>
	  <option value="Family bedrooms">Family bedrooms</option>
	  <option value="No Bedrooms">No Bedrooms</option>

	 
	</select></td>
	
	  <td><b><font color="#FF0000">No of Bedrooms</td>
	
    <td><select name="nbr" >
    <option value="0">--Select bedroom no--</option>
    <option value="One">One</option>
    <option value="Two">Two</option>
	  <option value="Three">Three</option>
	   <option value="Nil">Nil</option>
	  
	 
	</select></td></tr><tr >
	<td><b><font color="#FF0000">No of Staffs</td>
	
    <td><select name="staff" >
    <option value="0">--Select staff no--</option>
    <option value="One">One</option>
    <option value="Two">Two</option>
	  <option value="Three">Three</option>
  <option value="More than three">More than Three</option>
	   <option value="Nil">Nil</option>
	  
	 
	</select></td>
    
     <td><b><font color="#FF0000">A/c</td>
   
    <td><input type="radio" name="ac" value="AC"><b><font color="#FF0000">A/C
<input type="radio" name="ac" value="NON AC"><b><font color="#FF0000">Non A/C
</td></tr>
  
   <tr >
     <td><b><font color="#FF0000">No.of travellers allowed </td>
   <td><select name="nop" >
    <option value="0">--Select no of persons allowed--</option>
   <option value="20-25">20-25</option>
    <option value="10-20">10-20</option>
<option value="5-10">5-10</option>
	  <option value="Below 5">Below 5</option>
	 
	</select></td>
  <td><b><font color="#FF0000">Starting point</td>
<td><select name="sp" >
    <option value="0">--Select starting point--</option>
   
    <option value="Alappey">Alappey</option>
<option value="Kochi">Kochi</option>
	  <option value="Kumarakom">Kumarakom</option>
	  <option value="Thumboly">Thumboly</option>
	</select></td></tr><tr >
  <td><b><font color="#FF0000">Destination point</td>
<td><select name="dp" >
    <option value="0">--Select destination--</option>
    <option value="Allepey">Allepey</option>
<option value="Thumboly">Thumboly</option>
    <option value="Kumarakom">Kumarakom</option>
	  <option value="Cochin">Cochin</option>
	  <option value="Quilon">Quilon</option>
	 
	</select></td>
  <td><b><font color="#FF0000">Route</td>
<td><select name="route" >
    <option value="0">--Select route--</option>
   
    <option value="Alappey-kumarakom">Alappey-kumarakom</option>
<option value="Kochi-alappey">Kochi-alappey</option>
	  <option value="Kumarakom-alappey">Kumarakom-alappey</option>
	  <option value="Thumboly-allapey">Thumboly-allapey</option>
<option value="Kochi-Quilon">Kochi-Quilon</option>
<option value="Quilon-allapey-kochi">Quilon-allapey-kochi</option>
	</select></td></tr>



<tr >
  <td><b><font color="#FF0000">Kitchen facility</td><td><input type="radio" name="kf" value="yes"><b><font color="#FF0000">Yes
<input type="radio" name="kf" value="no"><b><font color="#FF0000">No  </td>
  <td><b><font color="#FF0000">Balcony</td>
<td><input type="radio" name="bal" value="yes"><b><font color="#FF0000">Yes
<input type="radio" name="bal" value="no"><b><font color="#FF0000">No  </td></tr>
   
  



    <tr >

  <td><b><font color="#FF0000">Accomodation provided</td>
<td><input type="radio" name="acco" value="yes"><b><font color="#FF0000">Yes
<input type="radio" name="acco" value="no"><b><font color="#FF0000">No   </td>
    

 <td><b><font color="#FF0000">House boat type </td><td><select name="type" >
    <option value="0">--Select boat type--</option>
    <option value="Luxury">Luxury</option>
    <option value="Delux">Delux</option>
<option value="Premium">Premium</option>
	  <option value="Super Delux">Super Delux</option>
	  <option value="standard">Standard</option>
	  
	 
	</select></td></tr>
<tr ><td><b><font color="#FF0000">Lake name </td>
 
   <td><input type="text" name="lname" placeholder="enter lake name" /></td>

<td><b><font color="#FF0000">Upload photo</td><td><input type="file" name="file" ></td></tr>
<tr ><td><b><font color="#FF0000">Add description about boat</td><td colspan="3"><textarea name="des" placeholder="enter description" rows="7" cols="90" ></textarea></td></tr>
    
  <tr><td colspan="4" align="center">
   <input type="submit" value="REGISTER BOAT" style="background-color:#FF9900;width:150px;height:40px; "   id="submit" name="b" onClick="return valid()"/></td>
 
 

 
    </tr>
    
</table>

</form>
<?php
if(isset($_POST['b']))
{

$id=$_SESSION['id'];
extract($_POST);
$file=$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],"uploads/".$file);
include("../connection.php");
$ob=new connection();
		$sql3="insert into addboat(bname,des,regno,rate,meals,bedtype,bedno,staffno,ac,trano,sp,dp,route,kf,balc,acco,type,lake,photo,loginid)
values('$bname','$des','$no','$rate','$meals','$br','$nbr','$staff','$ac','$nop','$sp','$dp','$route','$kf','$bal','$acco','$type','$lname','$file',$id)";
$res3=$ob->execute($sql3);
if($res3>0)
{
echo "<script>
window.onload=function()
{
alert('successfully register boat....!');
window.location='home.php';
}
</script>";
}
}
?>
</body>
</html>