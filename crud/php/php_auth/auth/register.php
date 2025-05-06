<?php
include('../config/connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $degree = $_POST['degree'];
    $skills = implode(',', $_POST['skills']); // Comma-separated skills
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password

    // Photo upload
    $uploadDir = '../uploads/';
    if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true); // Create the directory with 755 permissions
}
    $fileName = $_FILES['photo']['name'];
    $fileTmpName = $_FILES['photo']['tmp_name'];
    $photo = $uploadDir . basename($fileName);
    

    if (move_uploaded_file($fileTmpName, $photo)) {
        // Insert data into the database
        $query = "INSERT INTO user (name, email, phone, gender, degree, skills, password, photo)
                  VALUES ('$name', '$email', '$phone', '$gender', '$degree', '$skills', '$password', '$photo')";

        if (mysqli_query($conn, $query)) {
            echo "Registration successful!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "File upload failed.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h3>Register Now</h3>
    <form action="" method="post" enctype="multipart/form-data">
        Name: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
        Phone: <input type="number" name="phone" required><br>
        Gender:
        <input type="radio" name="gender" value="male" required> Male
        <input type="radio" name="gender" value="female" required> Female <br>
        Degree:
        <select name="degree" required>
            <option value="bca">BCA</option>
            <option value="mca">MCA</option>
            <option value="btech">BTECH</option>
            <option value="mtech">MTECH</option>
        </select><br>
        Skills:
        <input type="checkbox" name="skills[]" value="html"> HTML
        <input type="checkbox" name="skills[]" value="css"> CSS
        <input type="checkbox" name="skills[]" value="javascript"> JavaScript
        <input type="checkbox" name="skills[]" value="php"> PHP <br>
        Password: <input type="password" name="password" required><br>
        Photo: <input type="file" name="photo" required><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>
