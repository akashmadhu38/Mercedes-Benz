<table bgcolor="#C0C0C0" width="950" align="center"><tr height="50"><td align="center" colspan="2"><font color="#FF0000">Searched boat details</font></td></tr><?php
$q=$_GET["q"];
 include("../connection.php");
$ob=new connection();
$sql="select * from addboat where bname like '$q%'";
$res1=$ob->execute($sql);

while($r=mysqli_fetch_array($res1))
{?>

		<tr bgcoor="#6699CC" >
    <TD rowspan="4" align="center"><img src="uploads/<?php echo $r[19];?>" height="200" width="290" ></TD></tr>
    <tr ><TD ><?php echo $r[1];?></td></tr>
	 <tr><TD ><?php echo $r[2];?></td></tr>
	
	<tr><td >
 <a href="viewboatmore.php?id=<?php echo $r[0];?>"><font color="#FF0000">View more...</font></a></td></tr>
 

 <?php


}
?>