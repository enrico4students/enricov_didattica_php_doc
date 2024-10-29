<?php
session_start();

// Verifica se l'utente è autenticato
if (!isset($_SESSION['user_email'])) {
    header('Location: login.php');
    exit();
}

// Benvenuto per l'utente autenticato
echo "<h1>Benvenuto " . htmlspecialchars($_SESSION['user_name']) . "!</h1>";
echo "<p>Email: " . htmlspecialchars($_SESSION['user_email']) . "</p>";
echo "<a href='logout.php'>Logout</a>";
?>
