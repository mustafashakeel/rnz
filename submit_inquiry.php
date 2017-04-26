<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>RNZ</title>

</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="5%">&nbsp;</td>
    <td width="95%"><span class="style14">
      <?php

if(!empty($_POST['name'])) {


	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$inquiry = $_POST['inquiry'];

	$s_name = $name; 
	$s_mail = $email;
	$subject = "RNZ Gorcery & Meat website's Inquiry Received";

#	$to = "info@tajmahalfoods.ca";  
$to = "shoaeb@rnzmeat.ca";
	
	$body = "From: $name\nPhone Number: $phone\nEmail: $email\nInquiry: $inquiry\n";
		
	$header = "From: $s_name <$s_mail>\n";    
	$header .= "Reply-To: $s_name <$s_mail>\n";    
	$header .= "X-Mailer: PHP/" . phpversion() . "\n";    
	$header .= "X-Priority: 3";	

	if(@mail($to, $subject, $body, $header))
	{
		echo "<p>Thank You for contacting us. We will definitely get back to you within the next 24 hours.</p>";
	} 
	else 
	{        
		echo "<h3>ERROR: Email could not be sent. Please try again.</h3>";
	}
	
} 
else 
{
	echo "<h3>Sorry, cannot send an empty form.</h3>";
}

?>
    </span>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
