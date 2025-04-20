<?php
include 'connection.php';
$name= $_REQUEST['name'];
$email= $_REQUEST['email'];
$phone= $_REQUEST['phone'];

 // Server-side validation
 if (empty($name) || empty($email) || empty($phone)) {
    echo "All fields are required!";
    exit;
}


$checkEmail= "select email from users where email = '$email'";
$getEmail= mysqli_query($conn,$checkEmail);
if (mysqli_num_rows($getEmail)>0){
    echo"email_exist";
}

else{


    $data= "insert into users ( name, email, phone) values('$name', '$email', '$phone')";
    $sql= mysqli_query($conn,$data);
    
    if ($sql) {
        echo "success";
    } 
    
    
    else {
        echo "Error: " . mysqli_error($conn);
    }
}



?>