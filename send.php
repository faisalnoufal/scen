<?php
	$userName 		= $_POST['Full_Name'];
	$phoneNumber    = $_POST['Telephone_Number'];
	$userEmail	 	= $_POST['Email_Address'];
	$userMessage 		= $_POST['Your_Message'];
	$to 			= "farizafaisal2007@gmail.com";
	$subject 		= "Email from Scen Cyber Security Lab | Contact form";
	$body 			= "Information Submitted:";
	$body .= "\r\n Name: " . $userName;
	$body .= "\r\n Phone: " . $phoneNumber;
 	$body .= "\r\n Email: " . $userEmail;
	$body .= "\r\n Message: " . $userMessage;
    mail($to, $subject, $body);
?>

<script type="text/javascript">
    window.location = "thankyou.html"
</script>