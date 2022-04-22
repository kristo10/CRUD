<?php
 include_once("db.php");

// Fetch all users data from database
$result = mysqli_query($con, "SELECT * FROM user ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
</head>
<body>
    <a href="create.php">Add New User</a><br/><br/>

    <table width='80%' border=1>

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Created_At</th>
            <th>Updated_At</th>
        </tr>
        <?php
        while($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$user_data['id']."</td>";
            echo "<td>".$user_data['name']."</td>";
            echo "<td>".$user_data['email']."</td>";
            echo "<td>".$user_data['password']."</td>";
            echo "<td>".$user_data['created_at']."</td>";
            echo "<td>".$user_data['updated_at']."</td>";

            echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete </a></td></tr>";
        }
        ?>
    </table>

</body>
</html>