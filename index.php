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
    <link rel="stylesheet" href="./css/card.css" />
    <link rel="stylesheet" href="./css/button.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/ticket.css" />
    <link rel="stylesheet" href="./css/cleintdashboard.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="./css/index.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="./css/alertmsg.css?v=<?php echo time(); ?>" />
    
  </head>
  
  <?php  
  require "./authentication/user.php";
  require './schedule.php';
  require './getJson.php';
  
  $routeDate = json_decode($routeJson);
  $userData = json_decode($userJson);
  $scheduleData = json_decode($scheduleJson);
  ?>
  <body>
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
             foreach($routeDate as $data){
              $route = get_object_vars($data);
              
              $id = $route["id"];
              $start = $route["start"];
              $finished = $route['finish']; ?>
                <option value="<?php echo $id?>">
                <?php echo $start . " to ". $finished; ?></option>
              <?php } ?>
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
            <select id="route" name="routeId">
             <?php 
             foreach($routeDate as $data){
              $route = get_object_vars($data);
              
              $id = $route["id"];
              $start = $route["start"];
              $finished = $route['finish']; ?>
                <option value="<?php echo $id?>">
                <?php echo $start . " to ". $finished; ?></option>
              <?php } ?>
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
      <div class="dashboard__sidebar">
        <div class="dashboard__profile">
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
            <h3><?php echo $data["firstname"] . " " . $data["lastname"];?></h3>
          <?php } ?>
        </div>
      <div class="dashboard__menu">
          <ul>
            <li class="active">
              <a href="./index.php" >
                <img src="./image/dashboard-icon.svg" alt="dashboard" /> dashboard</a
              >
            </li>
            <li>
              <a href="./usersPage.php">
                <img src="./image/myticket.svg" alt="myticket" /> Users</a
              >
            </li>
            <li>
              <a href="./driverPage.php">
                <img src="./image/account.svg" alt="accountbank" />
                Drivers</a
              >
            </li>
            <li>
              <a href="./busPage.php">
                <img src="./image/account.svg" alt="accountbank" />
                Bus</a
              >
            </li>
            <li>
              <a href="./routePage.php">
                <img src="./image/account.svg" alt="accountbank" />
                Routes</a
              >
            </li>
            <!-- <li>
              <a href="./myaccount.php">
                <img src="./image/account.svg" alt="accountbank" />
                Booking</a
              >
            </li> -->
          </ul>
        </div>
        
        <a href="./login.php" class="exit"> Exist<img src="./image/exit.svg" alt="exit"></a>
      </div>
      <div class="dashboard__content" >
        <div class="dashboard__summary">
            <div class="dashboard__summary__box">
                <h1>total users</h1>
                <h1> 555 </h1>
            </div>
            <div class="dashboard__summary__box">
                <h1>total users</h1>
                <h1>55</h1>
            </div>
            <div class="dashboard__summary__box">
                <h1>total schedule</h1>
                 <h1>555</h1>
            </div>
            <div class="dashboard__summary__box">
                <h1>total Booking</h1>
                <h1>100</h1>
            </div>
        </div>
        
      <div class="addNewsBox">
        <button class="addNewBtn"> + NEW schedule</button>
      </div>
      
      <div class="row--1">
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
          
          <div class="col-1-of-3" data-id="<?php echo $id;?>">
          <div class="card" data-id="<?php echo $id;?>">
            <div class="card__side card__side--front">
              <div class="card__picture card__picture--1">&nbsp;</div>
              <h4 class="card__heading">
                <span class="card__heading-span card__heading-span--1"
                  ><?php echo $start ." TO ". $finish ?></span
                >
              </h4>
              <div class="card__details">
                <ul>
                  <li><?php echo $id;?> seat avaiable</li>
                  <li>Up to 30 people</li>
                  <li>Free wifi</li>
                  <li>
                    <?php echo date("Y-m-d", strtotime($departureDate)) ." at " . $departureTime;?></li>
                  <li>Duration : <?php echo $duration;?> hours</li>
                </ul>
              </div>
            </div>
            <div class="card__side card__side--back card__side--back-1">
              <div class="card__cta">
                <div class="card__price-box">
                  <p class="card__price-only">Only</p>
                  <p class="card__price-value">$<?php echo $price?></p>
                </div>
                <div style="display:flex; flex-direction:column; align-items:center;">
                  <a href="#" class="btn btn--white editeBtn">Edite!</a>
                  <a href="#" class="btn btn--white deleteBtn" style="margin-top:1.5rem;">Delete</a>
                </div>
              </div>
            </div>
          </div>
        </div>
       <?php  }
        ?>
      </div>
      </div>
    </section>
    
    <script src="./js/home.js?v=<?php echo time();?>" ></script>
  </body>
</html>
