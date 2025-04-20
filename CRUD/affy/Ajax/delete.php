<?php
include 'connection.php';

$id = $_POST['id'];

// Delete user
$sql = "DELETE FROM users WHERE id = '$id'";
if (mysqli_query($conn, $sql)) {
    echo "success";
} else {
    echo "error";
}
?>
