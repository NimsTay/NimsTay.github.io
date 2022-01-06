<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;



if(isset($_POST['Submit']))
{
    require 'includes/Exception.php';
    require 'includes/PHPMailer.php';
    require 'includes/SMTP.php';

    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];

    $mailto = "nimstayphotos@yahoo.com";
   
 
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;               // Enable SMTP authentication 
    $mail->Username = 'nimstayp@gmail.com';   // SMTP username 
    $mail->Password = 'nimstaypHOST22!';   // SMTP password 
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
    $mail->Mailer = "smtp";
    $mail->From = "nimstayphotos@yahoo.com";

    $mail->setFrom($email, $name);
    $mail->addAddress("nimstayp@gmail.com");
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = '<h1 align=center>Name:'.$name.'<br>Email: '.$email.'<br>Message: '.$message.'</h1>';
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

?>