<?php
include 'db.php';

$result = $conn->query("SELECT * FROM users");
while ($row = $result->fetch_assoc()) {
    echo "
    <tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td><button onclick='deleteRecord({$row['id']})'>Delete</button></td>
    </tr>";
}
?>

