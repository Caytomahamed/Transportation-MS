<?php

// BEFORE WE STORED INFORMATION OF MEMBER, START SESSION 
 session_start();
 
 // CHECK IF THE VERSION OF VARIABLE member_id is not set 
 
 function logged_in(){
    return isset($_SESSION["MEMBER_ID"]);
   // return false;
 }
 
 // IF IS NOT SET SESSION REDIRECT TO login.php
 
 function confirm_logged_in (){
    if(!logged_in()){ ?> 
    <script type="text/javascript">
        window.location = "./authentication/login.php";
    </script>
    <?php
    }
 }
 ?>