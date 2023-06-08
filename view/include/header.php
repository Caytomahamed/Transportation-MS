<header class="header">
    <div class="header__box">

        <a href="./index.php">
        <img src="../image/logo.png" alt="logo" />
        </a>
    </div>
    <div class="header_action">
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
        <a href="../../include/logout.inc.php" class="logout">Logout</a>
    </div>
</header>