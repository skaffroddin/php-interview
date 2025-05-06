<?php
// DB connection
$conn = new mysqli("localhost", "root", "", "testdb");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// Insert
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("INSERT INTO users (name, email) VALUES ('$name', '$email')");
    header("Location: ".$_SERVER['PHP_SELF']);
}

// Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM users WHERE id=$id");
    header("Location: ".$_SERVER['PHP_SELF']);
}

// Update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("UPDATE users SET name='$name', email='$email' WHERE id=$id");
    header("Location: ".$_SERVER['PHP_SELF']);
}

// Fetch single record for editing
$editUser = null;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $result = $conn->query("SELECT * FROM users WHERE id=$id");
    $editUser = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP CRUD One File</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2 class="mb-4">PHP CRUD (Single File)</h2>

    <!-- Form -->
    <form method="POST" class="mb-4">
        <input type="hidden" name="id" value="<?= $editUser['id'] ?? '' ?>">
        <div class="mb-3">
            <input type="text" name="name" class="form-control" placeholder="Name" required value="<?= $editUser['name'] ?? '' ?>">
        </div>
        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" required value="<?= $editUser['email'] ?? '' ?>">
        </div>
        <button type="submit" name="<?= $editUser ? 'update' : 'add' ?>" class="btn btn-<?= $editUser ? 'warning' : 'primary' ?>">
            <?= $editUser ? 'Update' : 'Add' ?>
        </button>
        <?php if ($editUser): ?>
            <a href="crud.php" class="btn btn-secondary">Cancel</a>
        <?php endif; ?>
    </form>

    <!-- Table -->
    <table class="table table-bordered">
        <thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Actions</th></tr></thead>
        <tbody>
        <?php
        $result = $conn->query("SELECT * FROM users");
        while ($row = $result->fetch_assoc()):
        ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td>
                <a href="?edit=<?= $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                <a href="?delete=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this record?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>

