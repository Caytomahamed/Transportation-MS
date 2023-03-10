<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My ticket</title>
    <link rel="stylesheet" href="./css/header.css" />
    <link rel="stylesheet" href="./css/card.css" />
    <link rel="stylesheet" href="./css/button.css" />
    <link rel="stylesheet" href="./css/ticket.css" />
    <link rel="stylesheet" href="./css/cleintdashboard.css?v=<?php echo time(); ?>" />
</head>
 <?php require "./getJson.php";
  require "./authentication/user.php";
  $mytickets = json_decode($ticketJson);
  $userData = json_decode($userJson);
 ?>
<body>
      <section class="dashboard">
      <div class="dashboard__sidebar">
        <div class="dashboard__profile" style="padding-top:;">
          <div class="dashboard__profile__image">
             <?php foreach($userData as $user){ 
            $data = get_object_vars($user);
             if($data["imageUrl"]){ ?> 
             <img src="./uploads/IMG-user<?=$data["imageUrl"]?>" alt="profile">
            <?php } else { ?>
              <img src="./uploads/IMG-user.svg" alt="profile" />
            <?php } ?>  
          </div>
          <p>Wellcome back</p>
          <p><?php echo $data["email"];?></p>
            <h3><?php echo $data["firstname"] . " " . $data["lastname"];?></h3>
          <?php } ?>
        </div>
        <div class="dashboard__menu">
          <ul>
            <li>
              <a href="./clientdashboard.php" >
                <img src="./image/dashboard-icon.svg" alt="dashboard" /> dashboard</a
              >
            </li>
            <li  class="active">
              <a href="#" >
                <img src="./image/myticket.svg" alt="myticket" /> myticket</a
              >
            </li>
          </ul>
        </div>
         <a href="./home.php" class="exit"> Exist<img src="./image/exit.svg" alt="exit"></a>
      </div>
      <div class="dashboard__content" style="height:auto;">
       <section class="profile" style="padding-bottom:5rem;">
       <h1 style="font-size: 30px; text-align: center; padding-top:3rem; color:black;">My tickets</h1>
        <?php 
        foreach($mytickets as $data) {
          $myticket = get_object_vars($data);
          $bookId = $myticket["id"];
          $start = $myticket["start"];
          $price = $myticket["price"];
          $finish = $myticket["finish"];
          $duration =  $myticket["duration"];
          $bookedSeat =  $myticket["bookedSeat"];
          $departureTime =  $myticket["departureTime"];
          $departureDate =  $myticket["departureDate"];
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
                    <li>Duration: <?php echo $duration?> hours</li>
                  </ul>
                </div>
              </div>
              <div class="card__side card__side--back card__side--back-1">
                <div class="card__cta">
                  <div class="card__price-box">
                    <p class="card__price-only">Only</p>
                    <p class="card__price-value">$<?php echo $price?></p>
                  </div>
                  <a href="#popup" class="btn btn--white cancleBtn">Cancle!</a>
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
                  <td><?php echo $start." to ". $finish;?></td>
                </tr>
                <tr>
                  <th>When</th>
                  <td><?php echo $departureDate."at". $departureTime;?></td>
                </tr>
                <tr>
                  <th>Price</th>
                  <td>$<?php echo $price;?></td>
                </tr>
                <tr>
                  <th>Booked by</th>
                  <td>Cayto</td>
                </tr>
                <tr>
                  <th>Seat</th>
                  <td><?php echo $bookedSeat;?></td>
                </tr>
              </table>
              <div class="ticket_frame ticket_frame--2"></div>
            </div>
          </div>
        </div>
        </div>
  
        <?php }
       ?> 
       </section>
     </div>
    </section>

    
    <script src="./js/home.js"></script>
</body>
</html>