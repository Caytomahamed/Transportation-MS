<?php
require "../includes/connection.php";
session_start();

$email = $_POST["email"];
$password = trim($_POST["password"]);
$hashedPassword = MD5($password);

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$hashedPassword'";

$result = $connection->query($sql);

if ($result->num_rows > 0) {
    $user = mysqli_fetch_array($result);
    $_SESSION['MEMBER_ID'] = $user['id'];
    $_SESSION['fname'] = $user['firstname'];
    $_SESSION['lname'] = $user['lastname'];
    $_SESSION['position'] = $user['role'];

    if ($_SESSION['position'] == "ADMIN") {?>
         <script type="text/javascript">

                  window.location = "../index.php"
            </script>
        <?php
} else {
        ?>
         <script type="text/javascript">
                  //then it will be redirected to home.php
                  window.location = "../home.php"
            </script>
        <?php
}
} else {
    // If  there is no result render ->
    ?> <script type="text/javascript">
              alert("Username or Password Not Registered! Contact Your administrator.");
              window.location = "login.php";
        </script>
     <?php

    mysqli_close($connection);
}
?>
