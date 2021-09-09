<?php
session_start();
if(!isset($_SESSION['uname'])) { //if not yet logged in
   header("Location: ../login.php");// send to login page
  } 
include("header.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

	<script type="text/javascript">
function valid()
{

if(document.form.com.value=="")//textbox name=name
{
alert("enter your complaint");
document.form.com.focus();
return false;
    }


	
}
</script>
   </head>
   <body>             
          
          
         
				<form  method="post" name="form" enctype="multipart/form-data">
.
    <table width="950" align="center" cellpadding="10" cellspacing="20">
    <tr><td><a href="userhome.php"><img src="home.png" width="70" height="70"></a></td></tr>

<tr >
  <td align="center" colspan="2"><b>Give a complaint </td>
</tr>

<?php 
$id=$_SESSION['id'];
?>
    
    <tr ><TD >To </td><td>Site Administrator</td></tr>
	 <tr><TD >Write your Complaint</td>
	<td><textarea name="com" rows="10" cols="70" placeholder="enter your complaint" ></textarea>
</td></tr>
	<tr><td align="center" colspan="2" ><input type="submit" value="SEND" name="b" style="background-color:#FFCC00;WIDTH:130px;height:40px " onClick="return valid()">
 <input type="hidden" value="<?php echo $r[0];?>" name="h">

 
 
</table>

</form>
<?php
if(isset($_POST['b']))
{


extract($_POST);
include("../connection.php");
$ob=new connection();
		$sql3="insert into complaint(floginid,comp)values($id,'$com')";
$res3=$ob->execute($sql3);
if($res3>0)
{
echo "<script>
window.onload=function()
{
alert('successfully send complaint....!');
window.location='userhome.php';
}
</script>";
}
}
?>
</body>
</html>