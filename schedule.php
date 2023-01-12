<?php 
require "./functions.php";
$connection = db_connect();
if(isset($_POST['add'])){
    $routeId = $_POST['routeId'];
    $departureDate = $_POST['departureDate'];
    $departureTime = $_POST['departureTime'];
    
   $sql = "INSERT INTO schedule(departureDate,departureTime,routeId)
   VALUES('$departureDate','$departureTime','$routeId')";
    
   $result = mysqli_query($connection,$sql);
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
           window.location ="index.php"
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
           window.location ="index.php"
        }, 100);
    </script> 
  
    <?php
   }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $routeId = $_POST['routeId'];
    $departureDate = $_POST['departureDate'];
    $departureTime = $_POST['departureTime'];
    
   $sql = "UPDATE `schedule` SET `departureDate` ='".$departureDate."' , `departureTime`='".$departureTime."' , `routeId` ='".$routeId."' WHERE `id` ='".$id."'" ;
    
  $result = mysqli_query($connection,$sql);
  $rowsAffected = mysqli_affected_rows($connection);
   if(!$rowsAffected){
    echo "
    <div class='alertMessage' style='display:block; background-color:rgb(243, 96, 96);'>
        <span class='closeBtn' onclick='this.parentElement.style.display=`none`;''>×</span>
        <strong>Update schedule </strong> unsuccessfull.
    </div>
    "
    ?>
    <script type="text/javascript">
        setTimeout(() => {
           window.location ="index.php"
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
           window.location ="index.php"
        }, 100);
    </script> 
  
    <?php
   }
}

if(isset($_POST['delete'])){
    $id = $_POST['id'];
    
   $sql = "DELETE FROM `schedule` WHERE `id` = '".$id."'" ;
    
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
           window.location ="index.php"
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
           window.location ="index.php"
        }, 100);
    </script> 
  
    <?php
   }
   
}
?>