<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>
    <h1>Add New User</h1>
    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <button type="submit">Add User</button>
    </form>
</body>
</html>
