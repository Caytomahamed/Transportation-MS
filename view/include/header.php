<header class="header">
    <div class="header__box">
        <img src="../image/logo.png" alt="logo" />
    </div>
    <div class="header_action">
        <a href="../../include/logout.inc.php">Logout</a>
        <div class="header__porfile">
            <div class="header__porfile__box">
            <?php
            if (!$userImage) {
                $userImage = "IMG-user.svg";
            }
            echo '<img src="../uploads/' . $userImage . '" alt="profile" />';
            ?>
            </div>
           <a lass="profileBtn" href="../users/clientdashboard.php">Profile</a></button>
        </div>
    </div>
</header>