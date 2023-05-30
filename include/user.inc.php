<?php

if (isset($_POST['update']) && isset($_FILES["image"])) {
    include "./autoloader.inc.php";
    $id = $_POST['id'];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $imageUrl = null;

    $user = UserController::updateUser($id, $firstname, $lastname, $email, $password, $phone, $imageUrl);

    if (!$user) {?>
  <script type="text/javascript">
   alert("The User already exits Please Try another one");
      window.location = "../view/loginView.php";
   </script>
<?php } else {?>
   <script type="text/javascript">
      window.location = "../view/clientdashboard.php";
   </script>
<?php }

}

if (isset($_POST['add'])) {
    // 1). GET ALL DATA FROM IN register.php
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $imageUrl = null;
    $role = "CLIENT";

    $hashpassword = md5($password);

    //3). IF is Ok setup sql query
    $user = UserController::createUser($firstname, $lastname, $email, $hashpassword, $phone, $imageUrl, $role);

    if (count($user) == 0) {
        echo "
    <div class='alertMessage' style='display:block; background-color:rgb(243, 96, 96);'>
        <span class='closeBtn' onclick='this.parentElement.style.display=`none`;''>×</span>
        <strong>Create schedule </strong> unsuccessfull.
    </div>
    ";
        ?>
    <script type="text/javascript">
        setTimeout(() => {
           window.location ="./users.php"
        }, 100);
    </script>

    <?php
} else {
        echo "
    <div class='alertMessage' style='display:block;'>
        <span class='closeBtn' onclick='this.parentElement.style.display=`none`;''>×</span>
        <strong>Create schedule </strong> successfull.
    </div>
    ";
        ?>
    <script type="text/javascript">
        setTimeout(() => {
             window.location ="./users.php"
        }, 100);
    </script>

    <?php
}
}

if (isset($_POST['updateAdmin'])) {
    $id = $_POST['id'];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = MD5($_POST["password"]);
    $phone = $_POST["phone"];

    $id = $_POST['id'];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $imageUrl = null;

    $user = UserController::updateUser($id, $firstname, $lastname, $email, $password, $phone, $imageUrl);

    if (count($user) == 0) {
        echo "
    <div class='alertMessage' style='display:block; background-color:rgb(243, 96, 96);'>
        <span class='closeBtn' onclick='this.parentElement.style.display=`none`;''>×</span>
        <strong>Update schedule </strong> unsuccessfull.
    </div>
    ";
        ?>
    <script type="text/javascript">
        setTimeout(() => {
            window.location ="./users.php"
        }, 100);
    </script>

    <?php
} else {
        echo "
    <div class='alertMessage' style='display:block;'>
        <span class='closeBtn' onclick='this.parentElement.style.display=`none`;''>×</span>
        <strong>Update schedule </strong> successfull.
    </div>
    ";
        ?>
    <script type="text/javascript">
        setTimeout(() => {
             window.location ="./users.php"
        }, 100);
    </script>

    <?php
}
}

if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $user = UserController::deleteUser($id);
    if (count($user) >= 1) {
        echo "
    <div class='alertMessage' style='display:block; background-color:rgb(243, 96, 96);'>
        <span class='closeBtn' onclick='this.parentElement.style.display=`none`;''>×</span>
        <strong>Delete schedule </strong> unsuccessfull.
    </div>
    ";
        ?>
    <script type="text/javascript">
        setTimeout(() => {
            window.location ="./users.php";
        }, 100);
    </script>

    <?php
} else {
        echo "
    <div class='alertMessage' style='display:block;'>
        <span class='closeBtn' onclick='this.parentElement.style.display=`none`;''>×</span>
        <strong>Delete schedule </strong> successfull.
    </div>
    ";
        ?>
    <script type="text/javascript">
        setTimeout(() => {
            window.location ="./users.php"
        }, 100);
    </script>

    <?php
}
}
?>