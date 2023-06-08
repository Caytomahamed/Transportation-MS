<?php
require "../../include/session.inc.php";

confirm_logged_in();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
     <link rel="stylesheet" href="../css/home.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../css/header.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../css/card.css" />
    <link rel="stylesheet" href="../css/button.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <link rel="stylesheet" href="../css/ticket.css" />
    <link rel="stylesheet" href="../css/cleintdashboard.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../css/index.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../css/alertmsg.css?v=<?php echo time(); ?>" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>

  <?php
include "../../include/autoloader.inc.php";

include "../../include/schedule.inc.php";

$user = UserController::getUserById($_SESSION['MEMBER_ID']);
$userId = $user[0]["id"];
$username = $user[0]["firstname"];
$lastname = $user[0]["lastname"];
$userImage = $user[0]["imageUrl"];

$usercount = UserController::getToCountUser();
$buscount = BusController::getToCountBus();
$bookcount = BookController::getToCountBooking();
$schedulecount = ScheduleController::getToCountSchedule();

?>
<body>
    <?php include "../include/adminHeader.php"?>
    <div class="addNew">
      <div class="popup-form">
        <span class="addNew__close">&times;</span>
        <div class="form__New_transport">
          <form method="POST" >
           <fieldset>
             <legend> Add New Schedule</legend>
             <input type="date" placeholder=" Pick Date *"  name="departureDate"/>
             <input type="time"  name="departureTime" placeholder=" Pick time *" />
             <label for="route">Select Route</label>
             <select id="route" name="routeId">
<?php
$routeData = json_decode(RouteController::getAllRoute());
foreach ($routeData as $data) {
    $id = $data->id;
    $start = $data->start;
    $finished = $data->finish;?>
                <option value="<?php echo $id ?>">
                <?php echo $start . " to " . $finished; ?></option>
              <?php }?>
          </select>
        </fieldset>
        <input type="submit" value="Publish" name="add"/>
      </form>
    </div>
      </div>
      </div>
    </div>

    <div class="addNew edite">
      <div class="popup-form">
        <span class="addNew__close edite__close">&times;</span>
        <div class="form__New_transport">
          <form method="POST" >
        <fieldset>
            <legend> Update Schedule</legend>
             <input type="hidden" name="id" class="updateId"/>
             <input type="date" placeholder=" Pick Date *"  name="departureDate"/>
             <input type="time"  name="departureTime" placeholder=" Pick time *" />
            <label for="route">Select Route</label>
            <select id="route" name="routeId">
<?php
$routeData = json_decode(RouteController::getAllRoute());
foreach ($routeData as $data) {
    $id = $data->id;
    $start = $data->start;
    $finished = $data->finish;?>
                <option value="<?php echo $id ?>">
                <?php echo $start . " to " . $finished; ?></option>
              <?php }?>
          </select>
        </fieldset>
        <input type="submit" value="Update" name="update" class="updateSchedule"/>
      </form>
        </div>
      </div>
      </div>
    </div>

    <div class="addNew delete">
      <div class="popup-form">
        <span class="addNew__close delete__close">&times;</span>
        <div class="form__New_transport">
          <form method="POST" >
            <fieldset>
             <input type="hidden" name="id" class="deleteId"/>
             </fieldset>
              <h3>Are you sure you want to delete this schedule?</h3>
              <input type="submit" value="Delete" name="delete" class="deleteSchedule"/>
            </fieldset>
          </form>
        </div>
      </div>
      </div>
    </div>

    <section class="dashboard">
      <div class="dashboard__sidebar " >
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
            <h3><?php echo $username; ?></h3>
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
      <div class="dashboard__content" >
        <div class="dashboard__summary">
            <div class="dashboard__summary__box">
                <h1>total users</h1>
                <h1><?php echo $usercount ?></h1>
            </div>
            <div class="dashboard__summary__box">
                <h1>total buses</h1>
                <h1><?php echo $buscount; ?></h1>
            </div>
            <div class="dashboard__summary__box">
                <h1>total schedule</h1>
                 <h1><?php echo $schedulecount ?></h1>
            </div>
            <div class="dashboard__summary__box">
                <h1>total Booking</h1>
                <h1><?php echo $bookcount ?></h1>
            </div>
        </div>

      <div class="addNewsBox">
        <button class="addNewBtn"> + NEW schedule</button>
      </div>

      <div class="row--1">
<?php
$scheduleData = json_decode(ScheduleController::getAllschedule());
foreach ($scheduleData as $schedule) {
    $card = get_object_vars($schedule);
    $id = $card["id"];
    $departureDate = $card['departureDate'];
    $departureTime = $card["departureTime"];
    $price = $card["price"];
    $start = $card["start"];
    $finish = $card["finish"];
    $duration = $card["duration"];
    ?>

          <div class="col-1-of-3" data-id="<?php echo $id; ?>">
          <div class="card" data-id="<?php echo $id; ?>">
            <div class="card__side card__side--front">
              <div class="card__picture card__picture--1">&nbsp;</div>
              <h4 class="card__heading">
                <span class="card__heading-span card__heading-span--1"
                  ><?php echo $start . " TO " . $finish ?></span
                >
              </h4>
              <div class="card__details">
                <ul>
                  <li><?php echo $id; ?> scheduleId </li>
                  <li>Up to 30 people</li>
                  <li>Free wifi</li>
                  <li>
                    <?php echo date("Y-m-d", strtotime($departureDate)) . " at " . $departureTime; ?></li>
                  <li>Duration : <?php echo $duration; ?> hours</li>
                </ul>
              </div>
            </div>
            <div class="card__side card__side--back card__side--back-1">
              <div class="card__cta">
                <div class="card__price-box">
                  <p class="card__price-only">Only</p>
                  <p class="card__price-value">$<?php echo $price ?></p>
                </div>
                <div style="display:flex; flex-direction:column; align-items:center;">
                  <a href="#" class="btn btn--white editeBtn">Edite!</a>
                  <a href="#" class="btn btn--white deleteBtn" style="margin-top:1.5rem;">Delete</a>
                </div>
              </div>
            </div>
          </div>
        </div>
       <?php }
?>
      </div>
      </div>
    </section>
<?php include "../include/footer.php"?>
    <script src="../js/home.js?v=<?php echo time(); ?>" ></script>
  </body>
</html>
