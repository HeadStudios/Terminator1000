<?php
require "vendor/autoload.php";
require "env.php";
global $zoho_clientid;
global $zoho_clientsecret;

$provider = new ShahariaAzam\ZohoOAuth2\Client\Provider\Zoho([
    'clientId'          => '1000.MFTMKBME4XARIEBK6M3F39G4J5WZYO',
    'clientSecret'      => 'd8bc7056c013ad0492dd6b7ed00acf8c779de3e06c',
    'redirectUri'       => 'http://127.0.0.1:8000/oauth2.php'
]);

// https://accounts.zoho.com/oauth/v2/token?code=1000.3762331e5a87fcb4c70b64cf699f7e73.f53744b732b3991ba7aa1d3762ca0717&client_id=1000.YL3ZONR384H5UFD47HIIQ7KEVYR83B&client_secret=8add19948469d16a0a8ff43a5204ccc12b5b5d6a56&redirect_uri=http://www.zoho.com/books&grant_type=authorization_code


// Client ID: 1000.YL3ZONR384H5UFD47HIIQ7KEVYR83B
// Client Secret: 8add19948469d16a0a8ff43a5204ccc12b5b5d6a56
// Code: 1000.480b185deeffcd532f79a729cfae3d98.16ab08029d76b004b771975201079464
// Refresh Token: 1000.cc10c83066688d6f0a95ba65b07539af.9b42d46266aee6f9801799124ef8e65c
// Access Token: 1000.61aa60cb0b7e3ed68b6322d67fb6fc57.775be4c39c7b20d23415e6c54b46e031

// https://accounts.zoho.com/oauth/v2/token?code=1000.06543e82baca016237f1d8297598b7c5.69a56e427f69e4867936089ababa2a43&client_id=1000.YL3ZONR384H5UFD47HIIQ7KEVYR83B&client_secret=8add19948469d16a0a8ff43a5204ccc12b5b5d6a56&redirect_uri=http://www.zoho.com/books&grant_type=authorization_code

// https://accounts.zoho.com/oauth/v2/token?refresh_token=1000.bec5507cefa04e9c055c29e9b851d9f1.08b45bc056bb17809e5075dea151988c&client_id=1000.YL3ZONR384H5UFD47HIIQ7KEVYR83B&client_secret=8add19948469d16a0a8ff43a5204ccc12b5b5d6a56&redirect_uri=http://www.zoho.com/books&grant_type=authorization_code


// If we don't have an authorization code then get one
if (!isset($_GET['code'])) {

    // Fetch the authorization URL from the provider; this returns the
    // urlAuthorize option and generates and applies any necessary parameters
    // (e.g. state).
    $authorizationUrl = $provider->getAuthorizationUrl(['scope' => [
        'ZohoBooks.fullaccess.all' //Important: Define your data accessability scope here
       
    ],
    'access_type' => 'offline']);

    // Get the state generated for you and store it to the session.
    $_SESSION['oauth2state'] = $provider->getState();

    // Redirect the user to the authorization URL.
    header('Location: ' . $authorizationUrl);
    exit;

// Check given state against previously stored one to mitigate CSRF attack
} elseif (empty($_GET['state']) || (isset($_SESSION['oauth2state']) && $_GET['state'] !== $_SESSION['oauth2state'])) {

    if (isset($_SESSION['oauth2state'])) {
        unset($_SESSION['oauth2state']);
    }

    exit('Invalid state');

} else {

    try {

        // Try to get an access token using the authorization code grant.
        $accessToken = $provider->getAccessToken('authorization_code', [
            'code' => $_GET['code']
        ]);

        // We have an access token, which we may use in authenticated
        // requests against the service provider's API.
        echo 'Access Token: ' . $accessToken->getToken() . "<br>";
        echo 'Refresh Token: ' . $accessToken->getRefreshToken() . "<br>";
        echo 'Expired in: ' . $accessToken->getExpires() . "<br>";
        echo 'Already expired? ' . ($accessToken->hasExpired() ? 'expired' : 'not expired') . "<br>";

        // Using the access token, we may look up details about the
        // resource owner.
        $resourceOwner = $provider->getResourceOwner($accessToken);

        var_export($resourceOwner->toArray());

        // The provider provides a way to get an authenticated API request for
        // the service, using the access token; it returns an object conforming
        // to Psr\Http\Message\RequestInterface.
        $request = $provider->getAuthenticatedRequest(
            'GET',
            'https://service.example.com/resource',
            $accessToken
        );

    } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {

        // Failed to get the access token or user details.
        exit($e->getMessage());

    }

}