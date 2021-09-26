<?php
require('phpmailer/class.phpmailer.php');


$fname = trim($_POST['fname']);
$email = trim($_POST['email']);
$phone = (isset($_POST['phone']))?trim($_POST['phone']):'';
$txtSubject = trim($_POST['subject']);
$_message = trim($_POST['message']);


if ($fname == "") {
    $msg['err'] = "\n First name can not be empty!";
    $msg['field'] = "fname";
    $msg['code'] = FALSE;
} else if ($email == "") {
    $msg['err'] = "\n Email can not be empty!";
    $msg['field'] = "Email";
    $msg['field'] = "email";
    $msg['code'] = FALSE;
} else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    $msg['err'] = "\n Please put a valid email address!";
    $msg['field'] = "email";
    $msg['code'] = FALSE;
} else if ($phone == "") {
    if(isset($_POST['phone'])){
        $msg['err'] = "\n Phone number can not be empty!";
        $msg['field'] = "phone";
        $msg['code'] = FALSE;
    }
} else if (!preg_match("/^[0-9 \\-\\+]{4,17}$/i", trim($phone))) {
    $msg['err'] = "\n Please put a valid phone number!";
    $msg['field'] = "phone";
    $msg['code'] = FALSE;
} /* else if ($txtSubject == "") {
    $msg['err'] = "\n Subject can not be empty!";
    $msg['field'] = "Subject";
    $msg['field'] = "subject";
    $msg['code'] = FALSE;
}*/ else if ($_message == "") {
    $msg['err'] = "\n Message can not be empty!";
    $msg['field'] = "Message";
    $msg['field'] = "message";
    $msg['code'] = FALSE;
} else {
   if($txtSubject == ''){
	$txtSubject = 'N/A';
    }
   // $to = 'vivekra@dqserv.com';
    $subject = 'DigitalQ - Contact Request';
    $message = '<html><head></head><body>';
    $message .= '<p>Name: ' . $fname . '</p>';
    $message .= '<p>Email: ' . $email . '</p>';
    $message .= '<p>Phone: ' . $phone . '</p>';
    $message .= '<p>Subject: ' . $txtSubject . '</p>';
    $message .= '<p>Message: ' . $_message . '</p>';
    $message .= '</body></html>';
    $headers = 'MIME-Version: 3.0' . "\r\n";
    //$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    //$headers .= 'From:  '.$fname.' <'.$email.'>' . "\r\n";
    //$headers .= 'cc: webadmin@dqserv.com' . "\r\n";
    //$headers .= 'bcc: webadmin@digitalq.in' . "\r\n";
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPDebug = 0;
	$mail->SMTPAuth = TRUE;
	$mail->SMTPSecure = "tls";
	$mail->Port     = 587;  
	$mail->Username = "digitalqindia@gmail.com";
	$mail->Password = "Meridian25";
	$mail->Host     = "smtp.gmail.com";
	$mail->Mailer   = "smtp";
	$mail->SetFrom($email, $fname); 
	$mail->AddReplyTo($email, $fname);
	$mail->AddAddress("vivekra@dqserv.com"); 
	//$mail->AddAddress("salam2k@gmail.com");	
	$mail->Subject = $subject;
	$mail->WordWrap   = 80;
	$mail->MsgHTML($message);


	$mail->IsHTML(true);

	if(!$mail->Send()) {
		$msg['code'] = FALSE;
	} else {
		$msg['success'] = "\n Email has been sent successfully.";
		$msg['code'] = TRUE;
	}	




  //  mail($to, $subject, $message, $headers, '-f contact@example.com');

    
}

echo json_encode($msg);