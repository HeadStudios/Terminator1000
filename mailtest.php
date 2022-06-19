<?php

require "vendor/autoload.php";

$transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
  ->setUsername('kosta@headstudios.com.au')
  ->setPassword('qtyukdpcwupqiczw')
;
$mailer = new Swift_Mailer($transport);

$message = (new Swift_Message())
 ->setSubject('Here should be a subject')
->setFrom(['kosta@headstudios.com.au'])
 ->setTo(['kostakondratenko@gmail.com' => 'My Alter Ego'])
->setCc([
'enquiries@headstudios.com.au' => 'My Inner Alter'
]);
$message->setBody(
'<b>And here we...</b> <u>Go</u>'
);
$message->addPart('Welcome to Mailtrap, now your test emails will be safe', 'text/plain');
$message->attach(Swift_Attachment::fromPath('verynice.pdf'));
$mailer->send($message);