<?php

if(isset($_POST['add'])){
    $drivername = $_POST["drivername"];
    $employDate = $_POST["employDate"];

    $driver = DriverController::createDriver($drivername,$employDate);

    if(count($driver) == 0){
    echo "
    <div class='alertMessage' style='display:block; background-color:rgb(243, 96, 96);'>
        <span class='closeBtn' onclick='this.parentElement.style.display=`none`;''>×</span>
        <strong>Create schedule </strong> unsuccessfull.
    </div>
    ";
    ?>
    <script type="text/javascript">
        setTimeout(() => {
           window.location ="./drivers.php"
        },100);
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
          window.location ="./drivers.php"
        }, 100);
    </script>

    <?php
   }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $drivername = $_POST["drivername"];

    $driver = DriverController::updateDriver($id,$drivername);
   if(count($driver) == 0){
    echo "
    <div class='alertMessage' style='display:block; background-color:rgb(243, 96, 96);'>
        <span class='closeBtn' onclick='this.parentElement.style.display=`none`;''>×</span>
        <strong>Update schedule </strong> unsuccessfull.
    </div>
    ";
    ?>
    <script type="text/javascript">
        setTimeout(() => {
          window.location ="./drivers.php"
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
          window.location ="./drivers.php"
        }, 100);
    </script>

    <?php
   }
}

if(isset($_POST['delete'])){
    $id = $_POST['id'];

    $driver = DriverController::deleteDriver($id);

    print_r($driver);

   if(count($driver) >= 1){
    echo "
    <div class='alertMessage' style='display:block; background-color:rgb(243, 96, 96);'>
        <span class='closeBtn' onclick='this.parentElement.style.display=`none`;''>×</span>
        <strong>Delete schedule </strong> unsuccessfull.
    </div>
    ";
    ?>
    <script type="text/javascript">
        setTimeout(() => {
            // window.location ="./drivers.php"
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
          window.location ="./drivers.php"
        }, 100);
    </script>

    <?php
   }
}
?>