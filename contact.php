<?php

if(isset($_POST['Submit']))
{
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];

    $mailfrom = "nimstayphotos@yahoo.com";
    $mailto = "nimstayphotos@yahoo.com";
    $headers = "From:".$email;
    $txt = "You have received a message from ".$name.".\n\n".$message;
    
    mail($mailto, $subject, $txt, $headers);
}