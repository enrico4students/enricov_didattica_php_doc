<?php
// index.php

require '../../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Crea un nuovo logger
$log = new Logger('my_app');

// Aggiungi un handler per scrivere i log in un file
$log->pushHandler(new StreamHandler('./log.txt', Logger::DEBUG));

// Debug: Utilizzato per informazioni di debug dettagliate
$log->debug('Questo è un messaggio di debug.', ['details' => 'Informazioni aggiuntive']);

// Info: Utilizzato per registrare eventi generali
$log->info('Utente effettuato l\'accesso.', ['utente' => 'Mario Rossi']);

// Warning: Utilizzato per segnalare potenziali problemi
$log->warning('Spazio su disco basso.');

// Error: Utilizzato per registrare errori che non interrompono l'esecuzione
$log->error('Impossibile connettersi al database.', ['errore' => 'Errore di connessione']);

// Critical: Utilizzato per registrare errori critici che interrompono l'esecuzione
$log->critical('Errore fatale.', ['eccezione' => new \Exception('Errore critico')]);

session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>