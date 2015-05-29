<?php
	
	// Code for Sending Email
    
	$name = $_POST["name"]; //stores name as var
	$email = $_POST["email"]; //stores email as var
	$msg = $_POST["message"]; //stores comment as var
	$header = "From: <julianvanriet@gmail.com>";

    mail("julianvanriet@gmail.com", "New Subscriber", $name . $email . $msg, $header); 

    header('Location: http://localhost/LandingPage/contacts.php');

?>