
<?php
$to      = 'lukaszrozdzynskii@gmail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$subject = 'Nowy e-mail od' . $name . '(' . $email . ')';
$message = $_POST['message'];
$headers  = 'From: ' . $name . '(' . $email . ')';
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

mail($to, $subject, $message, $headers);
?> 