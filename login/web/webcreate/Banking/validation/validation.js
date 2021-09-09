// JavaScript Document
var flag_pin;
var flag_mobile;
var flag_email;
var flag_pwd;
var flag_image;

function fn_allLetter(name)
{ 
        var letters = /^[A-Za-z]+$/;
        if(name.value.match(letters))
        {
            return true;
        }
        else
        {
            alert('Only Characters are allowded');
            name.value="";
            name.focus();
            return false;
        }
}


function fn_checkpin(pin)
{
       var CheckZipCode = /(^\d{6}$)/;
       if(CheckZipCode.test(pin.value))
       {
             return true;
       }
       else
       {
             alert("Enter Valid PIN Code");
			 pin.value="";
			 pin.focus();
			 return false;
       }
}


function fn_checkmobile(mobile)
{
	   var CheckMobile = /(^\d{10}$)/;
       if(CheckMobile.test(mobile.value))
       {
		 
             return true;
       }
       else
       {
		     
             alert("Enter Valid Mobile No.");
			 mobile.value="";
			 mobile.focus();
			 return false;
       }
}

function fn_checkemail(mail) 
{
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(mailformat.test(mail.value))
	{
		flag_email=0;
		return true;
	}
	else
	{
		flag_email=1;
		alert("You have entered an invalid email address!");
		mail.value="";
		mail.focus();
    	return false;
	}
}

function fn_checknumber(text)
{
	var num = /^[0-9]+$/;
	if(num.test(text.value))
	{
		return true;
	}
	else
	{
		alert('Numbers are allowded');
		return false;
	}
}

function fn_compare_pwd(pwd,cpwd)
{
	if(pwd.value==cpwd.value)
	{
		flag_pwd=0;
		return true;
	}
	else
	{
		flag_pwd=1;
		alert('Password Mismatch');
		return false;
	}
}

function fn_checkimage(file,img) 
{
	var fuData = file;
    var FileUploadPath = fuData.value;

//To check if user upload any file
    if (FileUploadPath == '') 
	{
    	alert("Please upload an image");
		flag_image=1;
		return false;
	} 
	else
	{
    	var Extension = FileUploadPath.substring(
        FileUploadPath.lastIndexOf('.') + 1).toLowerCase();
		//The file uploaded is an image
		if (Extension == "gif" || Extension == "png" || Extension == "bmp"
                    || Extension == "jpeg" || Extension == "jpg") 
		{
			flag_image=0;
			// To Display
            if (fuData.files && fuData.files[0])
			{
            	var reader = new FileReader();
                reader.onload = function(e) 
				{
					img.src=e.target.result;
				}
                reader.readAsDataURL(fuData.files[0]);
			}
		}
		//The file upload is NOT an image
		else
		{
			flag_image=2;
            alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
			return false;
		}
	}
}

function fn_weburl(str)
{
    var re = /^(http[s]?:\/\/){0,1}(www\.){0,1}[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,5}[\.]{0,1}/;
    if (!re.test(str)) {
        alert("url error");
        return false;
    }
    else
    {
        return true;
        alert("Invalid Web URL");
    }
}

function fn_uname_nsa(str)
{
    var letters = /^[0-9a-zA-Z]+$/;
    if (str.value.match(letters)) {
        alert('Your registration number have accepted : you can try another');
        document.form1.text1.focus();
        return true;
    }
    else {
        alert('Please input alphanumeric characters only');
        return false;
    }
}

function fn_null_label(lbl,value)
{ 
	if(value=0)
	{
		lbl.textContent = "";
		return true;
	}
	else
	{
		lbl.textContent = "***";
		return false;
	}
}
function fn_redirect(url)
{
	window.location=url;
}
function dis_back()
{
	setTimeout("preventBack()", 0);
    window.onunload=function(){null};
}
function preventBack()
{
	window.history.forward();
}

    