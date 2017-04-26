<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$subject = "RNZ website's Inquiry Received";

  
	$to = "shoaeb@rnzmeat.ca";
	
	if (@mail($to, $subject, $message, "From: " . $name, "Email: " . $email: ))
	{
	echo "<p>Thank You for contacting us. We will definitely get back to you within the next 24 hours.</p>";
	} 
	else 
	{        
		echo "<h3>ERROR: Email could not be sent. Please try again.</h3>";
	}
	
?>
    