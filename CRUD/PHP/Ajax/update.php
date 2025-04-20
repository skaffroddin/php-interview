<?php
include 'connection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Update user info
$sql = "UPDATE users SET name = '$name', email = '$email', phone = '$phone' WHERE id = '$id'";
if (mysqli_query($conn, $sql)) {
    echo "success";
} else {
    echo "error";
}
?>
