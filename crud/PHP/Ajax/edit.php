<?php
include 'connection.php';

$id = $_POST['id'];

// Fetch user details from the database
$query = "SELECT * FROM users WHERE id = '$id'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    echo json_encode($user); // Return user data as JSON
} else {
    echo json_encode(['error' => 'User not found']);
}
?>
