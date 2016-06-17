<?php
 
if (empty($_POST)) { die(); }

//data
$html = file_get_contents('views/mails/mail.html');
$html_2 = file_get_contents('views/mails/mail_company.html');

$data['email'] = empty($_POST['email']) ? ' - ' : trim($_POST['email']);
$data['nombre'] = ucwords(trim($_POST['name']));
$data['empresa'] = strip_tags(trim($_POST['company'])); 
$data['fono'] = strip_tags(trim($_POST['phone'])); 
$data['mensaje'] = strip_tags($_POST['message']);
$data['fecha'] = date('d/m/Y h:i');

//datos locales
$data['web'] = $company_name;
$data['email_web'] = $company_email;
$data['phone_web'] = $company_phone;
$data['address_web'] = $company_address; 
$data['logo'] =  base_url('assets/images/logo_email.png');

$out['status'] = false;

if (filter_var($data['email'], FILTER_VALIDATE_EMAIL) && !empty($data['nombre'])) {

	foreach ($data as $key => $value) {
		$html = str_replace('{{' . $key . '}}', $value, $html);
		$html_2 = str_replace('{{' . $key . '}}', $value, $html_2);
	} 
	
	require 'system/third/phpmailer/PHPMailerAutoload.php';

	$asunto = utf8_decode('Contacto Web en '.$company_name.' de ' . $data['nombre']);

	// enviar mail al cliente
	$mail = new PHPMailer();
	$mail->setFrom($email_from, utf8_decode($company_name));
	$mail->Subject = $asunto ;
	$mail->IsHTML(true);    
	$mail->addAddress($data['email']); 
	$mail->msgHTML(utf8_decode($html), dirname(__FILE__)); 
	$mail->send(); 


	// enviar copia empresa
	$mail_2 = new PHPMailer();
	$mail_2->setFrom($email_from, utf8_decode($company_name));
	$mail_2->Subject = $asunto;
	$mail_2->IsHTML(true);   
	$mail_2->addAddress('gerencia@gpa.cl'); 
	$mail_2->addAddress('contacto@gpa.cl');  
	$mail_2->msgHTML(utf8_decode($html_2), dirname(__FILE__)); 
	$r = $mail_2->send(); 

	if ($r) {
		$out['status'] = true;
	}  
}

header('Content-Type: application/json');
echo json_encode($out);