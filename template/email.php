<?php
   // takes the value from variables and Post the data
   $fullName = $_POST['fullName'];
   $companyName = $_POST['companyName'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $product = $_POST['product'];
   $comments = $_POST['comments'];

   $what = "Name:  " . $name . "Company Name:  " . $companyName . "\n" . "Email:  " . $email . "\n" . "Phone:  " . $phone . "\n" . "Product:  " . $product. "\n" . "Message:  " . $message;

  require 'PHPMailer/PHPMailerAutoload.php';

  $mail = new PHPMailer;
  $mail->isSMTP();
  $mail->SMTPAuth = true;
  $mail->SMTPDebug = 0;
  $mail->Mailer = "smtp";
  $mail->Host = "smtp.gmail.com";
  $mail->Username = "devopsekoform@gmail.com";
  $mail->Password = "ekoform12#$";
  $mail->SMTPSecure = "ssl";
  $mail->Port = 465;
  $mail->Subject = 'Inquiries';
  $mail->FromName = $name;
  $mail->AddAddress("Infor@shoncopower.com");
  $body=$message;
  $mail->Body = $what;

  if(!$mail->Send()) {
     echo 'Message could not be sent.';
     echo 'Mailer Error: ' . $mail->ErrorInfo;
     exit;
  }
  else
  {
    echo "We have successfully received your Query. We will get back to you";
  }

?>
