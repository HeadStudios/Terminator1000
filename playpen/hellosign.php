<?php

require "../vendor/autoload.php";
require "../error.php";
require "../env.php";

$client = new HelloSign\Client('2db138074a1580285659e1f4b87ca25944f66b5c8c6723d7719f14b0a585ecd3');
$request = new HelloSign\SignatureRequest;
$request->enableTestMode();
$request->setTitle('NDA with Acme Co.');
$request->setSubject('The NDA we talked about');
$request->setMessage('Please sign this NDA and then we can discuss more. Let me know if you have any questions.');
$request->addSigner('enquiries@headstudios.com.au', 'Jack');
$request->addFile('../verynice.pdf');
$response = $client->sendSignatureRequest($request);