<?php
// Get Data	

$subject = strip_tags($_POST['subject']);
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$message = strip_tags($_POST['message']);

// Send Message
mail( "mason@honemedia.com", "Contact Form Submission",
"Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message\n",
"From: Graysonfurniture.com <mason@honemedia.com>" );
?>