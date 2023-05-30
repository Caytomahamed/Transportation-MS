<?php
if (isset($_POST['add'])) {
    $routeId = $_POST['routeId'];
    $departureDate = $_POST['departureDate'];
    $departureTime = $_POST['departureTime'];

    $schedule = ScheduleController::createSchedule($departureDate, $departureTime, $routeId);

    if (count($schedule) == 0) {
        echo "
    <div class='alertMessage' style='display:block; background-color:rgb(243, 96, 96);'>
        <span class='closeBtn' onclick='this.parentElement.style.display=`none`;''>×</span>
        <strong>Create schedule </strong> unsuccessfull.
    </div>
    ";
        ?>
    <script type="text/javascript">
        setTimeout(() => {
           window.location ="./dashboard.php"
        }, 100);
    </script>

    <?php
return;
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
           window.location ="./dashboard.php"
        }, 100);
    </script>

    <?php
}
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $routeId = $_POST['routeId'];
    $departureDate = $_POST['departureDate'];
    $departureTime = $_POST['departureTime'];

    $schedule = ScheduleController::updateSchedule($departureDate, $departureTime, $routeId, $id);
    if (count($schedule) == 0) {
        echo "
    <div class='alertMessage' style='display:block; background-color:rgb(243, 96, 96);'>
        <span class='closeBtn' onclick='this.parentElement.style.display=`none`;''>×</span>
        <strong>Update schedule </strong> unsuccessfull.
    </div>
    "
        ?>
    <script type="text/javascript">
        setTimeout(() => {
           window.location ="./dashboard.php";
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
            window.location ="./dashboard.php"
        }, 100);
    </script>

    <?php
}
}

if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $schedule = ScheduleController::deleteSchedule($id);
    
    if (count($schedule) >= 1) {
        echo "
    <div class='alertMessage' style='display:block; background-color:rgb(243, 96, 96);'>
        <span class='closeBtn' onclick='this.parentElement.style.display=`none`;''>×</span>
        <strong>Delete schedule </strong> unsuccessfull.
    </div>
    ";
        ?>
    <script type="text/javascript">
        setTimeout(() => {
           window.location ="./dashboard.php"
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
            window.location ="./dashboard.php"
        }, 100);
    </script>

    <?php
}

}
?>