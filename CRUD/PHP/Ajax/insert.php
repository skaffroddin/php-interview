<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
if ($conn->query($sql)) {
    echo "Record added successfully!";
} else {
    echo "Error: " . $conn->error;
}
?>

