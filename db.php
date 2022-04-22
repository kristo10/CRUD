<?php
$user = 'root';
$pass = '';
$db = 'projekt';

//Lidhja me db
$con = mysqli_connect("localhost", $user, $pass, $db);

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);

}


    //INSERT ose regjistrimi
  // $sql = "INSERT INTO user (name, email, password, created_at, updated_at)
  //    VALUES ('$name','$email','$password', NOW(), NOW())";
  //    mysqli_query($con, $sql);
  //    echo '<center><h1>Ju u regjistruat</h1></center>';



  //   //UPDATE
  // $sql = "UPDATE user SET email='tarifakri@gmial.com' WHERE id=1";
  //   if(mysqli_query($con, $sql)){
  //   echo "<center><h1>Records were updated successfully.</h1></center>";
  //   } else {
  //   echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
  //   }

  //   //DELETE
  // $sql = "DELETE FROM user WHERE id=3";

  //   if ($con->query($sql) === TRUE) {
  //     echo "<center><h1>Record deleted successfully</h1></center>";
  //   } else {
  //     echo "Error deleting record:$sql. " . mysqli_error($con);
  //   }

    //READ
// $sql = "SELECT * FROM user";
// $result = $con->query($sql);

// if ($result->num_rows > 0) {

//     while($row = $result->fetch_assoc()) {
//         echo " Name: " . $row["name"]. " | " ."Email: " . $row["email"]. " | " ."Password: " . $row["password"] . "<br><br>";
//     }
// } else {
//     echo "0 results";
// }
?>


