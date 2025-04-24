<?php
include ('../config/connection.php');
if($_SERVER['REQUEST_METHOD']== 'POST'){
    $email= $_REQUEST['email'];
    $password= $_REQUEST['password'];
    

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

<h5>Login User</h5>
    <form action= "" method= "post">
        Email: <input type="email" value="" name="email"><br>
        Password<input type="password" value="password" name="password"><br><br>
        <input type="submit" value="Submit" name="">



</form>
</body>
</html>