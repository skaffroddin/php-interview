<?php
include('connection.php');
session_start();

if(isset($_SESSION['user'])){
    header('Location: dashboard.php'); // Redirect to dashboard if already logged in
    exit();
}

if($_SERVER['REQUEST_METHOD']=='POST'){

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $password = $_REQUEST['password'];
    
    
    $getmail= "select email from user where email = '$email'";
    $checkEmail= mysqli_query($conn, $getmail);

    if($checkEmail){
        if(mysqli_num_rows($checkEmail)>0){
            echo " <script>alert('Email already Exsist');</script>";
        
        }

        else{


            $sql= "insert into user(name, email, phone, password) values ('$name', '$email', '$phone', '$password')";
            $data = mysqli_query($conn, $sql);
            if($data){
                echo "<script>alert('Account created');
                window.location.href='index.php';
                </script>  ";
                exit();
            }
            else{
                echo "<script>alert('Accout not created')</script>";

            }


        }



}}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h5> REGISTER</h5>

<a href="login.php">Login</a>
<form action="" method="post">
Nmae<input type= "text" name="name"><br>

    Email<input type= "email" name="email"><br>
    Phone<input type= "number" name="phone"><br>
Password<input type= "password" name="password"><br>
    <input type="submit" value="submit">
</form>
</body>
</html>