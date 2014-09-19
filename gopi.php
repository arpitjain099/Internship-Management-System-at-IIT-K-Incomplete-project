<html>

<head><link rel="stylesheet" type="text/css" href="background.css">
	<title>Manage Applications</title>
	<form method="POST" autocomplete="off" ACTION="gopisubmission.php"> 
Company Name: <input type="text" name="companyname"><br>
Password: <input type="password" name="password"><br>
</center>
<INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1">
</form>
<?php

require 'class.phpmailer.php';

$mail = new PHPMailer;

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.cc.iitk.ac.in';  // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'arpitj';                            // SMTP username
$mail->Password = 'reddy123';                           // SMTP password
//$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'arpitj@iitk.ac.in';
$mail->FromName = 'Mailer';
//$mail->AddAddress('josh@example.net', 'Josh Adams');  // Add a recipient
$mail->AddAddress('arpitj@iitk.ac.in');               // Name is optional
//$mail->AddReplyTo('info@example.com', 'Information');
//$mail->AddCC('cc@example.com');
//$mail->AddBCC('bcc@example.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->AddAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->AddAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->Send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';?>
<?php  /*
 
require("class.phpmailer.php"); // path to the PHPMailer class
 
$mail = new PHPMailer();  
 
$mail->IsSMTP();  // telling the class to use SMTP
$mail->Mailer = "smtp";
$mail->Host = "ssl://smtp.gmail.com";
$mail->Port = 465;
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "arpitjain099@gmail.com"; // SMTP username
$mail->Password = "a16232325z"; // SMTP password 
 
$mail->From     = "arpitjain099@gmail.com";
$mail->AddAddress("arpitjain099@gmail.com");  
 
$mail->Subject  = "First PHPMailer Message";
$mail->Body     = "Hi! \n\n This is my first e-mail sent through PHPMailer.";
$mail->WordWrap = 50;  
 
if(!$mail->Send()) {
echo 'Message was not sent.';
echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
echo 'Message has been sent.';
}*/
?>