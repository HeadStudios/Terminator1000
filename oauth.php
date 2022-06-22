<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ERROR | E_PARSE);
require "vendor/autoload.php";
require "env.php";
global $zoho_clientid;
global $zoho_clientsecret;

use Asad\OAuth2\Client\Provider\Zoho;

$provider = new Zoho([
    'clientId' => $zoho_clientid,
    'clientSecret' => $zoho_clientsecret,
    'redirectUri' => 'http://147.182.192.192/oauth.php',
    'dc' => 'AU' // Is this right? It will be optional if your ZOHO are in US location
]);

if (!isset($_GET['code'])) {
    // If we don't have an authorization code then get one
    $authUrl = $provider->getAuthorizationUrl([
        'scope' => [
            'ZohoBooks.fullaccess.all' //Important: Define your data accessability scope here
           
        ],
        'access_type' => 'offline' //Important: If you want to generate the refresh token, set this value as offline
    ]);

    $_SESSION['oauth2state'] = $provider->getState();
    header('Location: ' . $authUrl);
    exit;

    // Check given state against previously stored one to mitigate CSRF attack
} /*elseif (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {

    unset($_SESSION['oauth2state']);
    exit('Invalid state');
} else {*/

    // Try to get an access token (using the authorization code grant)
    try {
        $token = $provider->getAccessToken('authorization_code', [
            'code' => $_GET['code']
        ]);

        //$user = $provider->getResourceOwner($token);


        echo $access_token = $token->getToken();

        echo $refresh_token = $token->getRefreshToken(); //Save this refresh token to somewehre

        echo $token->getExpires();

    } catch (\Exception $e) {
        var_dump($e);
    }

