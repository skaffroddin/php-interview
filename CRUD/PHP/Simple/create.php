<?php include 'db.php'; ?>
<h2>Add User</h2>
<form method="POST">
  Name: <input type="text" name="name"><br><br>
  Email: <input type="email" name="email"><br><br>
  <button type="submit" name="save">Save</button>
</form>

<?php
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    mysqli_query($conn, "INSERT INTO users (name, email) VALUES ('$name', '$email')");
    header("Location: index.php");
}
?>
