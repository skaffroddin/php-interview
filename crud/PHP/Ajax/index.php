<?php
include 'connection.php';

// Fetch existing users from the database
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX CRUD</title>
</head>
<body>
    <h5>Add User</h5>
    <form id="addUserForm" action="" method="post">
        Name: <input type="text" id="name"><br>
        Email: <input type="email" id="email"><br>
        Phone: <input type="number" id="phone"><br>
        <input type="submit" value="Add User">
    </form>

    <br><br>

    <table id="userTable" border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row['name'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['phone'] . "</td>
                <td><button class='edit' data-user='" . json_encode($row) . "'>Edit</button></td>
                <td><button class='delete' data-id='" . $row['id'] . "'>Delete</button></td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='5'>No users found</td></tr>";
}
?>

        </tbody>
    </table>

    <div id="editForm" style="display: none;">
        <h5>Edit User</h5>
        <form id="editUserForm">
            Name: <input type="text" id="editName"><br>
            Email: <input type="email" id="editEmail"><br>
            Phone: <input type="text" id="editPhone"><br>
            <input type="hidden" id="editId">
            <input type="submit" value="Save Changes">
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="ajax.js"></script>
</body>
</html>
