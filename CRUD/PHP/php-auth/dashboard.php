<?php
include ('connection.php');
session_start();

if(!isset($_SESSION['user'])){
    header('Location: login.php');
    exit();

}


$email = $_SESSION['user'];
$query = "SELECT name FROM user WHERE email = '$email'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $user['name']; ?>!</h1>
    <a href="logout.php">Logout</a>
</body>
</html>