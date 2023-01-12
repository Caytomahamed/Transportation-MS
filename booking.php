<?php 
require "./functions.php";
$connection = db_connect();

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $userId = $_POST["userId"];
    $scheduleId = $_POST["scheduleId"];
    
   $sql = "UPDATE `bookings` SET `userId` ='".$userId."' , `scheduleId`='".$scheduleId."' WHERE `id` ='".$id."'" ;
    
  $result = mysqli_query($connection,$sql);
  $rowsAffected = mysqli_affected_rows($connection);
   if(!$rowsAffected){
    echo "
    <div class='alertMessage' style='display:block; background-color:rgb(243, 96, 96);'>
        <span class='closeBtn' onclick='this.parentElement.style.display=`none`;''>×</span>
        <strong>Update Booking </strong> unsuccessfull.
    </div>
    ";
    ?>
    <script type="text/javascript">
        setTimeout(() => {
                    window.location ="bookingPage.php"
        }, 100);
    </script> 
  
    <?php
   }else {
    echo "
    <div class='alertMessage' style='display:block;'>
        <span class='closeBtn' onclick='this.parentElement.style.display=`none`;''>×</span>
        <strong>Update Booking </strong> successfull.
    </div>
    ";
    ?>
    <script type="text/javascript">
        setTimeout(() => {
           window.location ="bookingPage.php"
        }, 100);
    </script> 
  
    <?php
   }
}

if(isset($_POST['delete'])){
    $id = $_POST['id'];
    
   $sql = "DELETE FROM `bookings` WHERE `id` = '".$id."'" ;
    
   $result = mysqli_query($connection,$sql);
   $rowsAffected = mysqli_affected_rows($connection);
   if(!$rowsAffected){
    echo "
    <div class='alertMessage' style='display:block; background-color:rgb(243, 96, 96);'>
        <span class='closeBtn' onclick='this.parentElement.style.display=`none`;''>×</span>
        <strong>Delete Booking </strong> unsuccessfull.
    </div>
    ";
    ?>
    <script type="text/javascript">
        setTimeout(() => {
                    window.location ="bookingPage.php"
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
             window.location ="bookingPage.php"
        }, 100);
    </script> 
  
    <?php
   }
}
?>