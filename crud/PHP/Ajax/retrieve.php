<?php
include 'connection.php';

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row['name'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['phone'] . "</td>
                <td><button class='edit' data-id='" . $row['id'] . "'>Edit</button></td>
                <td><button class='delete' data-id='" . $row['id'] . "'>Delete</button></td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5'>No users found</td></tr>";
}
?>
