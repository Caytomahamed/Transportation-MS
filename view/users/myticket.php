<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My ticket</title>
    <link rel="stylesheet" href="../css/header.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../css/footer.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../css/card.css" />
    <link rel="stylesheet" href="../css/button.css" />
    <link rel="stylesheet" href="../css/ticket.css" />
    <link rel="stylesheet" href="../css/cleintdashboard.css?v=<?php echo time(); ?>" />
      <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
</head>
 <?php
require "../../include/session.inc.php";

confirm_logged_in();

include "../../include/autoloader.inc.php";

$user = UserController::getUserById($_SESSION['MEMBER_ID']);
$userId = $user[0]["id"];
$username = $user[0]["firstname"];
$lastname = $user[0]["lastname"];
$userPhone = $user[0]["phone"];
$userImage = $user[0]["imageUrl"];

?>
<body>
  <?php include "../include/header.php"?>

    <!-- <div class="addNew delete">
      <div class="popup-form">
        <span class="addNew__close delete__Ticket">&times;</span>
        <div class="form__New_transport">
          <form method="POST" >
            <fieldset>
             <input type="hidden" name="id" class="deleteId"/>
             </fieldset>
              <h3>Are you sure you want to delete this User?</h3>
              <input type="submit" value="Delete" name="delete" class="deleteTicket"/>
            </fieldset>
          </form>
        </div>
      </div>
      </div>
    </div> -->

      <section class="dashboard">
      <div class="dashboard__sidebar">
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
          <h3><?php echo $username . " " . $lastname; ?> </h3>
        </div>
        <div class="dashboard__menu">
          <ul>
            <li>
              <a href="./clientdashboard.php" >
                <img src="../image/dashboard-icon.svg" alt="dashboard" /> dashboard</a
              >
            </li>
            <li  class="active">
              <a href="#" >
                <img src="../image/myticket.svg" alt="myticket" />myticket</a
              >
            </li>
          </ul>
        </div>
        </div>
         <a href="./index.php" class="exit"></a>
      </div>

      <div class="dashboard__content" style="height:auto;">
       <section class="profile" style="padding-bottom:5rem;">
       <h1 style="font-size: 30px; padding-top:3rem; color:black;">My tickets</h1>
<?php
$mytickets = ScheduleController::getYourTicket($userId);

if (!$mytickets) {
    ?>
  <div class="mytickets" style="height: 100px;">
  <h1>Your not have Ticket Yet!</h1>
  <a href="./index.php"> <h3>Get One</h3></a>
</div>
<?php
} else {
    foreach ($mytickets as $data) {
        $bookId = $data["id"];
        $start = $data["start"];
        $price = $data["price"];
        $finish = $data["finish"];
        $duration = $data["duration"];
        $bookedSeat = $data["bookedSeat"];
        $departureTime = $data["departureTime"];
        $departureDate = $data["departureDate"];
        ?>
      <div class="mytickets" data-id="1">
        <div class="myticket">
          <div class="col-1-of-3">
            <div class="card">
              <div class="card__side card__side--front">
                <div class="card__picture card__picture--1">&nbsp;</div>
                <h4 class="card__heading">
                  <span class="card__heading-span card__heading-span--1"
                    ><?php echo $start . " TO " . $finish; ?></span
                  >
                </h4>
                <div class="card__details">
                  <ul>
                    <li>3 seat avaiable</li>
                    <li>Up to 30 people</li>
                    <li>Free wifi</li>
                    <li>Free water</li>
                    <li>Duration: <?php echo $duration ?> hours</li>
                  </ul>
                </div>
              </div>
              <div class="card__side card__side--back card__side--back-1">
                <div class="card__cta">
                  <div class="card__price-box">
                    <p class="card__price-only">Only</p>
                    <p class="card__price-value">$<?php echo $price ?></p>
                  </div>
                  <!-- <a href="#popup" class="btn btn--white btnCancle">Cancle!</a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mybus">
          <div class="ticket ticket--1">
            <h1 class="ticket__title">Your Ticket(Hargeisa To Burco)</h1>
            <div class="booking-info">
              <div class="ticket_frame ticket_frame--2"></div>
              <table class="booking-table">
                <tr>
                  <th>Venue</th>
                  <td>Hargeisa,suuqa</td>
                </tr>
                <tr>
                  <th>When</th>
                  <td>02/2/2022 at 02:00pm</td>
                </tr>
                <tr>
                  <th>Price</th>
                  <td>$3.09</td>
                </tr>
                <tr>
                  <th>Booked by</th>
                  <td>Cayto</td>
                </tr>
                <tr>
                  <th>Seat</th>
                  <td>SE31</td>
                </tr>
              </table>
              <div class="ticket_frame ticket_frame--2"></div>
            </div>
          </div>
          <div class="ticket ticket--2">
            <h1 class="ticket__title">Your Ticket(Hargeisa To Burco)</h1>
            <div class="booking-info">
              <div class="ticket_frame ticket_frame--2"></div>
              <table class="booking-table">
                <tr>
                  <th>Venue</th>
                  <td>Hargeisa,suuqa</td>
                </tr>
                <tr>
                  <th>When</th>
                  <td>02/2/2022 at 02:00pm</td>
                </tr>
                <tr>
                  <th>Price</th>
                  <td>$3.09</td>
                </tr>
                <tr>
                  <th>Booked by</th>
                  <td>Cayto</td>
                </tr>
                <tr>
                  <th>Seat</th>
                  <td>SE31</td>
                </tr>
              </table>
              <div class="ticket_frame ticket_frame--2"></div>
            </div>
          </div>
          <div class="ticket ticket--3">
            <h1 class="ticket__title">Your Ticket(Hargeisa To Burco)</h1>
            <div class="booking-info">
              <div class="ticket_frame ticket_frame--2"></div>
              <table class="booking-table">
                <tr>
                  <th>From TO </th>
                  <td><?php echo $start . " to " . $finish; ?></td>
                </tr>
                <tr>
                  <th>When</th>
                  <td><?php echo $departureDate . "at" . $departureTime; ?></td>
                </tr>
                <tr>
                  <th>Price</th>
                  <td>$<?php echo $price; ?></td>
                </tr>
                <tr>
                  <th>Booked by</th>
                  <td>Cayto</td>
                </tr>
                <tr>
                  <th>Seat</th>
                  <td><?php echo $bookedSeat; ?></td>
                </tr>
              </table>
              <div class="ticket_frame ticket_frame--2"></div>
            </div>
          </div>
        </div>
        </div>

        <?php }
}
?>
       </section>
     </div>
    </section>

     <?php include "../include/footer.php"?>
    <script src="../js/home.js"></script>
</body>
</html>