<?php
$from = $_POST['from'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = '24274@ma-web.nl';
$headers = 'From: ' . $from;

echo 'Uw mail is verstuurd!';