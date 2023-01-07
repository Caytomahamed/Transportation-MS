<?php

    function db_connect()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '12345678';
        $database = 'busscheduledb';

        $conn = mysqli_connect($servername, $username, $password, $database);
        return $conn;
    }
    
?>