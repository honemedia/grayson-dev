<?php
// Get Data	
$name = strip_tags($_POST['firstname']);
$email = strip_tags($_POST['lastname']);
$phone = strip_tags($_POST['org']);
$message = strip_tags($_POST['phone']);
$message = strip_tags($_POST['email']);
$message = strip_tags($_POST['offer']);

// Send Message
mail( "info@maysundays.com", "Contact Form Submission",
"Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message\n",
"From: Schedule Checker <info@maysundays.com>" );
?>