<?php
// Database configuration
$host = 'localhost';       // Database host
$dbname = 'your_database'; // Database name
$username = 'root';        // Database username
$password = '';            // Database password

try {
    // Create a PDO instance (connect to the database)
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $username, $password);

    // Set PDO error mode to exception for better error handling
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Database connection successful!";
} catch (PDOException $e) {
    // Handle connection errors
    echo "Database connection failed: " . $e->getMessage();
}
?>

