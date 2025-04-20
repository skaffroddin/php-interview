<?php
include('connection.php');
session_start();
if(isset($_SESSION['user'])){
    header('Location:dashboard.php');
    exit();
}

if($_SERVER['REQUEST_METHOD']== 'POST'){

$email = $_POST['email'];
$password = $_POST['password'];

$getdata = "select email, password from user where email= '$email' and password= '$password'";
$data = mysqli_query($conn, $getdata);
$result = mysqli_fetch_assoc($data);

if($result){

    $_SESSION['user']= $result['email'];

    echo "<script>
            alert('Login successful');
            window.location.href = 'dashboard.php'; // Redirect to dashboard
        </script>";
        exit();




}
else {
    // Login failed
    echo "<script>alert('Invalid email or password');</script>";
}

}






?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<a href="register.php">Register</a>
<h5> Login</h5>
<form action="" method="post">
    Email<input type= "email" name="email"><br>
    Password<input type= "password" name="password"><br>
    <input type="submit" value="Login">
</form>
</body>
</html>