<?php 
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

///////////////////////////////////////////////////
// Connection Setup 

$hostname ="localhost";
$username = "root";
$password = "12345678";
$dabaseName = "busscheduledb";


$connection = mysqli_connect($hostname, $username, $password) or
        die ('Unable to connect. Check your connection parameters.');
        // echo "connect";
        mysqli_select_db($connection, $dabaseName ) or die(mysqli_error($connection));
        
//////////////////////////////////////////////////
// Get user into the session and get his full information 

$userId =  $_SESSION["MEMBER_ID"];
$firstName = $_SESSION['fname'];
$lastName = $_SESSION['lname'];

$sql = "SELECT * FROM users WHERE id = '$userId'";

$user =  mysqli_query($connection,$sql); 
 $arr = array();
 if(mysqli_num_rows($user))
        while($row = mysqli_fetch_assoc($user))
            $arr[] = $row;
        $userJson = json_encode($arr); 

////////////////////////////////////////////////

?>