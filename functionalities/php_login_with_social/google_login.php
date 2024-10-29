<?php
require '../../vendor/autoload.php';
include 'config.php';

$provider = new League\OAuth2\Client\Provider\Google([
    'clientId' => GOOGLE_CLIENT_ID,
    'clientSecret' => GOOGLE_CLIENT_SECRET,
    'redirectUri' => GOOGLE_REDIRECT_URI,
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
        $_SESSION['user'] = $user->getEmail();
        echo "Login con Google effettuato!";
    } catch (Exception $e) {
        exit('Errore durante il login con Google.');
    }
}
?>
