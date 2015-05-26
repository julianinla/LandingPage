<?php
	
	// Code for Sending Email
    
	$name = $_POST["name"]; //stores name as var
	$email = $_POST["email"]; //stores email as var
	$msg = $_POST["message"]; //stores comment as var

    mail("julianinla@me.com", $name, $email, $msg); 

    header('Location: http://localhost/LandingPage/index.php');

?>