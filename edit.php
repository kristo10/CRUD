<?php
// include database connection file
include_once("db.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    if ($_POST['password']) {
        $password=md5($_POST['password']);
    }

    // update user data
    $result = mysqli_query($con, "UPDATE user SET name='$name',email='$email',password='$password' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($con, "SELECT * FROM user WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['name'];
    $email = $user_data['email'];
    $password = md5($user_data['password']);
}
?>
<html>
<head>
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value=<?php echo $name;?>></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value=<?php echo $email;?>></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>