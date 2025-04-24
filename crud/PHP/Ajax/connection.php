<?php
// Database connecttion
$host="localhost";
$user="root";
$password="";
$db_name="demo";
$conn= mysqli_connect($host,$user,$password,$db_name);
if($conn){
    // echo "Done";
}
else{
    echo "Not connect ". mysqli_connect_error();
}
?>