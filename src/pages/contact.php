

<?php
	// change title and crumbspath as appropriate
	$title = "Contact Information";
	$crumbspath = "<a href=\"index.php\">Thunder Road Racing</a> &#187; " . $title;
?>

<?php include("header.php"); ?>

	All email can be directed to r<b></b>oss@<b></b>metcalfemotorc<b></b>ycles.c<b></b>om

	<p />
	Or you can simply fill out the following form to send a quick message. A correct return address will be required if you expect a response.

	<p />

	<div class="msg">
		<form action="f2e.php" method="post">
			<div class="msg_label">Your Name</div>
			<div class="msg_field"><input type="text" name="fr_name" /></div>

			<div class="msg_label">Your Email</div>
			<div class="msg_field"><input type="text" name="fr_email" /></div>

			<div class="msg_label">Message</div>
			<div class="msg_field"><textarea name="message" rows="6" cols="30"></textarea></div>
			<div class="msg_send"><input type="submit" value="Send" /></div>
		</form>
	</div>

<?php include("footer.php"); ?>
