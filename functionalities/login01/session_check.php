<?php
// session_check.php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // If not logged in, redirect to login page with a message
    header("Location: index.php");
    exit;
}
?>