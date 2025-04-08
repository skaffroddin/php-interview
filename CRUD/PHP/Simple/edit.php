<?php
include 'db.php';
$uid= $_REQUEST['id'];
// echo $uid;

$sql= "select * from users where id='$uid'";
$data = mysqli_query($conn, $sql);
$resault= mysqli_fetch_assoc($data);
// print_r($resault);


if($_SERVER['REQUEST_METHOD']=== 'POST'){
$uid= $_REQUEST['id'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$city = $_REQUEST['city'];
// print_r($name);

$sql= "update users set name = '$name', email= '$email', phone= '$phone', city= '$city'";
$update = mysqli_query($conn, $sql);
if($update){
    echo "<script>
    alert('Update Success');
    window.location.href = 'index.php';
</script>";
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
Name <input type="text" name="name" value="<?php echo $resault['name'];?>">
Email <input type="text" name="email"value="<?php echo $resault['email'];?>">
Phone <input type="text"name="phone"value="<?php echo $resault['phone'];?>">
City <input type="text"name="city"value="<?php echo $resault['city'];?>">
<input type="submit" value="submit">





    </form>
</body>
</html>