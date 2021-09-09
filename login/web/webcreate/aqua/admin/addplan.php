<?php
session_start();
if(!isset($_SESSION['uname'])) { //if not yet logged in
   header("Location: ../login.php");// send to login page
  } ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

	<script type="text/javascript">
function valid()
{
if(document.form.pname.value=="")//textbox name=name
{
alert("enter plan name");
document.form.pname.focus();
return false;
    }
if(!(isNaN(document.form.pname.value)))
{
alert("Only alphabets are allowed");
document.form.pname.focus();
return false;
}

if(document.form.rate.value=="0")//textbox name=name
{
alert("enter boat rate");

return false;
    }	
if(document.form.meals.value=="0")//textbox name=name
{
alert("enter meals type");

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
if((document.form.ac[0].checked==false) && (document.form.ac[1].checked==false ))//radiobutton name=gender
{
alert("select ac type");

return false;
}
if((document.form.ea[0].checked==false) && (document.form.ea[1].checked==false ))//radiobutton name=gender
{
alert("select entertainment activities");

return false;
}
if((document.form.ca[0].checked==false) && (document.form.ca[1].checked==false ))//radiobutton name=gender
{
alert("select cultural activities");

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
if((document.form.can[0].checked==false) && (document.form.can[1].checked==false ))//radiobutton name=gender
{
alert("select free cancellation");

return false;
}

if(document.form.night.value=="0")//textbox name=name
{
alert("enter no of nights");

return false;
    }	
if(document.form.day.value=="0")//textbox name=name
{
alert("enter no of days");

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

if(document.form.file.value=="")//textbox name=name
{
alert("upload image");
document.form.file.focus();
return false;
    }	

}
</script>
   </head>
   <body>             
          
          
         
				<form  method="post" name="form">
    <table width="950" align="center" cellpadding="10" cellspacing="20" >
  <tr><td><a href="index.php"><img src="icons/home.png" width="100" height="100"></a></td>
<td><img src="icons/add.jpg" width="150" height="150"></td>
    <th height="20" colspan="2" scope="row"><div align="center" class="style3"><b><font color="#FF0000"><h1>ADD A PLAN</div></th>
	
    </tr> 
	
  <tr>
    <td>Plan name </td>
 
   <td><input type="text" name="pname" placeholder="enter Plan name"  /></td>
 
    <td>Rate</td>

    <td><select name="rate" >
    <option value="0">--Select rate--</option>
    <option value="Rs.10000/-">Rs.10000/-</option>
    <option value="Rs.15000/-">Rs.15000/-</option>
	  <option value="Rs.25000/-">Rs.25000/-</option>
	  <option value="Above Rs.25000/-">Above Rs.25000/-</option>
	 
	</select></td></tr>

<tr bgcolor="#CCCCCC">
  <td>Meals</td>

    <td><select name="meals" >
    <option value="0">--Select meals type--</option>
    <option value="Breakfast only">Breakfast only</option>
    <option value="Breakfast-Lunch">Breakfast-Lunch</option>
	  <option value="Breakfast-Dinner">Breakfast-Dinner</option>
	  <option value="Breakfast-Lunch-Dinner">Breakfast-Lunch-Dinner</option>
<option value="All meals">All meals</option>
	 
	 <option value="No meals">No meals</option>
	 
	</select></td>
	  <td>Bedrooms</td>
	<td><select name="br" >
    <option value="0">--Select bedroom type--</option>
    <option value="Single bedroom">Single bedroom</option>
    <option value="Double bedroom">Double bedroom</option>
	  <option value="Family bedroom">Family bedroom</option>
	  <option value="No Bedrooms">No Bedrooms</option>

	 
	</select></td>
	
    </tr>
    <tr>
	  <td>No of Bedrooms</td>
	
    <td><select name="nbr" >
    <option value="0">--Select bedroom no--</option>
    <option value="One">One</option>
    <option value="Two">Two</option>
	  <option value="Three">Three</option>
	   <option value="Nil">Nil</option>
	  
	 
	</select></td>
	
    
     <td>A/c</td>
   
    <td><input type="radio" name="ac" value="AC" >A/C
<input type="radio" name="ac" value="NON AC" >Non A/C
</td></tr> 
  <tr bgcolor="#CCCCCC">
    <td>Entertainment activities </td>
  
  <td><input type="radio" name="ea" value="yes">Yes
<input type="radio" name="ea" value="no">No    <td>Cultural activities </td>
   <td><input type="radio" name="ca" value="yes">Yes
<input type="radio" name="ca" value="no">No</td>
    </tr>
   <tr>
     <td>No.of persons allowed </td>
   <td><select name="nop" >
    <option value="0">--Select no of persons allowed--</option>
   <option value="20-25">20-25</option>
    <option value="10-20">10-20</option>
<option value="5-10">5-10</option>
	  <option value="Below 5">Below 5</option>
	 
	</select></td>
  <td>Starting point</td>
<td><select name="sp" >
    <option value="0">--Select starting point--</option>
   
    <option value="Alappey">Alappey</option>
<option value="Kochi">Kochi</option>
	  <option value="Kumarakom">Kumarakom</option>
	  <option value="Thumboly">Thumboly</option>
	</select></td></tr><tr bgcolor="#CCCCCC">
  <td>Destination point</td>
<td><select name="dp" >
    <option value="0">--Select destination point--</option>
   
    <option value="Alappey">Alappey</option>
<option value="Kochi">Kochi</option>
	  <option value="Kumarakom">Kumarakom</option>
	  <option value="Thumboly">Thumboly</option>
	</select></td>
  <td>Route</td>
<td><select name="route" >
    <option value="0">--Select route--</option>
   
    <option value="Alappey">Alappey-kumarakom-alappey</option>
<option value="Kochi">Kochi-alappey</option>
	  <option value="Kumarakom">Kumarakom-alappey</option>
	  <option value="Thumboly">Thumboly</option>
	</select></td></tr>



<tr>
  <td>Kitchen facility</td><td><input type="radio" name="kf" value="yes">Yes
<input type="radio" name="kf" value="no">No  </td>
  <td>Balcony</td>
<td><input type="radio" name="bal" value="yes">Yes
<input type="radio" name="bal" value="no">No  </td></tr>
   
<tr bgcolor="#CCCCCC">
  <td>Free cancellation</td>
<td><input type="radio" name="can" value="yes">Yes
<input type="radio" name="can" value="no">No  </td>
     


  <td>No.of nights</td>
<td><select name="night" >
    <option value="0">--Select no of nights--</option>
    <option value="One">One</option>
    <option value="Two">Two</option>
	  <option value="Three">Three</option>
	   <option value="Nil">Above three</option>
	  
	 
	</select></td></tr>
    
<tr>
  <td>No.of days</td>
<td><select name="day" >
    <option value="0">--Select no of days--</option>
    <option value="One">One</option>
    <option value="Two">Two</option>
	  <option value="Three">Three</option>
	   <option value="Nil">Above three</option>
	  
	 
	</select></td>
    

  <td>Accomodation</td>
<td><input type="radio" name="acco" value="yes">Yes
<input type="radio" name="acco" value="no">No   </td></tr>
    

<tr bgcolor="#CCCCCC"> <td>House boat type </td><td><select name="type" >
    <option value="0">--Select boat type--</option>
    <option value="Luxury">Luxury</option>
    <option value="Delux">Delux</option>
<option value="Premium">Premium</option>
	  <option value="Super Delux">Super Delux</option>
	   
	  <option value="standard">Standard</option>
	  
	 
	</select></td><td>Upload photo</td><td><input type="file" name="file" ></td></tr>


    
  <tr bgcolor="#FFCCFF"><td colspan="4" align="center">
   <input type="submit" value="ADD PLAN"   id="submit" name="b" style="background-color:#FF9966;width:150px;height:50px;" onClick="return valid()"/></td>
 
 

 
    </tr>
    
</table>

</form>
<?php
if(isset($_POST['b']))
{


extract($_POST);
$file=$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],"uploads/".$file);

include("../connection.php");
$ob=new connection();
		$sql3="insert into adminplan(name,rate,meals,bedtype,nobed,ac,ea,ca,nop,start,desti,route,kf,balc,cance,night,days,acco,type,photo)
values('$pname','$rate','$meals','$br','$nbr','$ac','$ea','$ca','$nop','$sp','$dp','$route','$kf','$bal','$can','$night','$day','$acco','$type','$file')";
$res3=$ob->execute($sql3);
if($res3>0)
{
echo "<script>
window.onload=function()
{
alert('successfully added plan....!');
window.location='index.php';
}
</script>";
}
}
?>
</body>
</html>