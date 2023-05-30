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
    <link rel="stylesheet" href="../css/table.css?v=<?php echo time(); ?>" />

  </head>

  <?php
include "../../include/autoloader.inc.php";
include "../../include/booking.inc.php";

$user = UserController::getUserById($_SESSION['MEMBER_ID']);
$userId = $user[0]["id"];
$username = $user[0]["firstname"];
$lastname = $user[0]["lastname"];

$usercount = 1;
$buscount = 100;
$buscount = 100;
$bookcount = 100;
$schedulecount = 100;

?>
  <body>

    <div class="addNew edite">
      <div class="popup-form">
        <span class="addNew__close edite__close">&times;</span>
        <div class="form__New_transport">
          <form method="POST" >
        <fieldset>
            <legend> Update Booking </legend>
             <input type="hidden" name="id" class="updateId"/>
             <label for="userId">Select User</label>
            <select id="userId" name="userId">
<?php
$users = UserController::getAllUsers();
foreach ($users as $data) {
    $id = $data["id"];
    $firstname = $data["firstname"];
    $lastname = $data['lastname'];?>
                <option value="<?php echo $id ?>">
                  <?php echo $id . ". " . $firstname . "  " . $lastname; ?>
                </option>
              <?php }?>
             </select>

             <label for="scheduleId">Select Schedule</label>
             <select id="scheduleId" name="scheduleId">
<?php
$schedules = json_decode(ScheduleController::getAllschedule());
foreach ($schedules as $data) {
    $schedule = get_object_vars($data);
    $id = $schedule["id"];
    $start = $schedule["start"];
    $finished = $schedule['finish'];?>
                <option value="<?php echo $id ?>">
                <?php echo $id . ". " . $start . " to " . $finished; ?>
              </option>
              <?php }?>
             </fieldset>
               <input type="submit" value="Update" name="update" class="updateSchedule"/>
             </select>
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
              <h3>Are you sure you want to delete this User?</h3>
              <input type="submit" value="Delete" name="delete" class="deleteSchedule"/>
            </fieldset>
          </form>
        </div>
      </div>
      </div>
    </div>

    <section class="dashboard">
      <div class="dashboard__sidebar">
        <div class="dashboard__profile">
          <div class="dashboard__profile__image">
              <img src="../uploads/IMG-user.svg" alt="profile" />
          </div>
          <p>Wellcome back</p>
            <h3><?php echo $username . " " . $lastname; ?></h3>
        </div>
            <div class="dashboard__menu">
          <ul>
            <li class="active">
              <a href="./index.php" >
                <img src="../image/dashboard-icon.svg" alt="dashboard" /> dashboard</a
              >
            </li>
            <li>
              <a href="./usersPage.php">
                <img src="../image/myticket.svg" alt="myticket" /> Users</a
              >
            </li>
            <li>
              <a href="./driverPage.php">
                <img src="../image/account.svg" alt="accountbank" />
                Drivers</a
              >
            </li>
            <li>
              <a href="./busPage.php">
                <img src="../image/account.svg" alt="accountbank" />
                Bus</a
              >
            </li>
            <li>
              <a href="./bookingPage.php">
                <img src="../image/account.svg" alt="accountbank" />
                Booking</a
              >
            </li>
            <!-- <li>
              <a href="./myaccount.php">
                <img src="../image/account.svg" alt="accountbank" />
                Booking</a
              >
            </li> -->
          </ul>
        </div>

        <a href="./authentication/logout.php" class="exit"> Logout<img src="../image/exit.svg" alt="exit"></a>
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
      <div class="information">
        <table id="users">
         <tr>
           <th>#id</th>
           <th>#userId</th>
           <th>#scheduleId</th>
           <th>bookedSeat</th>
           <th>booked</th>
           <th>bookingCreated</th>
           <th>actions</th>
        </tr>
<?php
$booking = BookController::getAllBooking();
foreach ($booking as $data) {
    $id = $data["id"];
    $userId = $data["userId"];
    $scheduleId = $data["scheduleId"];
    $bookedSeat = $data["bookedSeat"];
    $booked = $data["booked"];
    $bookingCreated = $data["bookingCreated"];

    ?>
            <tr data-id="<?php echo $id ?>">
            <td><?php echo $id; ?></td>
            <td><?php echo $userId; ?></td>
            <td><?php echo $scheduleId; ?></td>
            <td><?php echo $bookedSeat; ?></td>
            <td><?php echo $booked; ?></td>
            <td><?php echo $bookingCreated; ?></td>
            <td>
                <button type="submit" class="editeBtn" name="update">Update</button>
                <button type="submit" name="deleteBtn" class="deleteBtn">Delete</button>
            </td>
            </tr>
            <?php
}
?>

      </table>

      </div>
    </section>
    <script src="../js/home.js?v=<?php echo time(); ?>" ></script>
  </body>
</html>
