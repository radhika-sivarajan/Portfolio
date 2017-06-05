<?php
$to      = 'radhikaraj333@gmail.com';
$subject = 'the subject';
$message = 'hello';

$header = "From: noreply@example.com\r\n";
$header.= "MIME-Version: 1.0\r\n";
$header.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$header.= "X-Priority: 1\r\n";

$status = mail($to, $subject, $message, $headers);

if($status)
{
    header('Location: index.html');
} else {

}
?>