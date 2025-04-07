<?php
include 'db.php';

if ($_POST['type'] == 'add') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  mysqli_query($conn, "INSERT INTO users (name, email) VALUES ('$name', '$email')");
}

if ($_POST['type'] == 'delete') {
  $id = $_POST['id'];
  mysqli_query($conn, "DELETE FROM users WHERE id=$id");
}

if ($_POST['type'] == 'read') {
  $result = mysqli_query($conn, "SELECT * FROM users");
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
      <td>{$row['id']}</td>
      <td>{$row['name']}</td>
      <td>{$row['email']}</td>
      <td><button onclick='deleteUser({$row['id']})'>Delete</button></td>
    </tr>";
  }
}
