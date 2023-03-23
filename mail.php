<?php

if(isset($_POST['submit'])) {
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Set the recipient email address
  $to = 'recipient@example.com';

  // Set the email headers
  $headers = 'From: ' . $name . '<' . $email . '>' . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  // Send the email
  $mail = mail($to, $subject, $message, $headers);

  if ($mail) {
    echo "sent!";
  }else{
    echo "failed!";
  }
}

?>
