<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h5>Add users</h5>

  <form action="{{ route('insert') }}" method="post">
      @csrf
      <label for="name">Name</label>
      <input type="text" name="name" id="name"><br>
      <label for="email">Email</label>
      <input type="email" name="email" id="email"><br>
      <label for="phone">Phone</label>
      <input type="number" name="phone" id="phone"><br>
      <input type="submit" name="save" value="Save">
  </form>

  <br>

  <h4>User List</h4>
  <table border="2px">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($users as $items)
      <tr>
        <td>{{ $items->name }}</td>
        <td>{{ $items->email }}</td>
        <td>{{ $items->phone }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</body>
</html>
