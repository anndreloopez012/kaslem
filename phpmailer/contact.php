
<?php

$mailName = isset($_POST["name"]) ? $_POST["name"]  : '';
$subject_ = isset($_POST["subject"]) ? $_POST["subject"]  : '';
$address_  = isset($_POST["email"]) ? $_POST["email"]  : '';
$mailContent = isset($_POST["message"]) ? $_POST["message"]  : '';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';


$mail = new PHPMailer(true);

	//Server settings
	$mail->SMTPDebug = 0;
	$mail->isSMTP();
	$mail->Host       = 'mail.kaslemgt.com';
	$mail->SMTPAuth   = true;
	$mail->Username   = 'contacto@kaslemgt.com';
	$mail->Password   = 'Kaslem2020';
	$mail->SMTPSecure = 'SMTP';
	$mail->Port       =  26;

	$mail->setFrom('contacto@kaslemgt.com', 'KASLEM');
	$subject  = $subject_;
	$address  = $address_;
	$mail->addAddress($address, $subject);
	//$mail->addAddress('andrelopez012@gmail.com', 'andre');

	$mail->isHTML(true);
	$mail->Subject = $subject;
	$mail->Body    = $mailContent;
	$mail->CharSet = 'UTF-8';

	$mail->send();
	
	if($mail){
		echo 'mensaje enviado';
	}else{
		echo 'mensaje no enviado';
	}

