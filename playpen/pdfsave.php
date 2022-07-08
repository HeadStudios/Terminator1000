<?php

require "../vendor/autoload.php";
require "../inc/zohoinvoice.php";
require "../env.php";

global $env;

$line_items = '[{
    "Id": "GVyrm",
    "ProductName": "Prode",
    "ProductFeature": "Product 1 Feature",
    "ProductBenefit": "Product 1 Benefit",
    "Items": "Product 1",
    "ItemNumber": 1,
    "item_id": "451794000000078013",
    "rate": 123,
    "quantity": 1,
    "name": "Product 2 Name",
    "description": "Product 2 Feature - Product 2 Benefit"
},
{
    "Id": "4v4amR",
    "ProductName": "Product 2 Name",
    "ProductFeature": "Product 3 Feature",
    "ProductBenefit": "Product 3 Benefit",
    "Items": "Product 2",
    "ItemNumber": 2,
    "item_id": "451794000000078013",
    "rate": 132,
    "quantity": 1,
    "name": "Product 3 Name",
    "description": "Product 3 Feature - Product 3 Benefit"
}]';
$line_items = json_decode($line_items, true);
$zoho = new ZohoInvoice($env);
$contact_id = $zoho->getContactIDByEmail('enquiries@headstudios.com.au');
//$filtered = $zoho->lineItemParser($json_loader['products']);
$id = $zoho->getContactIDByEmail('enquiries@headstudios.com.au');
$inv_id = $zoho->createInvoiceDraft($line_items, $id);

$zoho->getAndSaveInv($inv_id, 'images/brobrobro.pdf');

/*
$myfile = fopen("images/Konstantin9.jpg", "w") or die("Unable to open file!");

echo "The file was opened";


echO "Ready to save a PDF?";
$directory = $_SERVER['DOCUMENT_ROOT'].'/images/';
$directory = 'images/brooo.pdf';

$client = new GuzzleHttp\Client();
$request = $response = $client->request('GET', 'https://books.zoho.com/api/v3/invoices/451794000000476014?organization_id=637404798&accept=pdf&print=true', [
    'sink' => $directory,
    'headers' => [
        'Content-Type' => 'application/json',
        'Authorization' => 'Zoho-oauthtoken 1000.4b4bc2bf7743643bcb540696550e4f34.bf6b6508edd03bd4cf0093a0fdcadbf4'
    ],
]);

echo "The status is ".$request->getStatusCode()." sir";
*/
