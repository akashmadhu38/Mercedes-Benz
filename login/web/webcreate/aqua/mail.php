<?php 
$email=$_SESSION["email"];
$from="MERECEDES BENZ";
$subject=$_SESSION["subject"];
$message=$_SESSION['message'];
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'webapplication003@gmail.com';   // SMTP username
$mail->Password = 'logicsoft'; 					   // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('webapplication003@gmail.com', 'MERECEDES BENZ');
$mail->addReplyTo('webapplication003@gmail.com', 'MERECEDES BENZ');
$mail->addAddress($email);   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<p>Subject</p>'.$subject;
$bodyContent .= '<p>From :. </p>'.$from;
$bodyContent .= '<p>Message:. </p>'.$message;

$mail->Subject = $subject;
$mail->Body    = $bodyContent;
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '&nbsp;';
}

//header("location:../compose.php");
?>
