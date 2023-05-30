<?php

if(isset($_POST['add'])){
    $busno = $_POST["busno"];
    $driverId = $_POST["driverId"];

    $bus = BusController::createBus($busno, $driverId);
    if(count($bus) == 0){
    echo "
    <div class='alertMessage' style='display:block; background-color:rgb(243, 96, 96);'>
        <span class='closeBtn' onclick='this.parentElement.style.display=`none`;''>×</span>
        <strong>Create schedule </strong> unsuccessfull.
    </div>
    ";
    ?>
    <script type="text/javascript">
        setTimeout(() => {
           window.location ="./buses.php"
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
           window.location ="./buses.php"
        }, 100);
    </script>

    <?php
   }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $busno = $_POST["busno"];
    $driverId = $_POST["driverId"];

    $bus = BusController::updateBus($id, $busno, $driverId);
   if(count($bus) == 0){
    echo "
    <div class='alertMessage' style='display:block; background-color:rgb(243, 96, 96);'>
        <span class='closeBtn' onclick='this.parentElement.style.display=`none`;''>×</span>
        <strong>Update schedule </strong> unsuccessfull.
    </div>
    ";
    ?>
    <script type="text/javascript">
        setTimeout(() => {
                    window.location ="./buses.php"
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
           window.location ="./buses.php"
        }, 100);
    </script>

    <?php
   }
}

if(isset($_POST['delete'])){
    $id = $_POST['id'];

   $bus = BusController::deleteBus($id);
   if(count($bus) >= 1){
    echo "
    <div class='alertMessage' style='display:block; background-color:rgb(243, 96, 96);'>
        <span class='closeBtn' onclick='this.parentElement.style.display=`none`;''>×</span>
        <strong>Delete schedule </strong> unsuccessfull.
    </div>
    ";
    ?>
    <script type="text/javascript">
        setTimeout(() => {
            window.location ="./buses.php"
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
             window.location ="./buses.php"
        }, 100);
    </script>

    <?php
   }
}
?>