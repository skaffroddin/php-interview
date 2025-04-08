<?php
include 'db.php';
$uid= $_REQUEST['id'];
$sql= "delete from users where id='$uid'";
$data= mysqli_query($conn, $sql);
if($data){
    echo"<script>
    alert('User Deleted');
    window.location.href='index.php'</script>";
    
}



?>