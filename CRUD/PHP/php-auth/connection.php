<?php
$server = 'localhost';
$user = 'root';
$pass = "";
$db = "php_auth";

$conn = mysqli_connect($server,$user,$pass,$db);
if($conn){
    // echo "Connected";
}
else{
    echo "Error ".mysqli_error();
}
?>