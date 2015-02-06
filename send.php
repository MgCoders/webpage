<?php

// Here we get all the information from the fields sent over by the form.
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

	$to = 'info@mgcoders.uy';
	$subject = 'Mensaje a travez de MgCoders.uy: '.$subject;
	$message = 'De: '.$name."\r\n".'Email: '.$email."\r\n".'Asunto: '.$subject."\r\n\r\n".$message;
	$headers = 'From: sistemas@mgcoders.uy' . "\r\n";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
    mail($to, $subject, $message, $headers); //This method sends the mail.
	echo "Mensaje enviado correctamente."; // success message
}else{
	echo "Mail inv&acute;lido.";
}
	

	
	
	


?>