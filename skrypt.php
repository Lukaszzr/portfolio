<?php
$header  = "From: https://lukaszzr.github.io/portfolio/. \r\n";
$header .= 'MIME-Version: 1.0'."\r\n";
$header .= 'Content-type: text/html; charset=UTF-8'."\r\n";
$to      = 'lukaszrozdzynskii@gmail.com';
$subject = 'Wiadomość ze strony https://lukaszzr.github.io/portfolio/.';
$from = $_POST['email'];
$name = $_POST['name'];
$email=$_POST['email'];
$emailbody = 
	'Imie: '.$_POST['name']. "\n"
	.' Adres mailowy: '.$_POST['email']. "\n"
	.'Wiadomosc: '.$_POST['message']. "\n";


   if(mail($to, $subject, $emailbody, $header)) 


{
   
   echo "<script> window.location = \"index.html\" </script>";
}
?>