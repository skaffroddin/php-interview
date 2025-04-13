<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple AJAX CRUD</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>AJAX CRUD</h1>
    
    <!-- Form to Add Record -->
    <form id="addForm">
        <input type="text" id="name" placeholder="Enter Name" required>
        <input type="email" id="email" placeholder="Enter Email" required>
        <button type="submit">Add</button>
    </form>

    <!-- Table to Display Data -->
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="dataTable"></tbody>
    </table>

    <script>
        // Fetch Records
        function fetchRecords() {
            $.get('fetch.php', function(data) {
                $('#dataTable').html(data);
            });
        }

        // Add Record
        $('#addForm').on('submit', function(e) {
            e.preventDefault();
            let name = $('#name').val();
            let email = $('#email').val();

            $.post('insert.php', { name: name, email: email }, function(response) {
                alert(response);
                fetchRecords();
                $('#addForm')[0].reset();
            });
        });

        // Delete Record
        function deleteRecord(id) {
            $.post('delete.php', { id: id }, function(response) {
                alert(response);
                fetchRecords();
            });
        }

        // Load Data on Page Load
        fetchRecords();
    </script>
</body>
</html>

