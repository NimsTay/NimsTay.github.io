<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'includes/Exception.php';
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';


// $mailto = "nimstayphotos@yahoo.com";


// $mail = new PHPMailer(true);
// $mail->isSMTP();
// $mail->Host = 'smtp.gmail.com';
// $mail->SMTPAuth = true;               // Enable SMTP authentication 
// $mail->Username = 'nimstayp@gmail.com';   // SMTP username 
// $mail->Password = 'nimstaypHOST22!';   // SMTP password 
// $mail->Port = 587;
// $mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
// $mail->Mailer = "smtp";

// $mail->setFrom('nimatay22@gmail.com');
// $mail->addAddress("nimstayphotos@yahoo.com");
// $mail->isHTML(true);
// $mail->Subject = 'hello';
// $mail->Body = 'hiiiii';
// $mail->Send();


if(isset($_POST['Name']))
{
    
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];
    
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPDebug = 1;
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = TRUE;               // Enable SMTP authentication 
    $mail->Username = 'nimstayp@gmail.com';   // SMTP username 
    $mail->Password = 'nimstaypHOST22!';   // SMTP password 
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
    $mail->Mailer = "smtp";
    
    $mail->setFrom('nimstayp@gmail.com', $name);
    $mail->addAddress("nimstayphotos@yahoo.com", 'nima');
    $mail->isHTML(true);
    $mail->Subject = 'sadad';
    $mail->Body = 'sdfadas';
    $content = '<b>hello test </b>';
    $mail->msgHTML($content);
    if(!$mail->Send()) {
        echo "Error while sending Email.";
        var_dump($mail);
      } else {
        echo "Email sent successfully";
      }
}

?>