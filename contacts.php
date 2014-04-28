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
			<div class="feedback ">
				<h2>Feedback</h2>
				<div class="formarea clearfix">			
					<div class="textform">
						<p>Name:</p>
						<p>Email:</p>
						<p>Phone:</p>
						<p>Message:</p>
					</div>
					<form action="contactsaction.php">
						<div class="feedbackform">
							<input type="text">
							<input type="text">
							<input type="text">
							<textarea></textarea>
						</div>
						<div class="button">
							<button type="reset">Clear</button>
							<button type="submit">Send</button>
						</div>
					</form>
				</div>
			</div>
			<div class="contacts">
				<h2>Our Contacts</h2>
				<p>24 Hour Emergency Towing </p>
				<p>Monday - Friday: 7:30 am - 6:00</p>
				<p>Saturday: 7:30 am - Noon</p>
				<p>Night Drop Available </p>
				<img src="images/contacts.png"></img>
				<p>Demolink.org 8901 Marmora Road,</p>
				<p> Glasgow, D04 89GR.</p><br>
				<p>Telephone:<span>+1 959 552 5963;</span></p>
				<p>FAX: <span class="padding">+1 959 552 5963</span></p>
				<p>E-mail: <a class="email" href="mailtto:mail@demolink.org">mail@demolink.org</a></p>
			</div>
		</div>
	</div>

	<?php require('includes/footer.php'); ?>
</body>
</html>



