<!DOCTYPE html>
<html>
<head>
<?php $title="contacts";
	require('includes/head.php');
?>
</head>
<body>
	<?php require ('includes/header.php'); ?>
	<div class="topbar"></div>
	<div class="contact clearfix">
		<div class="wrapper clearfix">
			<div class="feedback">
				<h2>Feedback</h2>
				<form action="contactsaction.php" method="post">
					<div class="clearfix">
						<label for="contact-name">Name:</label>
						<input type="text" name="name" id="contact-name">
					</div>
					<div class="clearfix">
						<label for="contact-emai">Email:</label>
						<input type="text" name="email" id="contact-email">
					</div>
					<div class="clearfix">
						<label for="contact-phone">Phone:</label>
						<input type="text" name="phone" id="contact-phone">
					</div>
					<div>
						<label for="message">Message:</label>
						<textarea type ="text" name="message" id="message"></textarea>
					</div>
					<div class="button">
						<button type="reset">Clear</button>
						<button type="submit">Send</button>
					</div>
				</form>
			</div>
			<div class="contacts">
				<h2>Our Contacts</h2>
				<p>24 Hour Emergency Towing </p>
				<p>Monday - Friday: 7:30 am - 6:00</p>
				<p>Saturday: 7:30 am - Noon</p>
				<p>Night Drop Available </p>
				<img src="images/contacts.png"></img>
				<p>Demolink.org 8901 Marmora Road,</p>
				<p> Glasgow, D04 89GR.</p>
					<div class="contactmode clearfix">
						<p>Telephone:</p>
						<span>+1 959 552 5963;</span>
						<p>FAX:</p> 
						<span>+1 959 552 5963</span>
						<p>E-mail: </p>
						<a href="mailtto:mail@demolink.org">mail@demolink.org</a>
					</div>
			</div>
		</div>
	</div>

	<?php require('includes/footer.php'); ?>
</body>
</html>



