<?php
$name =$_POST['name'];
$visitor_email =$_POST['email'];
$message =$_POST['message'];


$email_from='rohitlande002@gmail.com'
$email_subject=' new '
$email_body ="User Name: $name.\n".
              "User email: $visitor_email.\n".
              "User message: $message.\n";
$to ='landerohit73@gmail.com'
$headers ="from: $email_from \r\n";
$headers .="Reply-to:$visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers );
header("Location: contact.html");


?>