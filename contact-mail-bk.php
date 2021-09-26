<?php
require('phpmailer/class.phpmailer.php');

$fname = trim($_POST['fname']);
$email = trim($_POST['email']);
$phone = (isset($_POST['phone']))?trim($_POST['phone']):'';
$website = trim($_POST['website']);
$_message = trim($_POST['message']);


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
$mail->SetFrom($_POST["email"], $_POST["name"]);
$mail->AddReplyTo($_POST["email"], $_POST["name"]);
$mail->AddAddress("vivekra@dqserv.com");	
$mail->Subject = $_POST["phone"];
$mail->WordWrap   = 80;
$mail->MsgHTML($_POST["message"]);


$mail->IsHTML(true);

if(!$mail->Send()) {
	echo "<p class='error'>Problem in Sending Mail.</p>";
} else {
	echo "<p class='success'>Contact Mail Sent.</p>";
}	
?>
