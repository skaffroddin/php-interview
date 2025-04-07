<?php include 'db.php'; ?>
<h2>Users List</h2>
<a href="create.php">Add New</a>
<table border="1" cellpadding="5">
<tr><th>ID</th><th>Name</th><th>Email</th><th>Action</th></tr>
<?php
$result = mysqli_query($conn, "SELECT * FROM users");
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>
              <a href='update.php?id={$row['id']}'>Edit</a> | 
              <a href='delete.php?id={$row['id']}'>Delete</a>
            </td>
          </tr>";
}
?>
</table>
