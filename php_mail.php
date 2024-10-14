<?php

$name= $_POST['name'];
$phone= $_POST['phone'];
$email= $_POST['email'];
$message= $_POST['message'];
   require 'vendor/autoload.php';
   use PHPMailer\PHPMailer\PHPMailer;
   $mail = new PHPMailer;
   $mail->isSMTP();
   $mail->SMTPDebug = false;
   $mail->Host = 'smtp.gmail.com';
   $mail->Port = 587;
   $mail->SMTPAuth = true;
   $mail->Username = 'quotationmailservice@gmail.com';
   $mail->Password = ;
   $mail->setFrom('quotationmailservice@gmail.com', "Client");
   $mail->addReplyTo($email, $name);
   $mail->addAddress('dkdon812002@gmail.com', 'YOU GOT A QUOTATION');
   $mail->Subject = 'Quotation mail from client';
   $mail->Body = "Name: $name \n Phone: $phone \n Email Id: $email \n Message: $message";
       if (!$mail->send()) {
        //   echo 'Mailer Error: ' . $mail->ErrorInfo;
        echo '<div class="alert alert-success">Something Want Wrong !!!!</div>';
       } else {
       echo 'success';
    }
?>
