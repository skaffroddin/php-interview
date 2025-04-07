<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "test_db"; // make sure this DB exists

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
