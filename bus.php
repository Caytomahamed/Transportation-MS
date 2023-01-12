<?php 
require "./functions.php";
$connection = db_connect();
if(isset($_POST['add'])){
    // 1). GET ALL DATA FROM IN register.php 
    $busno = $_POST["busno"];
    $driverId = $_POST["driverId"];

    //3). IF is Ok setup sql query
    $sql ="INSERT INTO bus(busno,driverId)VALUES('$busno','$driverId')";

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
           window.location ="busPage.php"
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
           window.location ="busPage.php"
        }, 100);
    </script> 
  
    <?php
   }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $busno = $_POST["busno"];
    $driverId = $_POST["driverId"]; 
    
   $sql = "UPDATE `bus` SET `busno` ='".$busno."' , `driverId`='".$driverId."' WHERE `id` ='".$id."'" ;
    
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
                    window.location ="busPage.php"
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
           window.location ="busPage.php"
        }, 100);
    </script> 
  
    <?php
   }
}

if(isset($_POST['delete'])){
    $id = $_POST['id'];
    
   $sql = "DELETE FROM `bus` WHERE `id` = '".$id."'" ;
    
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
                    window.location ="busPage.php"
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
             window.location ="busPage.php"
        }, 100);
    </script> 
  
    <?php
   }
}
?>