<?php
/* istruzioni originarie
CREATE DATABASE userdb;

USE userdb;

CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);


-- Insert a sample user (password is 'password' hashed)
INSERT INTO users (username, password) VALUES ('user001', MD5('password'));
*/

// Database configuration
$host = 'localhost';
$dbname = 'userdb';
$username = 'root'; // Default XAMPP user
$password = ''; // Default XAMPP password is empty

try {
    // Connect to MariaDB
    $conn = new PDO("mysql:host=$host", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Step 1: Check if the database exists
    $dbCheckQuery = "SHOW DATABASES LIKE '$dbname'";
    $dbResult = $conn->query($dbCheckQuery);

    if ($dbResult->rowCount() == 0) {
        // Database doesn't exist, so create it
        $createDbQuery = "CREATE DATABASE $dbname";
        $conn->exec($createDbQuery);
        echo "Database '$dbname' created successfully.<br>";
    } else {
        echo "Database '$dbname' already exists.<br>";
    }

    // Use the database for subsequent queries
    $conn->exec("USE $dbname");

    // Step 2: Check if the 'users' table exists
    $tableCheckQuery = "SHOW TABLES LIKE 'users'";
    $tableResult = $conn->query($tableCheckQuery);

    if ($tableResult->rowCount() == 0) {
        // Table doesn't exist, so create it
        $createTableQuery = "
            CREATE TABLE users (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(50) NOT NULL UNIQUE,
                password VARCHAR(255) NOT NULL
            )";
        $conn->exec($createTableQuery);
        echo "Table 'users' created successfully.<br>";
        
        // Optional: Insert a default user
        $defaultPassword = md5('password'); // Use MD5 for now (replace with a stronger hash in production)
        $insertUserQuery = "INSERT INTO users (username, password) VALUES ('testuser', '$defaultPassword')";
        $conn->exec($insertUserQuery);
        echo "Default user 'testuser' inserted successfully.<br>";
    } else {
        echo "Table 'users' already exists.<br>";
    }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>