<?php 

$hostname ="localhost";
$username = "root";
$password = "12345678";
$dabaseName = "busscheduledb";

 $connection = mysqli_connect($hostname, $username, $password) or
        die ('Unable to connect. Check your connection parameters.');
        // echo "connect";
        mysqli_select_db($connection, $dabaseName ) or die(mysqli_error($connection));

?>

