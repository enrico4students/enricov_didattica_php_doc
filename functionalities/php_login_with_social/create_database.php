<?php
// Configurazione per la connessione al database
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'auth_app');

// Creazione della connessione
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS);

// Controllo della connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Creazione del database se non esiste
$sql = "CREATE DATABASE IF NOT EXISTS " . DB_NAME;
if ($conn->query($sql) === TRUE) {
    echo "Database creato correttamente o già esistente.<br>";
} else {
    die("Errore nella creazione del database: " . $conn->error);
}

// Connessione al database appena creato
$conn->select_db(DB_NAME);

// Creazione della tabella 'users' se non esiste
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabella 'users' creata correttamente o già esistente.<br>";
} else {
    die("Errore nella creazione della tabella: " . $conn->error);
}

// Chiusura della connessione
$conn->close();
?>
