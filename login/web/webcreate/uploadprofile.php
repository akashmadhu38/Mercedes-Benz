<?php
include("testing.php");
?>
<script type='text/javascript'>

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

<?php
	
	if(isset($_POST["btnsubmit"]))
	{
		$photo="";
		$sign="";
		$photo=$_FILES['photo']['name'];
		if($photo!="")
		{
			$tempnamep=$_FILES['photo']['tmp_name'];
			move_uploaded_file($tempnamep,"../uploads/".$photo);
		}
		
		$sign=$_FILES['sign']['name'];
		if($sign!="")
		{
			$tempnames=$_FILES['sign']['tmp_name'];
			move_uploaded_file($tempnames,"../uploads/".$sign);
		}
		
		$resume=$_FILES['resume']['name'];
		if($resume!="")
		{
			$tempnames=$_FILES['resume']['tmp_name'];
			move_uploaded_file($tempnames,"../uploads/".$sign);
		}
		//$sign="../uploads/".$row["sign"];
		
	$res=$obj->execute("select * from booking where uname='". $_SESSION["regno"] ."'");
	if($row=mysqli_fetch_array($res))
	{
		if($photo!="")
		{
			$obj->execute("update booking set photo='$photo' where regno='". $_SESSION["regno"] ."'");
		}
		if($sign!="")
		{
			$obj->execute("update booking set sign='$sign' where regno='". $_SESSION["regno"] ."'");
		}
		if($resume!="")
		{
			$obj->execute("update booking set res='$resume' where regno='". $_SESSION["regno"] ."'");
		}
	}
	else
	{
		$obj->execute("insert into booking values(null,'". $_SESSION["regno"] ."', '$photo', '$sign','$resume')");
	}
		echo $obj->msg("Profile Details Uploaded Successfully");
	}
?>

<table width="100%">
  <tr>
    <td colspan="3" class="heading">upload profile </td>
  </tr>
  <tr>
    <td width="33%">&nbsp;</td>
    <td width="33%">&nbsp;</td>
    <td width="34%">&nbsp;</td>
  </tr>
  <tr>
    <td>Photo (.jpg/.jpeg/.bmp/.png) </td>
    <td>Signature (.jpg/.jpeg/.bmp/.png) </td>
    <td>Resume (.docx/.doc/.pdf) </td>
  </tr>
  <tr>
    <td><input type="file" name="photo" onchange="preview_photo(this);" /></td>
    <td><input type="file" name="sign" onchange="preview_sign(this);" /></td>
    <td><input type="file" name="resume" /></td>
  </tr>
  <tr>
    <td>
	<?php
	$photo="";
	$sign="";
	$res=$obj->execute("select * from resume where regno='". $_SESSION["regno"] ."'");
	if($row=mysqli_fetch_array($res))
	{
		$photo="../uploads/".$row["photo"];
		$sign="../uploads/".$row["sign"];
	}
			if($photo=="")
			{
				$photo="assets/img/profile.png";
			}
			if($sign=="")
			{
				$sign="assets/img/signature.png";
			}
			 
	?>
	<img id="imgphoto" width="175" height="200" src="<?php echo $photo; ?>" />
	</td>
    <td>
	<img id="imgsign" width="200" height="125" src="<?php echo $sign; ?>" /></td>
    <td><input type="submit" name="btnsubmit" value="UPLOAD" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>




<?php
include("footer.php");
?>
