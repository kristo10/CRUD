
<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="create.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    <?php
    include_once("db.php");

    if(isset($_POST['Submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $created_at = time();
            $updated_at = time();

            // include database connection file
            // Insert
            $result = mysqli_query($con, "INSERT INTO user(name, email, password, created_at, updated_at) VALUES
                ('$name', '$email', '$password', NOW(), NOW())");

            echo "Account i ri u shtu ne database";

        }

        ?>
  </body>
</html>