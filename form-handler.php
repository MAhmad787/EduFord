<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'mahmadmaqbool787@gmail.com';
$subject = 'New Form Submission';
$email_body =   "User Name: $name.\n" .
    "User Email: $email.\n" .
    "User Subject: $subject.\n" .
    "User Message: $message.\n";

$to = 'mahmadmaqbool787@gmail.com';

$header = "From: $email_form \r\n";
$header .= "Reply-To: $email \r\n";

mail($to, $subject, $email, $email_body, $header);
header("Location: contact.html");
