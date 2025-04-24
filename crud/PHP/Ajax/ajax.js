$(document).ready(function () {
    // Load users on page load
    loadUsers();

    // Add user via AJAX
    $('#addUserForm').submit(function (e) {
        e.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();

        $.ajax({
            url: 'insert.php',
            type: 'POST',
            data: { name: name, email: email, phone: phone },
            success: function (response) {
                if (response === 'success') {
                    alert('User Added');
                    loadUsers(); // Reload users list
                    $('#addUserForm')[0].reset(); // Reset the form
                } else if (response === 'email_exist') {
                    alert('Email already exists');
                } else {
                    alert('Failed to add user');
                }
            },
            error: function () {
                alert('An error occurred while adding user');
            }
        });
    });

    // Edit user - Show dynamic form
    $(document).on('click', '.edit', function () {
        var id = $(this).data('id');

        // Fetch user details to pre-fill the form
        $.ajax({
            url: 'edit.php',
            type: 'POST',
            data: { id: id },
            success: function (response) {
                var data = JSON.parse(response); // Parse the JSON response
                
                if (data.error) {
                    alert(data.error); // Handle errors from server
                } else {
                    $('#editName').val(data.name);
                    $('#editEmail').val(data.email);
                    $('#editPhone').val(data.phone);
                    $('#editId').val(data.id);
                    $('#editForm').show(); // Show the form
                }
            },
            error: function () {
                alert('An error occurred while fetching user details');
            }
        });
    });

    // Save edited user details
    $('#editUserForm').submit(function (e) {
        e.preventDefault();
        var id = $('#editId').val();
        var name = $('#editName').val();
        var email = $('#editEmail').val();
        var phone = $('#editPhone').val();

        $.ajax({
            url: 'update.php',
            type: 'POST',
            data: { id: id, name: name, email: email, phone: phone },
            success: function (response) {
                if (response === 'success') {
                    alert('User Updated');
                    loadUsers(); // Reload users list
                    $('#editForm').hide(); // Hide the form
                    $('#editUserForm')[0].reset(); // Reset form
                } else {
                    alert('Failed to update user');
                }
            },
            error: function () {
                alert('An error occurred while updating user details');
            }
        });
    });

    // Delete user
    $(document).on('click', '.delete', function () {
        var id = $(this).data('id');

        $.ajax({
            url: 'delete.php',
            type: 'POST',
            data: { id: id },
            success: function (response) {
                if (response === 'success') {
                    loadUsers(); // Reload users list
                } else {
                    alert('Failed to delete user');
                }
            },
            error: function () {
                alert('An error occurred while deleting user');
            }
        });
    });

    // Load users function
    function loadUsers() {
        $.ajax({
            url: 'retrieve.php',
            type: 'GET',
            success: function (response) {
                $('#userTable tbody').html(response);
            },
            error: function () {
                alert('An error occurred while loading users');
            }
        });
    }
});
