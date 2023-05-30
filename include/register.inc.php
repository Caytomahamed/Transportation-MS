<?php
include "./autoloader.inc.php";

// 1). GET ALL DATA FROM IN register.php
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];
$phone = $_POST["phone"];
$imageUrl = null;
$role = "CLIENT";

$hashedPassword = md5($password);

if($firstname == null || $lastname == null ||  $email == null || $password == null || $phone == null ){?>
    <script type="text/javascript">
      alert("All field are required");
      window.location = "../view/registerView.php";
   </script>
<?php }

$user = UserController::createUser($firstname, $lastname, $email, $hashedPassword, $phone, $imageUrl, $role);

if (!$user) {?>
  <script type="text/javascript">
   alert("The User already exits Pslease Try another one");
      window.location = "../view/loginView.php";
   </script>
<?php } else {?>
   <script type="text/javascript">
      window.location = "../view/loginView.php";
   </script>
<?php }

?>
