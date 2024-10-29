<?php
require '../../vendor/autoload.php';
include 'config.php';

session_start();

// Configura il provider Google OAuth2 con i parametri di configurazione
$provider = new League\OAuth2\Client\Provider\Google([
    'clientId'     => GOOGLE_CLIENT_ID,
    'clientSecret' => GOOGLE_CLIENT_SECRET,
    'redirectUri'  => GOOGLE_REDIRECT_URI,
]);

// Verifica che il codice di autorizzazione sia presente nella query string
if (!isset($_GET['code'])) {
    // Se manca, significa che non c'è stata un'autorizzazione corretta
    exit('Errore: codice di autorizzazione mancante!');
} else {
    try {
        // Scambia il codice con un token di accesso
        $token = $provider->getAccessToken('authorization_code', [
            'code' => $_GET['code']
        ]);

        // Ottiene le informazioni dell'utente
        $user = $provider->getResourceOwner($token);

        // Salva le informazioni utente nella sessione
        $_SESSION['user_email'] = $user->getEmail();
        $_SESSION['user_name'] = $user->getName();

        // Messaggio di login riuscito
        echo "Login con Google effettuato con successo! Benvenuto, " . $_SESSION['user_name'] . ".";
        
        // Reindirizza alla pagina principale (ad esempio, dashboard.php)
        header('Location: dashboard.php');
        exit();
    } catch (Exception $e) {
        // Gestisce gli errori durante l'autenticazione
        exit('Errore durante il login con Google: ' . $e->getMessage());
    }
}
?>
