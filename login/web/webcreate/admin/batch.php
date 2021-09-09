<?php
$_SESSION["heading"]="faculty registration";
//include("header.php");
include("../db/connection.php");
$obj=new connection();

?>
<style>
#loadingDiv{
  position:fixed;
  top:0px;
  right:0px;
  width:100%;
  height:100%;
  background-color:#666;
  background-image:url(../images/loading.gif);
  background-repeat:no-repeat;
  background-position:center;
  z-index:10000000;
  opacity: 0.4;
  filter: alpha(opacity=40); /* For IE8 and earlier */
}
</style>
<script src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$("#btn").click(function(){

 var batch=$("#batch").val();
var sem=$("#sem").val();
document.getElementById("loadingDiv").style.display="block";
$.ajax({
type:"post",
url:"../ajax/options.php?opt=int",
data:{sem:sem,batch:batch},
success:function(response)
{
document.getElementById("st").innerHTML=response;
document.getElementById("loadingDiv").style.display="none";
//alert(response);
},
error:function(response){
alert(response.message);
}
});
});



$(document).on("click","#save",function(){
 
//alert('reached');
 var batch=$("#batch").val();
 var sem=$('#sem').val();
  var subj=$('#sub').val();
  if(subj!=0)
  {
 //alert(date);
 var table=document.getElementById("st");
 var rows=document.getElementById("st").rows.length;
 var cols=document.getElementById("st").rows[0].cells.length;
 
var atn_arr=new Array();

 for(var i=1;i<rows-1;i++)
 {
  var r=table.getElementsByTagName("tr")[i];
  var reg_no=r.getElementsByTagName("td")[0].innerHTML;
	var txt_col=r.getElementsByTagName("td")[2];
	var textbox=txt_col.getElementsByTagName("input")[0];
	var mark=textbox.value;
	//alert(mark);
	
   var elm={
		 reg:reg_no,
		 mrk:mark 
   };
  
   atn_arr.push(elm); 
 }
 var array=JSON.stringify(atn_arr);
 document.getElementById("loadingDiv").style.display="block";
 
 $.ajax({
 type:"post",
// url:"../ajax/options.php?opt=atn_add?batch="+batch+"&sem="+sem,
 url:"../ajax/options.php?opt=int_add",
 data:{arr:array,batch:batch,sem:sem,sb:subj},
 success:function(response)
 {
 document.getElementById("loadingDiv").style.display="none";
  alert(response);
 },
 error:function(response)
 {
  document.getElementById("loadingDiv").style.display="none";
   alert("error"+response.message);
 }
 });
 }
 else
 {
   alert('Choose Subject');
 }
 });

});
function page_load()
{
document.getElementById("loadingDiv").style.display="none";
}
</script>

<body onLoad="page_load();">
<div id="loadingDiv">
    <div>
        <h7>Please wait...</h7>
    </div>
</div>
<form name="form1" method="post">
<table width ="100" class="tbl">
  <tr>
  <td colspan="3" align="center">Add Internal Mark</td>
  </tr>
 
  <tr>
  <td>Batch</td>
  <td><select name="batch" id="batch">
  <option value="0">SELECT</option>
  <option value="2017-2020">2017-2020</option>
  <option value="2018-2021">2018-2021</option>
  <option value="2019-2022">2019-2022</option>
  </select></td>
  </tr>
   <tr>
    <td>semester</td>
    <td><select name="semester" id="sem">
      <option value="0">SELECT</option>
      <option value="1">SEM 1</option>
      <option value="2">SEM 2</option>
      <option value="3">SEM 3</option>
      <option value="4">SEM 4</option>
      <option value="5">SEM 5</option>
      <option value="6">SEM 6</option>
    </select></td>
  </tr>
  
  <tr>
    <td colspan="2" align="center"><input type="button" value="SEARCH" id="btn"/></td>
    </tr>
</table>
<table>

</table>
<table id="st">
</table>
</form>
	<?php
if(isset($_POST["btnadd"]))
{
$course=$_POST["txtcourse"];
$sem=$_POST["semester"];
$subject=$_POST["txtsub"];

$sql="insert into course values(NULL,'$txtcourse','$semester','$txtsub')";
$obj->execute($sql);
?>
<script>alert('Added successfully')</script>
<?php
}
?>
<?php
//include("footer.php");
?>
</body>

