<?php
// Set the allowed file extensions and maximum file size (in bytes)
$allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
$maxFileSize = 5 * 1024 * 1024; // 5MB in bytes

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get file data from the form
    $fileName = $_FILES['photo']['name'];
    $fileTmpName = $_FILES['photo']['tmp_name'];
    $fileSize = $_FILES['photo']['size'];
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    // Check if the file extension is allowed
    if (in_array($fileExtension, $allowedExtensions)) {
        // Check if the file size is within the allowed limit
        if ($fileSize <= $maxFileSize) {
            // Directory to store uploaded files
            $uploadDir = 'uploads/';

            // Check if the directory exists, if not, create it
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true); // Create directory with 755 permissions
            }

            // Define the full path for the file to be uploaded
            $fileDestination = $uploadDir . basename($fileName);

            // Move the file to the destination directory
            if (move_uploaded_file($fileTmpName, $fileDestination)) {
                echo "File uploaded successfully!";
            } else {
                echo "Error moving the uploaded file.";
            }
        } else {
            // File size exceeds the limit
            echo "File size exceeds the maximum allowed size of 5MB.";
        }
    } else {
        // Invalid file extension
        echo "Invalid file type. Only JPG, JPEG, PNG, and GIF are allowed.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <h3>Upload a Photo</h3>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select Photo to Upload:
        <input type="file" name="photo" required><br><br>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
