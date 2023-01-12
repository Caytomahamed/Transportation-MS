<?php  
 require "./functions.php";

 $connection = db_connect();;

  if(isset($_POST['buynow'])){
    // 1) Get data form the form 
    $scheduleId = $_POST['scheduleId']; // schedule Id
    $userId = $_POST['userId']; // schedule Id
    $phone = $_POST['phone'];
    $price = $_POST['price'];
    
    $randomNumber = rand(1231,7879);
    $seat = 'SE-'.$randomNumber;
    
    // 2) IF ok send back msg and Store booking table IF not send back msg
    $sql = "INSERT INTO `bookings` (userId, bookedSeat,scheduleId,booked) VALUES
    ('$userId', '$seat','$scheduleId','1')";
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
           window.location ="home.php"
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
           window.location ="home.php"
        }, 100);
    </script> 
    
  <?php
   }
}
 ?>