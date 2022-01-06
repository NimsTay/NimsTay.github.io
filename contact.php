<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require 'includes/Exception.php';
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';

if(isset($_POST['Submit']))
{
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];

    $mailto = "nimstayphotos@yahoo.com";
    $headers = "From:".$email;
    $txt = "You have received a message from ".$name.".\n\n".$message;
 
    print($message);
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Mailer = "smtp";
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = "true";               // Enable SMTP authentication 
    $mail->Username = 'nimstayp@gmail.com';   // SMTP username 
    $mail->Password = 'nimstaypHOST22!';   // SMTP password 
    $mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
    $mail->Port = '587';

    $mail->setFrom("nimstayp@gmail.com", "NimsTay Photos");
    $mail->addAddress($mailto);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $txt;
    if(!$mail->Send()) 
    {
        echo "Error while sending Email.";
        var_dump($mail);
    } 
    else 
    {
        echo "Email sent successfully";
    }
    $mail->smtpClose();
}
