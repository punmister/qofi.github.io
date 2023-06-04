<?php
session_start();

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if (isset($_POST['email']) && !empty($_POST['email'])) {

$name = $_POST['name']." ".$_POST['surname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

		

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->IsSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
     $mail->Username   = 'debasisktk@gmail.com';                     //SMTP username
    $mail->Password   = 'm0n@l!$@';          
	//$mail->SMTPSecure = "tls";//SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 456;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress("debasisktk@gmail", "Queen Ino");     //Add a recipient
   // $mail->addAddress('mail1@gmail.com');               //Name is optional
   // $mail->addReplyTo('mail2@gmail.com', 'Information');
    // $mail->addCC('cc@gmail.com');
    //$mail->addBCC('bcc@example.com');


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Queen Inovation Enquiry";
    $mail->Body    = '
<table border="0" cellpadding="0" cellspacing="0" width="100%">
		<tr>
			<td align="center" bgcolor="#e9ecef" style="padding: 40px 0;">
				<h1>Queen Inovation Enquiry</h1>
			</td>
		</tr>
		<tr>
			<td bgcolor="#ffffff" style="padding: 20px;">
				<p><b>Name : </b> '.$name.'</p>
				<p><b>Email : </b> '.$email.'</p>
				<p><b>Subject : </b> '.$subject.' </p>
				<p><b>Message :</b> </p>
				<p>'.$message.'</p>
			</td>
		</tr>
		<tr>
			<td bgcolor="#e9ecef" style="padding: 20px;">
				<p>Thanks & Regards</p>
			</td>
		</tr>
	</table>';
    $mail->send();
	
    echo $_SESSION['msg'] = 'Message has been sent';
    header('location:index.html');
} catch (Exception $e) {
    echo $_SESSION['msg'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	//header('location:index.php');
}
} else {
	echo $_SESSION['msg'] = 'Please fill the form correctly';
	//header('location:index.php');
}
?>