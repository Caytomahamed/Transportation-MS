<?php
 require "./includes/connection.php";
 require "./authentication/session.php";
 
 confirm_logged_in();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/home.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="./css/header.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="./css/card.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="./css/button.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="./css/footer.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="./css/ticket.css?v=<?php echo time(); ?>" />
      <link rel="stylesheet" href="./css/alertmsg.css?v=<?php echo time(); ?>" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <!-- <div class="model">
      <div class="popup">
        <span class="close">&times;</span>
        <p>Some text in the Modal..</p>
      </div>
    </div> -->

    <?php 
     include("./includes/header.php");
     include "./authentication/user.php";
     require "./getJson.php";
     require "./booknow.php";
     $scheduleData = json_decode($scheduleJson);
     $userData = json_decode($userJson);

    ?>
    <div class="model">
      <div class="ticket">
        <h1 class="ticket__title">Your Ticket(Hargeisa To Burco)</h1>
        <div class="booking-info">
          <div class="ticket_frame ticket_frame--1"></div>
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
          <div class="ticket_frame ticket_frame--1"></div>
        </div>
      </div>
    </div>
    
    <div class="checkout__modal">
      <div class="checkout">
        <span class="checkout__close">&times;</span>
        <div class="checkout__icon">&nbsp;</div>
        <div class="checkout__form">
          <h1 class="checkout__title">Enter your payment detail</h1>
          <p>
             Please enter your account ID and the price of your travelling
            amout 
          </p>
          <form method="POST">
            <input type="hidden" class="scheduleId" name="scheduleId" name="id">
            <input type="hidden" class="userId" name="userId" name="id"  
            value="<?php 
              foreach($userData as $data){
              $user = get_object_vars($data);
              echo $user['id'];                }
            ?>">
            <label for="number">
              <input
                type="number"
                name="phone"
                id="number"
                value="<?php 
                foreach($userData as $data){
                  $user = get_object_vars($data);
                  echo $user['phone'];                }
                ?>"
                placeholder="Enter acount ID number "
              />
            </label>
            <label for="number">
              <input
                type="number"
                name="price"
                class="price__card"
                placeholder="Enter the amout"
                readonly
              />
            </label>
            <button type="submit" class="btn btn--green buy__now" name="buynow">BOOK NOW!</button>
          </form>
        </div>
      </div>
    </div>

    <section class="home">
      <div class="row">
        <?php 
         foreach($scheduleData as $schedule) {
          $card = get_object_vars($schedule); 
            $id = $card["id"];
            $departureDate=$card['departureDate'];
            $departureTime = $card["departureTime"];
            $price = $card["price"];
            $start = $card["start"];
            $finish = $card["finish"];
            $duration = $card["duration"];

          ?> 
       
          <div class="col-1-of-3" data-id="<?php echo $id;?>" ">
          <div class="card">
            <div class="card__side card__side--front">
              <div class="card__picture card__picture--1">&nbsp;</div>
              <h4 class="card__heading">
                <span class="card__heading-span card__heading-span--1"
                  ><?php echo $start. " TO " . $finish?></span
                >
              </h4>
              <div class="card__details">
                <ul>
                  <li><?php echo $id;?> seat avaiable</li>
                  <li>Up to 30 people</li>
                  <li>Free wifi</li>
                  <li> <?php echo date("Y-m-d", strtotime($departureDate)) ." at " . $departureTime;?></li>
                  <li>Duration : <?php echo $duration;?> hours</li>
                </ul>
              </div>
            </div>
            <div class="card__side card__side--back card__side--back-1">
              <div class="card__cta">
                <div class="card__price-box">
                  <p class="card__price-only">Only</p>
                  <p class="card__price-value">$<?php echo $price;?></p>
                </div>
                <a href="#popup" class="btn btn--white bookingBtn">Book now!</a>
              </div>
            </div>
          </div>
        </div>
       <?php  }
        ?>
      </div>
    </section>
    <?php include("./includes/footer.php");?>
    
    <script src="./js/home.js"></script>
  </body>
</html>
