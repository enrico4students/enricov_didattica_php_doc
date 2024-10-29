<?php
// dashboard.php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>You have successfully logged in.</p>
    <p>visit some test pages:</p><br/>
    <a href="page1.php">page1</a><br/>
    <a href="page2.php">page2</a><br/>
    <a href="page3.php">page3</a><br/>
    <br/><br/><a href="logout.php">Logout</a>
</body>
</html>