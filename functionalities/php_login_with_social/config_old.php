<?php
// Configurazione del database
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'auth_app');

// Credenziali Google OAuth2
define('GOOGLE_CLIENT_ID', 'YOUR_GOOGLE_CLIENT_ID');
define('GOOGLE_CLIENT_SECRET', 'YOUR_GOOGLE_CLIENT_SECRET');
define('GOOGLE_REDIRECT_URI', 'http://localhost/auth_app/google_callback.php');

// Credenziali Facebook OAuth2
define('FACEBOOK_APP_ID', 'YOUR_FACEBOOK_APP_ID');
define('FACEBOOK_APP_SECRET', 'YOUR_FACEBOOK_APP_SECRET');
define('FACEBOOK_REDIRECT_URI', 'http://localhost/auth_app/facebook_callback.php');
?>
