<?php
$email= $_POST['email'];
$message= $_POST['message'];
 
$to = "xunter216@gmail.com";
$subject = "This is the subject line";
 
$txt ="Name = ". $name . "\r\n  Email = "
    . $email . "\r\n Message =" . $message;
 
$headers = "From: noreply@demosite.com" . "\r\n" .
            "CC: somebodyelse@example.com";
if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}