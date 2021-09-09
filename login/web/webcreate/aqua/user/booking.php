<?php
session_start();
if(!isset($_SESSION['uname'])) { //if not yet logged in
   header("Location: ../login.php");// send to login page
  } 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<script type="text/javascript">
function valid()
{
	if(document.form.date.value=="")//textbox name=name
{
alert("enter your date of stay");
document.form.date.focus();
return false;
    }
if(document.form.type.value=="0")//textbox name=name
{
alert("enter your card type");
document.form.type.focus();
return false;
    }
if(document.form.cvv.value=="")//textbox name=name
{
alert("enter your credit card no");
document.form.cvv.focus();
return false;
    }

	if(isNaN(document.form.cvv.value))
{
alert("Only numbers are allowed");
document.form.cvv.focus();
return false;
}
if(document.form.exp.value=="")//textbox name=name
{
alert("enter expiry date");
document.form.exp.focus();
return false;
    }
}
</script>
	
   </head>
   <body background="../images/House-Boat-in-Goa.jpg">             
          
          
         
				<form  method="post" name="form" enctype="multipart/form-data">
.
    <table width="650" align="center" cellpadding="10" cellspacing="20">
<tr><td><a href="search.php">Back To search</a></td></tr>
  <tr bgcolor="#FFCCFF">

    <TD align="center" colspan="2">HOUSE BOAT BOOKING</td>
	
    </tr> 
	 <tr>
    <td><b><font color="#CC0000">Date of stay</td>
<?php
$a=date("Y-m-d");
?>
    <td><input type="date" name="date" min="<?php echo $a;?>" ></td></tr>
 
    

 
 <tr>    <td><b><font color="#CC0000">Card type </td>

    <td><select name="type" >
    <option value="0">--Select card type--</option>
    <option value="Debit card">Debit card</option>
    <option value="Credit card">Credit card</option>
	  <option value="Visa card">Visa card</option>
	  <option value="Master card">Master card</option>
	 
	</select></td></tr><tr> <td><b><font color="#CC0000"> &nbsp; &nbsp; &nbsp; &nbsp; CVV</td>
  <td><input type="text" name="cvv" placeholder="Enter your cvv no"></td></tr>
<?php
$a=date("Y-m-d");
$bid=$_GET['id'];
$amt=$_GET['amt'];
$oid=$_GET['oid'];
?>
<TR><td><b><font color="#CC0000">Expiry date</td><td><input type="date" name="exp" min="<?php echo $a;?>"></td></TR>
<TR><td><b><font color="#CC0000">Date of payment</td><td><input type="text" name="pay" value=<?php echo date("d/m/Y");?>></td></TR>
  <tr bgcolor="#FFCCFF"><td colspan="2" align="center">
   <input type="submit" value="BOOK"   id="submit" name="b" onClick="return valid()"/></td>
 
 

 
    </tr>
    
</table>

</form>
<?php
if(isset($_POST['b']))
{

$id=$_SESSION['id'];

extract($_POST);

include("../connection.php");
$ob=new connection();
		$sql3="insert into booking(bid,loginid,ctype,exp,cvv,amt,date)
values($bid,$id,'$type','$exp','$cvv','$amt','$date')";
$res3=$ob->execute($sql3);
$new="";
$new=$amt*(10/100);


$p="select max(bookid) from booking ";
$o=$ob->execute($p);

$j1=mysqli_fetch_array($o);

$bookid=$j1[0];

$y="insert into adminaccount(bal,dateofpay,loginid)
values('$new','$pay',$id)";
$re=$ob->execute($y);
$n="";
$n=$amt-$new;

$r="select * from addboat where bid=$bid";
$y=$ob->execute($r);

$j=mysqli_fetch_array($y);

$bna=$j[1];
$m="insert into owneraccount(bal,floginid,paydate,ownid,boatname)
values('$n',$id,'$pay',$oid,'$bna')";
$re1=$ob->execute($m);
if($re1>0)
{
?>
<a href="viewbookdetails.php?bookid=<?php echo $bookid;?> "><h1>View Booking Details</a>
<?php
}
}
?>
</body>
</html>