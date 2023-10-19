<?php
	$name = $_GET['name'];
	$email = $_GET['email'];
	$msg = $_GET['message'];
	$emailTo = "gyka2006@yahoo.com";
	$subject = "De la site-ul web";
	$emailMsg = "Email de la ".$name."\n";
	$emailMsg.= "Email: ".$email."\n";
	$emailMsg.= "Continut: \n";
	$emailMsg.= $msg;
	$headers = 'From: Contact Form';
	@mail($emailTo, $subject, $emailMsg, $headers);
	header("Location: index.html");
	
?>