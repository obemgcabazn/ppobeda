<?php
require_once 'Mail.php';

// Получатель


$return = Mail::getCaptcha( $_POST['g-recaptcha-response'] );

if ( $return->success == true && $return->score > 0.5 ) {

	$formSend = new Mail( $_POST['name'], $_POST['phone'], $_POST['title'] );

	$formSend->sendMail();
	echo "Письмо отправлено";
} else {
	echo "You are Robot";
}
