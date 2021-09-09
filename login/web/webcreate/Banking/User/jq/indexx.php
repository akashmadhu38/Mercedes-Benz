<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" > </script >
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.js"></script>
<script type="text/javascript" src="validation_reg.js"></script>

<link rel="stylesheet" href="style.css" type="text/css" />

<style type="text/css">

.hidden{

display:none;

}

</style>
<script type="text/javascript">

$('.alphaonly').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^a-z]/g,'') ); }
);

$(document).ready(function()

{

$("#form_register").validate(

{

rules:{

'name':{

required: true,
minlength: 3,
maxlength: 20





},
'gender':{

required: true,





},

'district_select':{

required: true,





},
'pan_select':{

required: true,





},
'place_select':{

required: true,





},


'housename':{

required: true,





},
'otp':{

required: true,





},
'mobilenumber':{

required: true,
minlength:10,
  maxlength:10,
   number: true





},
'pincode':{

required: true,

minlength:6,
  maxlength:6,
   number: true



},


'email':{

required: true,

email: true,



},

'web':{

required: true,

url: true

},

'date':{

required: true,

date: true

},

'password':{

required: true,

minlength: 8

},

'confirm':{
required: true,

equalTo: '#password'

}

},

messages:{

'name':{

required: "The name field is mandatory!",

minlength: "Please enter a valid Name!",
maxlength: "Please enter a valid Name!"

},

'housename':{

required: "The house name field is mandatory!"
},
'otp':{

required: "The otp field is mandatory!"
},
'gender':{

required: "This Field Is Mandatory!"
},

'district_select':{

required: "This Field Is Mandatory!"
},
'pan_select':{

required: "This Field Is Mandatory!"
},
'place_select':{

required: "This Field Is Mandatory!"
},
'mobilenumber':{

required: "This Field Is Mandatory!",
minlength: "Please enter a valid mobile number!",
maxlength: "Please enter a valid mobile number!",
number: "Please enter a valid mobile number!"
},
'pincode':{

required: "This Field Is Mandatory!",
minlength: "Please enter a valid pin number!",
maxlength: "Please enter a valid pin number!",
number: "Please enter a valid pin number!"
},

'email':{

required: "The Email is required!",

email: "Please enter a valid email address!",

remote: "The email is already in use by another user!"

},

'web':{

required: "The Web Address is required!"

},

'password':{

required: "The password field is mandatory!",

minlength: "Please enter a password at least 8 characters!"

},

'confirm':{
required: "This field is mandatory!",

equalTo: "The two passwords do not match!"

}

}

});

});

</script>



