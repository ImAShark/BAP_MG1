<?php
$from = $_POST['from'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = '24274@ma-web.nl';
$headers = 'From: ' . $from;

mail($to, $subject, $message, $headers);

echo 'Uw mail is verstuurd!';