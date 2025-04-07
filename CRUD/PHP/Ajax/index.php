<!DOCTYPE html>
<html>
<head>
  <title>Simple AJAX PHP CRUD</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <h2>Simple AJAX PHP CRUD</h2>

  <input type="text" id="name" placeholder="Name">
  <input type="text" id="email" placeholder="Email">
  <button onclick="addUser()">Add</button>

  <br><br>
  <table border="1" id="userTable">
    <tr><th>ID</th><th>Name</th><th>Email</th><th>Action</th></tr>
  </table>

  <script>
    function loadUsers() {
      $.post("ajax.php", { type: "read" }, function(data) {
        $("#userTable").append(data);
      });
    }

    function addUser() {
      var name = $("#name").val();
      var email = $("#email").val();
      if (name && email) {
        $.post("ajax.php", { type: "add", name: name, email: email }, function() {
          location.reload(); // simple way
        });
      } else {
        alert("Enter both fields.");
      }
    }

    function deleteUser(id) {
      $.post("ajax.php", { type: "delete", id: id }, function() {
        location.reload();
      });
    }

    loadUsers();
  </script>
</body>
</html>
