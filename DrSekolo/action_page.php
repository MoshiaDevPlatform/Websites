<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message =$_POST['message'];

  $email_from = 'info@drsekolo.co.za';

  $email_subject = "New From Submission";

  $email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "user Message: $message.\n";

  $to = "s_mogano@yahoo.com";
  $headers .= "Reply-To: $visitor_email \r\n";
  mail($to,$email_subject,$email_body,$headers);
  header("Location: index.html");

 ?>
