<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];

$mail_to = 'nozotoronto@gmail.com';
$subject = 'NEW SUBSCRIBER - Please add to mailing list: '.$field_name;

$body_message = 'NAME: '.$field_name."\n";
$body_message .= 'EMAIL: '.$field_email."\n";

$headers = 'NAME: '.$field_email."\r\n";
$headers .= 'EMAIL: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for subscribing to the NOZO Toronto mailing list. Click OK to be redirected to our home page.');
		window.location = 'home.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Error, unable to submit. If this persists, please e-mail at info@nozo.ca and we will fix the issue immediately.');
		window.location = 'home.html';
	</script>
<?php
}
?>