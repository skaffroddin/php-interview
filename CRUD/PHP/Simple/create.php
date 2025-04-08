<?php
include 'db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$city = $_REQUEST['city'];

$sql= "insert into users (name, email, phone, city) values ('$name', '$email', '$phone', '$city')";
$data = mysqli_query($conn, $sql);
if ($data){
    echo "<script>
    alert('User created');
    window.location.href='index.php'</script>";
}

else{
    echo "Error:". mysqli_connect_error;
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
    <form action="" method="post">
Name <input type="text" name="name">
Email <input type="text" name="email">
Phone <input type="text"name="phone">
City <input type="text"name="city">
<input type="submit" value="submit">





    </form>
</body>
</html>