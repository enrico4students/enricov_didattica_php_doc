<?php
// Percorso del file .ini
define('CONFIG_DIR', "D:/00_data/gdrive/enrico200165-mirror/08_dev_gdrive/configs/insegnamento/google-login");
$config_file = CONFIG_DIR . '/login.ini';

// Caricamento delle configurazioni
if (!file_exists($config_file)) {
    die("File di configurazione non trovato!");
}

$config = parse_ini_file($config_file, true);

// Configurazione delle credenziali Google
define('GOOGLE_CLIENT_ID', $config['google']['client_id']);
define('GOOGLE_CLIENT_SECRET', $config['google']['client_secret']);
define('GOOGLE_REDIRECT_URI', $config['google']['redirect_uri']);

// Configurazione delle credenziali Facebook
define('FACEBOOK_APP_ID', $config['facebook']['app_id']);
define('FACEBOOK_APP_SECRET', $config['facebook']['app_secret']);
define('FACEBOOK_REDIRECT_URI', $config['facebook']['redirect_uri']);

// Test delle credenziali (opzionale)
echo "Google Client ID: " . GOOGLE_CLIENT_ID . "<br>" . "\n";
echo "Facebook App ID: " . FACEBOOK_APP_ID   . "<br>" . "\n";
?>
