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
$mail->FromName = 'Arpit Jain';
//$mail->AddAddress('josh@example.net', 'Josh Adams');  // Add a recipient
$a=$_POST["username"];
$mail->AddAddress('$a');               // Name is optional
//$mail->AddReplyTo('arpitj@iitk.ac.in', 'Information');
$mail->AddCC('arpitj@cse.iitk.ac.in');
//$mail->AddBCC('bcc@example.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->AddAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->AddAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Message: SPO';
//$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->Body    = '$_POST["message"]';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->Send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';?>