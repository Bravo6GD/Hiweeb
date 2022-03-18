<?php

$to_email = "kusal.bista@sifal.deerwalk.edu.np";
$subject = "Simple Email Test via PHP";
$body = "Namaskar Nepali le payo vane garxa";
$headers = "From: KP Oli";
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}