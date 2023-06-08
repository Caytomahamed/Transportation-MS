
<div class="menu__wrapper">
        <div class="menu__box dashboard__sidebar">
        <img src="../image/close_FILL0_wght400_GRAD0_opsz48.svg" alt="dashboard" class="close__menu"/>
        <div>
        <div class="dashboard__profile">

          <div class="dashboard__profile__image">
<?php
if (!$userImage) {
    $userImage = "IMG-user.svg";
}
echo '<img src="../uploads/' . $userImage . '" alt="profile" />';
?>
          </div>
          <p>Wellcome back</p>
            <h3><?php echo $username . " " . $lastname; ?></h3>
        </div>
          <div class="dashboard__menu">
           <ul>
            <li class="active">
              <a href="./dashboard.php" >
                <img src="../image/dashboard-icon.svg" alt="dashboard" /> dashboard</a
              >
            </li>
            <li>
              <a href="./users.php">
                <img src="../image/myticket.svg" alt="myticket" /> Users</a
              >
            </li>
            <li>
              <a href="./drivers.php">
                <img src="../image/account.svg" alt="accountbank" />
                Drivers</a
              >
            </li>
            <li>
              <a href="./buses.php">
                <img src="../image/account.svg" alt="accountbank" />
                Bus</a
              >
            </li>
            <li>
              <a href="./booking.php">
                <img src="../image/account.svg" alt="accountbank" />
                Booking</a
              >
            </li>
          </ul>
        </div>
        </div>
      </div>
        </div>