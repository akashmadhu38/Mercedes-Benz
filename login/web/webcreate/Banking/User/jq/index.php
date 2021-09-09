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

$(document).ready(function()

{

$("#form_register").validate(

{

rules:{

'email':{

required: true,

email: true,



},

messages:{

'email':{

required: "The Email is required!",

email: "Please enter a valid email address!",

remote: "The email is already in use by another user!"

},


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
	//error_reporting(0);
include 'db.php';
 session_start();
if (isset($_POST['submit'])) {
	$email=$_POST['email'];
	
	
	
	$n = 6;
		// Function to generate OTP 
   function generateNumericOTP($n) { 
       
       // Take a generator string which consist of 
       // all numeric digits 
       $generator = "1357902468"; 
   
       // Iterate for n-times and pick a single character 
       // from generator and append it to $result 
       
       // Login for generating a random character from generator 
       //	 ---generate a random number 
       //	 ---take modulus of same with length of generator (say i) 
       //	 ---append the character at place (i) from generator to result 
   
       $result = ""; 
   
       for ($i = 1; $i <= $n; $i++) { 
           $result .= substr($generator, (rand()%(strlen($generator))), 1); 
       } 
   
       // Return result 
       return $result; 
   }
   // Main program 
  
   $pa=generateNumericOTP($n); 
   $sql="INSERT INTO `tbl_otp1`(`email`, `otp`, `count`,`status`) VALUES ('$email','$pa',3,1) ";
//    print_r($sql);
//    return;
   $r2=mysqli_query($con,$sql);
  // $link=
    // $pass=$row['password'];
    // $pa=base64_decode($pass);
     $p="Your OTP:".$pa;
	
	
	
     require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer();
  
  //Enable SMTP debugging.
  $mail->SMTPDebug = 1;
  //Set PHPMailer to use SMTP.
  $mail->isSMTP();
  //Set SMTP host name
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
  //Set this to true if SMTP host requires authentication to send email
  $mail->SMTPAuth = TRUE;
  //Provide username and password
  $mail->Username = "suryasunder181@gmail.com";
  $mail->Password = "Surya123*";
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "tls";
  $mail->Port = 587;
  //Set TCP port to connect to
  
 
  
$mail->addAddress($email);
  
  $mail->isHTML(true);

  $mail->Subject = "Rehomes Registration";
  $mail->Body = "<i>this is your OTP:</i>".$p;
  $mail->AltBody = "For enter your  OTP in ";
  if(!$mail->send())
   {
      echo "<script>alert('Authentication not Success Please try again');window.location='index.php';</script>";
   //echo "Mailer Error: " . $mail->ErrorInfo;
  }
  else
  {
      echo "<script>alert('Authentication Success Please check your mail');window.location='indexx.php?email=$email';</script>";
   //echo "Message has been sent successfully";
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
								 <form method="POST" name="myform"  class="oh-autoval-form" id="form_register">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                       
                                        
                                      
                                 

 <div class="form-group">
     <input class="form-control" type="text" placeholder="Enter Your Email Id" name="email" class="av-email" id="email" required>
</div>
            

                                        <input type="submit" class="btnRegister" name="submit" value="Submit" id="reg_submit" />
                                    </div>
                                </div>
								<center><a href="../index.php"><b style="color:#0000FF">Back To Homepage</b></a></center>
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
