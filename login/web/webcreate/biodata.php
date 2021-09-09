
<html>
<head>
<script type="text/javascript">
function validation()
{
	var x=document.biodata["Form1"]["name"].value;
	if(x=="")
	{
		alert("name must be filled out");
		return false;
	}
}
</script>
</head>
<body bgcolor="black"><center><h1 style="color:white">BIODATA</center
<form name="Form1"onsubmit="return validateForm()" method="POST">
<h4 align="center" style="color:white">NAME <input type="text" name="name"/>
<h4 align="center" style="color:white">PLACE<input type="text" name="place"/>
<h4 align="center" style="color:white">AGE<input type="text" name="age"/>
<h4 align="center"style="color:white">ADDRESS<input type="text" name="address"/>
<h4 align="center" style="color:white">GENDER<input type="text" name="gender"/>
<h4 align="center" style="color:white">MOBILE<input type="text" name="mobile"/>
<h4 align="center" style="color:white">EMAIL <input type="text" name="email"/>
<h4 align="center"style="color:white"><input type="submit" value="SUBMIT"/>
</form>
</body>
</html>