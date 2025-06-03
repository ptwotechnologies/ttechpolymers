<?php

	$to = "ttechpolymersmundka@gmail.com"; // Updated email address tapanr80@gmail.com
	$from  = $_POST['email']; // sender's Email address
	$sender_name = $_POST['name'];
	$phone = $_POST['phone'];
	$subject_inquiry = $_POST['subject'];
	$note = $_POST['note'];

	$subject = "Ttechpolymers - New Inquiry from " . $sender_name;

	$message = "New inquiry received from Ttechpolymers website:\n\n";
	$message .= "Name: " . $sender_name . "\n";
	$message .= "Email: " . $from . "\n";
	$message .= "Phone: " . $phone . "\n";
	$message .= "Inquiry Subject: " . $subject_inquiry . "\n\n";
	$message .= "Message:\n" . $note . "\n\n";
	$message .= "---\nThis message was sent from Ttechpolymers contact form.";

	$headers = 'From: ' . $from . "\r\n";
	$headers .= 'Reply-To: ' . $from . "\r\n";
	$headers .= 'X-Mailer: PHP/' . phpversion();

	if(mail($to, $subject, $message, $headers)) {
		echo "success";
	} else {
		echo "error";
	}

?>