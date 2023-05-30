<?php
require "session.inc.php";

session_destroy();
?>

<script type="text/javascript">
    alert("Successfully logout!");
    window.location = "../view/loginView.php";
</script>