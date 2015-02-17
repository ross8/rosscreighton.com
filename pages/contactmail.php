<div class="container">
<?php
	$first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$subject_form = $_POST['subject'];
	$message = $_POST['message'];
	$to = "rosson.creighton@gmail.com";
	$subject = "Message from $last_name, $first_name : $subject_form";
	$message ="
				<html>
				<head>
				</head>
				<body>
				<h3>Message from rosscreighton.com:</h3>
				<p>Name:<strong> $first_name $last_name</strong></p>
				<p>Email:<strong> $email</strong></p>
                                <p>Subject:<strong> $subject_form</strong></p>
				<p>Message:<strong> $message</strong></p>
				</body>
				</html>";
	$message = wordwrap($message, 70, "\r\n");
	$mailheader = 'From: Webmaster' . "\r\n";
	$mailheader .= 'MIME-Version: 1.0' . "\r\n";
	$mailheader .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	//Sending Mail
	mail($to,$subject,$message,$mailheader) or die("Error: Message not sent");
	echo "<div class=\"contact-header\">Thanks, $first_name. Your message has been sent.</div>";
?>
</div>