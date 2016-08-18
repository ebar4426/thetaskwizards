<?php
$field_name = $_POST['name_a'];
$field_email = $_POST['email_a'];
$field_date = $_POST['date_a'];
$field_phone = $_POST['phone_a'];
$field_message = $_POST['message_a'];

$mail_to = 'ebar4426@gmail.com';
$subject = ' New task from '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Date: '.$field_date."\n";
$body_message .= 'Phone Number: '.$field_phone."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'contact_page.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to ebar4426@gmail.com’);
		window.location = 'placetask.html';
	</script>
<?php
}?>