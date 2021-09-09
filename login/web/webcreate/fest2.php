<html>
<body>
<table border="1">
<tr>
<th>COLLEGE NAME</th>
<th>STUDENT NAME</th>
<th>REGESTERED ID</th>
<th>MOBILE NUMBER</th>
<th>EVNENTS</th>
</tr>
<tr>
<td>
<?php
if($_POST)
$clgname=$_POST['clgname'];
echo $clgname;
?>
</td>
<td>
<?php
if($_POST)
$stname=$_POST['stname'];
echo $stname
?>
</td>
<td>
<?php
if($_POST)
$rid=$_POST['rgid'];
echo $rid;
?>
</td>
<td>
<?php
if($_POST)
$mo=$_POST['mob'];
echo $mo;
?>
</td>
<td>
<?php
if($_POST)
$ev=$_POST['dropdown'];
echo $ev;
?>
</td>
</tr>
</body>
</html>