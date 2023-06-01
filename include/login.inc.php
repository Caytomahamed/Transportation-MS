<?php
include "./autoloader.inc.php";

session_start();

$email = $_POST["email"];
$password = trim($_POST["password"]);
$hashedPassword = MD5($password);

$users = UserController::login($email, $hashedPassword);

if (count($users) > 0) {
    foreach ($users as $user) {
        $_SESSION['MEMBER_ID'] = $user['id'];
        $_SESSION['fname'] = $user['firstname'];
        $_SESSION['lname'] = $user['lastname'];
        $_SESSION['position'] = $user['role'];

        if ($_SESSION['position'] == "ADMIN") {?>
        <script type="text/javascript">
             window.location = "../view/admin/dashboard.php"
        </script>
    <?php
    } else {
            ?>
        <script type="text/javascript">
            window.location = "../view/users"
        </script>
        <?php
    }}

} else {
    // If  there is no result render ->
    ?> <script type="text/javascript">
              alert("Username or Password Not Registered! Contact Your administrator.");
              window.location = "../index.php";
        </script>
     <?php
}
?>
