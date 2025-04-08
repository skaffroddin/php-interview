<?php
$host  = 'localhost';
$username = 'root';
$password = '';
$db= 'affy';
$conn = mysqli_connect($host, $username, $password, $db);
if($conn){
    // echo"Oky";

}
else{
    echo"Not okay";
}

?>