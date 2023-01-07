<?php 
require "../includes/connection.php";

// 1). GET ALL DATA FROM IN register.php 
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];
$phone = $_POST["phone"];    

//3). IF is Ok setup sql query
$sql ="INSERT INTO users (firstname,lastname,email,password,phone,role)VALUES('$firstname','$lastname','$email',MD5('$password') ,'$phone','CLIENT')";

// 4). use this connection and insert
mysqli_query($connection,$sql);
if(!mysqli_query($connection,$sql)) { ?> 
  <script type="text/javascript">
   alert("Same thing wrong try again!");
      window.location = "login.php";
   </script> 
<?php } 


include "userAuthentication.php";

?>
