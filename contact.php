<html>
<body>
    Welcome <?php echo 'hello' ?><br>
</body>
</html>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
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
    
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;               // Enable SMTP authentication 
    $mail->Username = 'nimstayp@gmail.com';   // SMTP username 
    $mail->Password = 'nimstaypHOST22!';   // SMTP password 
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
    $mail->Mailer = "smtp";
    
    $mail->setFrom($email, $name);
    $mail->addAddress("nimstayphotos@yahoo.com");
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = '<h1 align=center>Name:'.$name.'<br>Email: '.$email.'<br>Message: '.$message.'</h1>';
    $mail->send();
}

?>