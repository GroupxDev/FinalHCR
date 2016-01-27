<?php
require 'mail/PHPMailer-master/PHPMailerAutoload.php';
include 'db.php';
global $link;
 if($link === FALSE) {
        $error= "Database connection failed";
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
	
function get_include_contents($filename, $variablesToMakeLocal) {
extract($variablesToMakeLocal);
if (is_file($filename)) {
ob_start();
include $filename;
return ob_get_clean();
}
return false;
}
$str_query = 'INSERT INTO `contact_table` (name,user_email,message,date_request) ' .
			'VALUES ("'.$_POST['name'].'",
					"'.$_POST['email'].'",
					"'.$_POST['message'].'",
					"'.date('Y-m-d H:i:s').'")';
					
	$obj_result = mysqli_query($link, $str_query);

	$arr_event = mysqli_fetch_array($obj_result, MYSQLI_ASSOC);
	echo ("<span style='left:-200px;'>Thank you for contacting us.</span>");


$email = $_POST['email'];
$name = $_POST['name'];
$message = $_POST['message'];
$subject_line = $_POST['email_form'];
echo ($email);


		$mail = new PHPMailer;
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'groupx67@gmail.com';                   // SMTP username
		$mail->Password = 'austin67';               // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
		$mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
		$mail->setFrom('kaylene@kaylene.life', 'Kaylene');     //Set who the message is to be sent from
		//$mail->addReplyTo('labnol@gmail.com', 'First Last');  //Set an alternative reply-to address
		$mail->addAddress($email, $name);  // Add a recipient
		//$mail->addAddress('ellen@example.com');               // Name is optional
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');
		$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
		//$mail->addAttachment('/usr/labnol/file.doc');         // Add attachments
		//$mail->addAttachment('/images/image.jpg', 'new.jpg'); // Optional name
		$mail->isHTML(true);                                  // Set email format to HTML
		// $mail->SMTPDebug = 2;
		$mail->Subject = $subject_line;

			$variable['message'] = $message;
			

		$mail->Body = get_include_contents('mail/confirmation.php', $variable);
		$mail->Send();
 
if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
 
echo 'Message has been sent';
