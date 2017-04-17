<?php
$field_name = $_POST['name'];
$field_company = $_POST['company'];
$field_email = $_POST['email'];
$field_phone = $_POST['phone'];
$field_message = $_POST['message'];

$mail_to = 'susy@susybiasdesign.com';
$subject = 'Message from website visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message = 'Company: '.$field_company."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Phone: '.$phone."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. I will contact you soon.');
		window.location = 'index_page.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please send an email to susy@susybiasdesign.com');
		window.location = 'index.html';
	</script>
<?php
}
?>