<?php
if (!isset($_SESSION)) {
    session_start();
}

$userId = $_SESSION["MEMBER_ID"];
$firstName = $_SESSION['fname'];
$lastName = $_SESSION['lname'];

$sql = "SELECT * FROM users WHERE id = '$userId'";

$user = mysqli_query($connection, $sql);
$arr = array();
if (mysqli_num_rows($user)) {
    while ($row = mysqli_fetch_assoc($user)) {
        $arr[] = $row;
    }
}

$userJson = json_encode($arr);

////////////////////////////////////////////////
