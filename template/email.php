<?php
   // data sent in header are in JSON format
   header('Content-Type: application/json');
   // takes the value from variables and Post the data
   $fullName = $_POST['fullName'];
   $companyName = $_POST['companyName'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $product = $_POST['product'];
   $comments = $_POST['comments'];
   $to = "info@shoncopower.com";
   $subject = "Contact via Shonco Power Website";
   // Email Template
   $message = "<b>Full Name : </b>". $fullName ."<br>";
   $message = "<b>Company Name : </b>". $companyName ."<br>";
   $message .= "<b>Contact Number : </b>".$phone."<br>";
   $message .= "<b>Email Address : </b>".$email."<br>";
   $message = "<b>Product : </b>". $product ."<br>";
   $message .= "<b>Message : </b>".$comments."<br>";

   $header = "From:"+$email+" \r\n";
   $header .= "MIME-Version: 1.0\r\n";
   $header .= "Content-type: text/html\r\n";
   $retval = mail ($to,$subject,$message,$header);
   // message Notification
   if( $retval == true ) {
      echo json_encode(array(
         'success'=> true,
         'message' => 'Message sent successfully'
      ));
   }else {
      echo json_encode(array(
         'error'=> true,
         'message' => 'Error sending message'
      ));
   }
?>
