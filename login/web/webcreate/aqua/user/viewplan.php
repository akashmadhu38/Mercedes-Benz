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
<style>
div.img {
    margin: 5px;
    border: 1px solid red;
    float: left;
    width: 300px;
}

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100%;
    height: 170px;
}

div.desc {
        text-align: center;
}


.limit{
text-align: center;
    width:270px;
word-wrap: break-word;

}
</style>
	
   </head>
   <body>             
       <table>
<tr><td align="center"><H1><font color="#FF0000">AVAILABLE PACKAGES</font></td></tr>

<tr><td><a href="userhome.php"><img src="home.png" width="70" height="70"></a></td></tr>

 <TR><TD>  
          <?php
 include("../connection.php");
$ob=new connection();
$sql="select * from adminplan";
$res1=$ob->execute($sql);

while($r=mysqli_fetch_array($res1))
{
         ?>



<div class="img">
  <a target="_blank" href="../admin/uploads/<?php echo $r[20];?>">
   <img src="../admin/uploads/<?php echo $r[20];?>" alt="Trolltunga Norway" >
  </a><div class="desc"><font color="#3366FF"><b><?php echo $r[1];?></b></font></div>
  
<div class="desc"><a href="viewplanmore.php?id=<?php echo $r[0];?>"><font color="#FF0000"><b>Read more...</b></font></a></div><br>
</div>
				
    
 

<?php
}
$sq="select * from companyplan where status=1";
$res=$ob->execute($sq);

while($r1=mysqli_fetch_array($res))
{
         ?>
				
 <div class="img">
  <a target="_blank" href="../owner/uploads/<?php echo $r1[20];?>">
   <img src="../owner/uploads/<?php echo $r1[6];?>" alt="Trolltunga Norway" >
  </a><div class="desc"><font color="#3366FF"><b><?php echo $r1[1];?></b></font></div>
  
<div class="desc"><a href="viewcomplan.php?id=<?php echo $r1[0];?>"><font color="#FF0000"><b>Read more...</b></font></a></div><br>
</div>
				
    

<?php
}
?></TD></TR>
</TABLE>
</form>

</body>
</html>