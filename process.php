<?php
// Get Data	

$subject = strip_tags($_POST['subject']);
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$message = strip_tags($_POST['message']);

// Send Message
mail( "mason@honemedia.com", "Contact Form Submission",
"Topic: $subject\nName: $name\nEmail: $email\nMessage: $message\n",
"From: Grayson Furniture <mason@honemedia.com>" );
?>