<!------ Include the above in your HEAD tag ---------->
<style>
.register{

    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
</style>

    <?php
include '../dbcon.php';
function encryptIt($q){
                $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
                $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
                return( $qEncoded );
            }

if(isset($_POST['submit']))
{
$a=$_POST["name"];
$otp=$_POST["otp"];
//echo "<script> alert('hai');</script>";
$b=$_POST["housename"];
$i=$_POST["district_select"];
$f=$_POST["pan_select"];
$j=$_POST["place_select"];
$z=$_POST["pincode"];
$d=$_POST["mobilenumber"];
$e=$_POST["email"];
$password=$_POST["password"];
 $p = $_POST["confirm"];
 $encrypted = encryptIt($p);
 
  $sql8="select * from tbl_otp1 where email='$e' and otp='$otp'";
$result8=mysqli_query($con,$sql8);
$no=mysqli_num_rows($result8);
if($no==0)
{
 $sql9="delete from tbl_otp1 where email='$e'";
$result9=mysqli_query($con,$sql9);
?>
<script>
alert("invalid otp number.. please try again..");
window.location="index.php";
</script>

<?php
}
if($no==1)
{
 
 $sql1="INSERT INTO `login`(`username`, `password`,`roleid`,`status`) VALUES ('$e','$encrypted','3',1)";
$result1=mysqli_query($con,$sql1);

$logid="SELECT `userid` FROM `login` WHERE `username`='$e'";
$result2=mysqli_query($con,$logid);
$row=mysqli_fetch_array($result2);

  $l=$row["userid"];
  $sql2="INSERT INTO `tenants`(`userid`,`name`, `housename`, `placeid`,`pincode`, `phonenum`,`email`,`username`, `password`, `status`) VALUES ($l,'$a','$b','$j','$z','$d','$e','$e','$p',1)";
        
        $res = mysqli_query($con, $sql2);
		$sql10="delete from tbl_otp1 where email='$e'";
$result10=mysqli_query($con,$sql10);
		
	echo"<script>alert('Registration Successful Please Login');</script>";
	}
          
}

?>
<body style="background-image:url(../photos/Luxury-Villa-Thailand.jpg)">
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Rehomes</h3>
                        <p><b>Signup For Users</b></p>
						<form action="../index.php">
                        <input type="submit" name="" value="Login"/><br/>
						</form>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" href="index.php" role="tab" aria-controls="home" aria-selected="true">User</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" href="index2.php" role="tab" aria-controls="profile" aria-selected="false">Owner</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Apply as a User</h3>
								<?php
								$ru=$_GET['email'];
								?>
								 <form method="POST" onSubmit="return" action="#" name="myform"  class="oh-autoval-form" onsubmit="return" id="form_register">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
										
                                            <input type="text" class="form-control" placeholder="Name" value=""  name="name" id="reg_name" class="alphaonly" onkeyup="this.value=this.value.replace(/[^a-z ]/g,'');"/>
                                        </div>
                                        
                                      
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked="checked">
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
										<div class="form-group">
    <input class="form-control" type="text" placeholder="House Name" name="housename" id="reg_hname">
</div>
                                     
                                        <div class="form-group">
										
                                      
                                            <select class="form-control"  name="district_select" id="district_select">
                                               <option disabled="disabled" selected="selected">Select District</option>
											     <?php
            $q = mysqli_query($con, "SELECT did,dname FROM district where status=1");
            //var_dump($q);

            while ($row = mysqli_fetch_array($q)) {
                ?>
              <option value="<?php echo $row['did'] ; ?>"><?php echo $row['dname'];?></option>';
           <?php }
            ?>
            
                                            </select>
                                        </div>
										
										<div class="form-group">
										  <select class="form-control" name="pan_select" id="pan_select">
										    <option disabled="disabled" selected="selected">Select panchayath</option>
                                    <option value="-1">select</option>                  
                        
            
            </select>
			</div>
			<div class="form-group">
										  <select class="form-control" name="place_select" id="place_select">
										    <option disabled="disabled" selected="selected">Select place</option>
                                    <option value="-1">select</option>                  
                        
            
            </select>
			</div>
                                       
										<div class="form-group">
    <input class="form-control" type="text" placeholder="Pincode" name="pincode" id="pincode" >
</div>

<div class="form-group">
    <input class="form-control" type="text" placeholder="Mobile Number" name="mobilenumber" id="idmobile">
</div>                        

 <div class="form-group">
     <input class="form-control" type="text" placeholder="Email" name="email" class="av-email" id="email" value="<?php echo $ru;?>" readonly="">
</div>


<div class="form-group">
    <input class="form-control" type="password" placeholder="Password" name="password" id="password">
</div>                        
                        
<div class="form-group">
    <input class="form-control" type="password" placeholder="Confirm Password" name="confirm" id="confirm">
</div>
<div class="form-group">
    <input class="form-control" type="text" placeholder="Enter Your OTP" name="otp" id="otp">
</div>                        

                                        <input type="submit" class="btnRegister" name="submit" value="Submit" id="reg_submit"/>
                                    </div>
                                </div>
								<center><a href="../login/index.php"><b style="color:#0000FF">Back To Homepage</b></a></center>
                            </div>
                           
                        </div>
                    </div>
                </div> </body>
				
				<script>
			$(document).ready(function() {

                            $("#district_select").on("change", function(){
                                 $district = $('#district_select').val();

                                 $html = "";
                                 $.ajax({
                                     type:'post',
                                     data:{'index':$district},
                                     url:'get_pan.php',
                                     success:function(data){
                                         $data = JSON.parse(data);                                         
                                         $html = '<option value="">--SELECT PANCHAYATH--</option>';
                                         for(var index=0; index<$data.length; index++){
                                            $html += '<option value="'+$data[index][0]+'">' + $data[index][1]+ "</option>";
                                         }
                                         
                                         $("#pan_select").html($html);
                                     }
                                 });
                            });
                            
                            
                            $("#pan_select").on("change", function(){
                                 $taluk = $('#pan_select').val();
                                 //alert($taluk);
                                 $html = "";
                                 $.ajax({
                                     type:'post',
                                     data:{'index':$taluk},
                                     url:'get_place.php',
                                     success:function(data){
                                         $data = JSON.parse(data);
                                         
                                         
                                         $html = '<option value="">--SELECT PLACE--</option>';
                                         for(var index=0; index<$data.length; index++){
                                            $html += '<option value="'+$data[index][0]+'">' + $data[index][1]+ "</option>";
                                         }
                                         
                                         $("#place_select").html($html);
                                     }
                                 });
                            });
                            
			});
                              
                        
                        
		</script>
