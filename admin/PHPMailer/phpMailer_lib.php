<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../lib/PHPMailer/Exception.php';
require '../../lib/PHPMailer/PHPMailer.php';
require '../../lib/PHPMailer/SMTP.php';

function sendMail($name, $email,$path)
{
    $mail = new PHPMailer(true);

    // SMTP configuration
    $mail->isSMTP();
    $mail->Host     = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'gmail id';
    $mail->Password = 'gmail id password';
    $mail->SMTPSecure = 'ssl';
    $mail->Port     = 465;

    $mail->setFrom('info@example.com', 'any name');
    $mail->addReplyTo('info@example.com', 'any name');

    // Add a recipient
    $mail->addAddress($email);

    //Attachments
    $mail->addAttachment($path);    //Optional name

    // Email subject
    $mail->Subject = 'email subject';

    // Set email format to HTML
    $mail->isHTML(true);

    // Email body content
    $mailContent = "<h2>Hello $name,</h2> <br><br>";
    $mail->Body = $mailContent;

    // Send email
    $mail->send();

    return;
}
