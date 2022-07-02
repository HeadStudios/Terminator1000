<?php

require "../vendor/autoload.php";
require "../env.php";

global $env;

$transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))->setUsername('kosta@headstudios.com.au')->setPassword($env['smtp_pass']);

$mailer = new Swift_Mailer($transport);

$message = (new Swift_Message())
 ->setSubject('Here should be a subject')
->setFrom(['kosta@headstudios.com.au'])
 ->setTo(['kostakondratenko@gmail.com' => 'My Alter Ego'])
->setCc([
'enquiries@headstudios.com.au' => 'My Inner Alter'
]);
$message->setBody(
'<b>Your contract is here.</b>'
);
$message->addPart('This is sent with SMTP', 'text/plain');
//$message->attach(Swift_Attachment::fromPath('verynice.pdf'));
$mailer->send($message);