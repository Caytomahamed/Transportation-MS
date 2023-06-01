<?php

  if(isset($_POST['buynow'])){
    // 1) Get data form the form
    $scheduleId = $_POST['scheduleId']; // schedule Id
    $userId = $_POST['userId']; // schedule Id

    $booking = BookController::createBooking($userId,$scheduleId);
    if(count($booking) == 0){
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
           window.location ="../users/index.php"
        }, 100);
    </script>

  <?php
   }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $userId = $_POST["userId"];
    $scheduleId = $_POST["scheduleId"];

    $book = BookController::updateBooking($id, $userId, $scheduleId);
   if(count($book) == 0){
    echo "
    <div class='alertMessage' style='display:block; background-color:rgb(243, 96, 96);'>
        <span class='closeBtn' onclick='this.parentElement.style.display=`none`;''>×</span>
        <strong>Update Booking </strong> unsuccessfull.
    </div>
    ";
    ?>
    <script type="text/javascript">
        setTimeout(() => {
             window.location ="./booking.php"
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
            window.location ="./booking.php"
        }, 100);
    </script>

    <?php
   }
}

if(isset($_POST['delete'])){
    $id = $_POST['id'];

   $book = BookController::deleteBooking($id);
   if(count($book) >= 1){
    echo "
    <div class='alertMessage' style='display:block; background-color:rgb(243, 96, 96);'>
        <span class='closeBtn' onclick='this.parentElement.style.display=`none`;''>×</span>
        <strong>Delete Booking </strong> unsuccessfull.
    </div>
    ";
    ?>
    <script type="text/javascript">
        setTimeout(() => {
            window.location ="./booking.php"
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
             window.location ="./booking.php"
        }, 100);
    </script>

    <?php
   }
}
?>
