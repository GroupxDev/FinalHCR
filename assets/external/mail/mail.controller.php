<?php

include '../../login/dbc.php';
session_start();
require 'PHPMailer-master/PHPMailerAutoload.php';

function checkEmail($str)
{
	return preg_match("/^([a-zA-Z0-9]+[a-zA-Z0-9._%-]*@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4})$/", $str);
}
switch($_GET['action']) {
	case 'sendInvite':
		sendInvite();
		break;
	
	case 'sendConfirmation':
		send_confirmation();
		break;

}
function sendInvite(){

function get_include_contents($filename, $variablesToMakeLocal) {
extract($variablesToMakeLocal);
if (is_file($filename)) {
ob_start();
include $filename;
return ob_get_clean();
}
return false;
}


$emailData =  $_POST['emailData'];
    foreach ($emailData as $key) {
    $email = json_decode($key);
}

$mail = new PHPMailer;

$newUsers =  $_POST['newUsers'];
    foreach ($newUsers as $user) {
    $usr = json_decode($user);
	 
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'groupx67@gmail.com';                   // SMTP username
		$mail->Password = 'austin67';               // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
		$mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
		$mail->setFrom('admin@groupondemand.com', 'PPYMCA');     //Set who the message is to be sent from
		//$mail->addReplyTo('labnol@gmail.com', 'First Last');  //Set an alternative reply-to address
		$mail->addAddress($usr->email, $usr->name);  // Add a recipient
		//$mail->addAddress('ellen@example.com');               // Name is optional
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');
		$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
		//$mail->addAttachment('/usr/labnol/file.doc');         // Add attachments
		//$mail->addAttachment('/images/image.jpg', 'new.jpg'); // Optional name
		$mail->isHTML(true);                                  // Set email format to HTML
		 //$mail->SMTPDebug = 1; 
		$mail->Subject = 'You have been invited to Workout with - '.$_SESSION['user_name'];
		$variable['className'] = $email->className;
		$variable['instructor'] = $email->instructor;
		$variable['startDate'] = $email->startDate;
		$variable['startTime'] = $email->startTime;
		$variable['duration'] = $email->duration;
		$variable['user_name'] = $_SESSION['user_name'];
		//$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
		//$mail->AltBody = 'HEllo JIm Reydnolds this is a test';
		 
		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		$mail->Body = get_include_contents('invite.php', $variable);
	
	}
if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
 
echo 'Message has been sent';
}

function send_confirmation(){

 global $link, $groupx_ClassTable;

function get_include_contents($filename, $variablesToMakeLocal) {
extract($variablesToMakeLocal);
if (is_file($filename)) {
ob_start();
include $filename;
return ob_get_clean();
}
return false;
}


 $emailData =  $_POST['emailData'];
    foreach ($emailData as $key) {
    $email = json_decode($key);
}
$user_email = $email->user_email;
$eventID = $email->class_id;
echo ($user_email);
 	$str_query = 'SELECT equipment FROM  `trilakes_groupx_classes`  WHERE `event_id` = '.$eventID;
	$obj_result = mysqli_query($link, $str_query);
		while ($arr_line = mysqli_fetch_array($obj_result, MYSQLI_ASSOC)) { 
			$arr_content = $arr_line;
		}

$equipt = $arr_content['equipment'];

		$mail = new PHPMailer;
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'groupx67@gmail.com';                   // SMTP username
		$mail->Password = 'austin67';               // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
		$mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
		$mail->setFrom('PPYMCA@groupondemand.com', 'PPYMCA');     //Set who the message is to be sent from
		//$mail->addReplyTo('labnol@gmail.com', 'First Last');  //Set an alternative reply-to address
		$mail->addAddress($email->user_email, $_SESSION['user_name']);  // Add a recipient
		//$mail->addAddress('ellen@example.com');               // Name is optional
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');
		$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
		//$mail->addAttachment('/usr/labnol/file.doc');         // Add attachments
		//$mail->addAttachment('/images/image.jpg', 'new.jpg'); // Optional name
		$mail->isHTML(true);                                  // Set email format to HTML
		// $mail->SMTPDebug = 2;
		$mail->Subject = 'GroupX Workout Confirmation';

			$variable['equipment'] = $equipt;
			$variable['instructor'] = $email->instructor;
			$variable['startTime'] = $email->startTime;

			$variable['className'] = $email->className;
			$variable['user_name'] = $_SESSION['user_name'];

		$mail->Body = get_include_contents('confirmation.php', $variable);
		$mail->Send();
 
if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
 
echo 'Message has been sent';
}
