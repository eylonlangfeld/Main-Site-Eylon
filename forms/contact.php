<?php

$to = "eylonl522@gmail.com";
$subject = "New message from your website";

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$subject_form = $_POST['subject'] ?? '';
$message = $_POST['message'] ?? '';

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$fullMessage = "Name: $name\n";
$fullMessage .= "Email: $email\n";
$fullMessage .= "Subject: $subject_form\n\n";
$fullMessage .= "Message:\n$message";

if (mail($to, $subject, $fullMessage, $headers)) {
  echo "OK";
} else {
  echo "ERROR";
}
