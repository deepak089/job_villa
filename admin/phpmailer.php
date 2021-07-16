<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/Exception.php';
require './PHPMailer/PHPMailer.php';
require './PHPMailer/SMTP.php';

$id=$_POST['id'];
$from=$_POST['from'];
$to=$_POST['to'];

function sendMail($from, $to)
{
    $mail = new PHPMailer(true);

    // SMTP configuration
    $mail->isSMTP();
    $mail->Host     = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'deepakchandra5689@gmail.com';
    $mail->Password = 'tmkocdeepak@gmail.com';
    $mail->SMTPSecure = 'ssl';
    $mail->Port     = 465;

    $mail->setFrom($from, 'Deepak');
    $mail->addReplyTo($to, 'chandra');

    // Add a recipient
    $mail->addAddress($to);

    //Attachments
    // $mail->addAttachment($path);    //Optional name

    // Email subject
    $mail->Subject = 'email subject';

    // Set email format to HTML
    $mail->isHTML(true);

    // Email body content
    $mailContent = "<h2>Hello $from,</h2> <br><br>";
    $mail->Body = $mailContent;

    // Send email
    $mail->send();

    return;
}
?>