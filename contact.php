<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if(isset($_POST['Submit']))
{
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];

    $mailto = "nimstayphotos@yahoo.com";
    $headers = "From:".$email;
    $txt = "You have received a message from ".$name.".\n\n".$message;
 
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Mailer = "smtp";
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;               // Enable SMTP authentication 
    $mail->Username = 'nimstayp@gmail.com';   // SMTP username 
    $mail->Password = 'nimstaypHOST22!';   // SMTP password 
    $mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
    $mail->Port = 587;

    $mail->setFrom("nimstayphotos@yahoo.com", "NimsTay Photos");
    $mail->addAddress($email, $name);
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
}
