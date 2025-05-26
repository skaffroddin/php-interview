<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>

    
    <form action="/update/{{ $user->id }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $data->name }}" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $data->email }}" required>
        <br>
        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" value="{{ $data->phone }}" required>
        <br>
        <label for="city">City:</label>
        <input type="text" name="city" id="city" value="{{ $data->city }}" required>
        <br>
        <button type="submit">Update</button>
    </form>
    <br>
    <a href="/">Back to Users List</a>
</body>
</html>
