<?php
// login.php
session_start();
require 'db.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL to check if the user exists
    $sql = "SELECT * FROM users WHERE username = :username AND password = MD5(:password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    if ($stmt->rowCount() == 1) {
        // Login successful, create session
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        
        // Redirect to dashboard
        header("Location: dashboard.php");
        exit;
    } else {
        // Login failed, redirect to error page
        header("Location: error.php");
        exit;
    }
}
?>