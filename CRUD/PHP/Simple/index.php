<?php
include 'db.php';
$sql= "select * from users";
$data= mysqli_query($conn, $sql);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>USERS</h4>

    <a href="create.php">Add user</a>

    <table border="2px">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>City</th>
            <th>Action</th>
        </tr>
 <?php  while($resoult= mysqli_fetch_assoc($data)) {?>
        <tr>

        <td> <?php echo $resoult['name'];?></td>
        <td><?php echo $resoult['name'];?></td>
        <td><?php echo $resoult['name'];?></td>
        <td><?php echo $resoult['city'];?></td>
        <td> <a href="edit.php?id=<?php echo $resoult['id'] ?>">Edit</a>
        <a href="delete.php?id=<?php echo $resoult['id'] ?>">Delete</a>


        </td>



        </tr>

<?php }?>

    </table>
</body>
</html>
