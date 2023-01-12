<?php 
require "./functions.php";
$connection = db_connect();
if(isset($_POST['add'])){
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
    $rowsAffected = mysqli_affected_rows($connection);
    if(!$rowsAffected){
    echo "
    <div class='alertMessage' style='display:block; background-color:rgb(243, 96, 96);'>
        <span class='closeBtn' onclick='this.parentElement.style.display=`none`;''>×</span>
        <strong>Create schedule </strong> unsuccessfull.
    </div>
    ";
    ?>
    <script type="text/javascript">
        setTimeout(() => {
           window.location ="usersPage.php"
        }, 100);
    </script> 
  
    <?php
   }else {
    echo "
    <div class='alertMessage' style='display:block;'>
        <span class='closeBtn' onclick='this.parentElement.style.display=`none`;''>×</span>
        <strong>Create schedule </strong> successfull.
    </div>
    ";
    ?>
    <script type="text/javascript">
        setTimeout(() => {
           window.location ="usersPage.php"
        }, 100);
    </script> 
  
    <?php
   }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = MD5($_POST["password"]);
    $phone = $_POST["phone"];    
    
    echo $id;
    
   $sql = "UPDATE `users` SET `firstname` ='".$firstname."' , `lastname`='".$lastname."' , `email` ='".$email."',`password` ='".$password."',`phone` ='".$phone."' WHERE `id` ='".$id."'" ;
    
  $result = mysqli_query($connection,$sql);
  $rowsAffected = mysqli_affected_rows($connection);
   if(!$rowsAffected){
    echo "
    <div class='alertMessage' style='display:block; background-color:rgb(243, 96, 96);'>
        <span class='closeBtn' onclick='this.parentElement.style.display=`none`;''>×</span>
        <strong>Update schedule </strong> unsuccessfull.
    </div>
    ";
    ?>
    <script type="text/javascript">
        setTimeout(() => {
                    window.location ="usersPage.php"
        }, 100);
    </script> 
  
    <?php
   }else {
    echo "
    <div class='alertMessage' style='display:block;'>
        <span class='closeBtn' onclick='this.parentElement.style.display=`none`;''>×</span>
        <strong>Update schedule </strong> successfull.
    </div>
    ";
    ?>
    <script type="text/javascript">
        setTimeout(() => {
           window.location ="usersPage.php"
        }, 100);
    </script> 
  
    <?php
   }
}

if(isset($_POST['delete'])){
    $id = $_POST['id'];
    
   $sql = "DELETE FROM `users` WHERE `id` = '".$id."'" ;
    
   $result = mysqli_query($connection,$sql);
   $rowsAffected = mysqli_affected_rows($connection);
   if(!$rowsAffected){
    echo "
    <div class='alertMessage' style='display:block; background-color:rgb(243, 96, 96);'>
        <span class='closeBtn' onclick='this.parentElement.style.display=`none`;''>×</span>
        <strong>Delete schedule </strong> unsuccessfull.
    </div>
    ";
    ?>
    <script type="text/javascript">
        setTimeout(() => {
                    window.location ="usersPage.php"
        }, 100);
    </script> 
  
    <?php
   }else {
    echo "
    <div class='alertMessage' style='display:block;'>
        <span class='closeBtn' onclick='this.parentElement.style.display=`none`;''>×</span>
        <strong>Delete schedule </strong> successfull.
    </div>
    ";
    ?>
    <script type="text/javascript">
        setTimeout(() => {
             window.location ="usersPage.php"
        }, 100);
    </script> 
  
    <?php
   }
}
?>