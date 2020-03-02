<?php

	// change title, contentfile, and path as appropriate (displayed after message sent)

	$title = "Message Sent";

	$path = "<a href=\"index.php\">Thunder Road Racing</a>" .
			" » " .
	        "<a href=\"contact.php\">Contact Information</a>" .
	        " » " .
	        $title;

// Process and send the email

	// This line prevents values being entered in a URL
		if ($_SERVER['REQUEST_METHOD'] != "POST"){exit;}

		$to_email = "ross@metcalfemotorcycles.com";
		$subject = "METCALFEMOTORCYCLES FEEDBACK";

		$message = stripslashes($_POST['message']);
		$fr_name = stripslashes($_POST['fr_name']);
		$fr_email = stripslashes($_POST['fr_email']);

	$headers = "From: " . $fr_name . " <" .
				$fr_email . ">" . "\n" .
				"Return-Path: " . $fr_email . "\n" .
				"Reply-To: " . $fr_email . "\n";

	$timestamp = date("l, F dS, Y") . " @ " . gmdate("g:i:sA") . " GST";

	$ip = $_SERVER['REMOTE_ADDR'];

	$footer = $ip . "\n" . $timestamp;

// Replace line breaks with <br> in the email message
	$htmlmessage = str_replace("\r\n","<br>",$message);

	$message = $message . "\n" . $footer;

	// Send it off
	mail($to_email,$subject,$message,$headers);

?>

<?php
	// change title and crumbspath as appropriate
	$title = "Contact Information";
	$crumbspath = "<a href=\"index.php\">Thunder Road Racing</a> &#187; " . $title;
?>

<?php include("header.php"); ?>

	<p />
	Your message:

	<p />
	<hr />
	<p />

	<?php echo $htmlmessage; ?>

	<p />
	<hr />
	<p />

	<?php echo $ip; ?>
	<br />
	<?php echo $timestamp; ?>

	<p />
	<a href="contact.php">Click here to send another message</a>
	<p />
	<a href=".">Click here to return to homepage</a>

<?php include("footer.php"); ?>




