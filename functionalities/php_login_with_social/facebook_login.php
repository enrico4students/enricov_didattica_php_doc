<?php
require 'vendor/autoload.php';
include 'config.php';

$provider = new League\OAuth2\Client\Provider\Facebook([
    'clientId' => FACEBOOK_APP_ID,
    'clientSecret' => FACEBOOK_APP_SECRET,
    'redirectUri' => FACEBOOK_REDIRECT_URI,
    'graphApiVersion' => 'v9.0',
]);

if (!isset($_GET['code'])) {
    $authorizationUrl = $provider->getAuthorizationUrl();
    $_SESSION['oauth2state'] = $provider->getState();
    header('Location: ' . $authorizationUrl);
    exit;
} else {
    try {
        $token = $provider->getAccessToken('authorization_code', [
            'code' => $_GET['code']
        ]);
        $user = $provider->getResourceOwner($token);
        $_SESSION['user'] = $user->getName();
        echo "Login con Facebook effettuato!";
    } catch (Exception $e) {
        exit('Errore durante il login con Facebook.');
    }
}
?>
