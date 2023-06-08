<?php

if (isset($_POST['update'])) {
    include "./autoloader.inc.php";
    $id = $_POST['id'];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = intval($_POST["phone"]);
    $hashpassword = md5($password);

    $file = $_FILES["image"];

    $fileName = $_FILES["image"]["name"];
    $fileTmpName = $_FILES["image"]["tmp_name"];
    $fileSize = $_FILES["image"]["size"];
    $fileError = $_FILES["image"]["error"];
    $fileType = $_FILES["image"]["type"];

    $fileExtension = explode(".", $fileName);
    $fileActaulExtension = strtolower(end($fileExtension));

    $allowed = array("jpg", "jpeg", "png");

    if (in_array($fileActaulExtension, $allowed)) {
        if ($fileError === 0) {

            if ($fileSize < 1_000_000) {
                $newFileName = uniqid("", true) . "image" . "." . $fileActaulExtension;
                $fileDestination = "../view/uploads/" . $newFileName;
                $imageUrl = strval($newFileName);

                $user = UserController::updateUser($id, $firstname, $lastname, $email, $hashpassword, $phone, $imageUrl);

                move_uploaded_file($fileTmpName, $fileDestination);

                if (!$user) {?>
                <script type="text/javascript">
                alert("The User already exits Please Try another one");
                    window.location = "../view/users/clientdashboard.php";
                </script>
                <?php } else {?>
                <script type="text/javascript">
                    window.location = "../view/users/clientdashboard.php";
                </script>
                <?php }

            } else {
                ?>
            <script type="text/javascript">
            alert("Your not allowed to appload this Type of file! ");
                window.location = "../view/users/clientdashboard.php";
            </script>
            <?php
}

        } else {
            ?>
        <script type="text/javascript">
            alert("Your not allowed to uppload there is Error!");
               window.location = "../view/users/clientdashboard.php";
            </script>
        <?php
}

    } else {
        ?>
    <script type="text/javascript">
      alert("Your not allowed to uppload this Type of file!");
          window.location = "../view/users/clientdashboard.php";
     </script>
    <?php
}
}

if (isset($_POST['add'])) {
    // 1). GET ALL DATA FROM IN register.php
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = intval($_POST["phone"]);
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
    $phone = intval($_POST["phone"]);

    $file = $_FILES["image"];

    $fileName = $_FILES["image"]["name"];
    $fileTmpName = $_FILES["image"]["tmp_name"];
    $fileSize = $_FILES["image"]["size"];
    $fileError = $_FILES["image"]["error"];
    $fileType = $_FILES["image"]["type"];

    $fileExtension = explode(".", $fileName);
    $fileActaulExtension = strtolower(end($fileExtension));

    $allowed = array("jpg", "jpeg", "png");
    if (in_array($fileActaulExtension, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1_000_000) {
                $newFileName = uniqid("", true) . "image" . "." . $fileActaulExtension;
                $fileDestination = "../uploads/" . $newFileName;
                $imageUrl = strval($newFileName);

                $user = UserController::updateUser($id, $firstname, $lastname, $email, $password, $phone, $imageUrl);

                move_uploaded_file($fileTmpName, $fileDestination);
                if (!$user) {
                echo "
                    <div class='alertMessage' style='display:block; background-color:rgb(243, 96, 96);'>
                    <span class='closeBtn' onclick='this.parentElement.style.display=`none`;''>×</span>
                    <strong>Error Update:</strong> unsuccessfull.
                    </div>
                ";
                ?>
                <script type="text/javascript">
                     setTimeout(() => {
                        //  window.location ="./users.php"
                     }, 1000);
                </script>
                <?php } else {
                    echo "
                    <div class='alertMessage' style='display:block;'>
                    <span class='closeBtn' onclick='this.parentElement.style.display=`none`;''>×</span>
                    <strong>Update </strong> successfull.
                    </div>
                    ";
                    ?>
                <script type="text/javascript">
                     setTimeout(() => {
                         window.location ="./users.php"
                     }, 1000);
                </script>
                <?php
}
            } else {
                ?>
                <script type="text/javascript">
                alert("Your not allowed to appload this Type of file! ");
                  window.location ="./users.php";
                </script>
                <?php
}

        } else {
            ?>
            <script type="text/javascript">
                alert("Your not allowed to uppload there is Error!");
                window.location ="./users.php";
                </script>
            <?php
}

    } else {
        ?>
        <script type="text/javascript">
        alert("Your not allowed to uppload this Type of file!");
                window.location ="./users.php";
        </script>
        <?php
}
}

if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $user = UserController::deleteUser($id);
    if ($user) {
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