<?php
session_start();
if(!isset($_SESSION['uname'])) { //if not yet logged in
   header("Location: ../login.php");// send to login page
  } 
$id=$_SESSION['id'];

include("header.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<script type="text/javascript">
function valid()
{

if(document.form.pname.value=="")//textbox name=name
{
alert("enter your plan name");
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
alert("enter your plan rate");

return false;
    }

if(document.form.desc.value=="")//textbox name=name
{
alert("enter your plan description");
document.form.desc.focus();
return false;
    }
}
</script>
	
   </head>
   <body>             
          
          
         
				<form  method="post" name="form">
.
    <table align="center" cellpadding="10" cellspacing="20" height="800">
  <tr >
    <td><img src="icons/d.png" height="100"></td><div align="center" class="style3"><td align="center"><b><font color="#FF0000">ADD YOUR OWN PLAN</div></td>
	
    </tr> 
	
  <tr>
    <td><font color="#FFFF00">Plan name </td>
 
   <td><input type="text" name="pname" placeholder="enter Plan name" /></td>
 </tr><tr>   <td><font color="#FFFF00">Rate</td>

    <td><select name="rate" >
    <option value="0">--Select rate--</option>
    <option value="Rs.10000/-">Rs.10000/-</option>
    <option value="Rs.15000/-">Rs.15000/-</option>
	  <option value="Rs.25000/-">Rs.25000/-</option>
	  <option value="Rs.35000/-">Rs.35000/-</option>
	 
	</select></td></tr>
	  <tr>
    <td><font color="#FFFF00">image </td>
 
   <td><input type="file" name="file" required /></td>
 </tr>

    <tr><td><font color="#FFFF00">Add plan description</td><td><textarea name="desc" placeholder="Enter your plan details" rows="15" cols="80"></textarea></td></tr>
  <tr ><td colspan="4" align="center">
   <input type="submit" value="ADD PLAN" style="background-color:#FF9900;width:150px;height:40px; "   id="submit" name="b" onClick="return valid()"/></td>
 
 

 
    </tr>
    
</table>

</form>
<?php
if(isset($_POST['b']))
{


extract($_POST);

include("../connection.php");
$ob=new connection();
$file=$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],"uploads/".$file);
		 $sql3="insert into companyplan(pname,rate,des,loginid,status,photo)
values('$pname','$rate','$desc','$id',0,'$file')";
$res3=$ob->execute($sql3);
if($res3>0)
{
echo "<script>
window.onload=function()
{
alert('successfully added plan....!');
window.location='home.php';
}
</script>";
}
}
?>
</body>
</html>