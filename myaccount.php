<?php 
include "./includes/connection.php";
require "./authentication/session.php";
confirm_logged_in();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" type="image/png" href="/icon.png" />

    <link
      href="https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="./css/cleintdashboard.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="./css/myaccount.css" />
    <title>Bank</title>
  </head>
  <body>
        <section class="dashboard">
      <div class="dashboard__sidebar">
        <div class="dashboard__profile">
          <div class="dashboard__profile__image">
            <img src="./image/bill.png" alt="profile" />
          </div>
          <p>Wellcome back</p>
          <h3>User Name</h3>
        </div>
        <div class="dashboard__menu">
          <ul>
            <li >
              <a href="./clientdashboard.php" >
                <img src="./image/dashboard-icon.svg" alt="dashboard" /> dashboard</a
              >
            </li>
            <li>
              <a href="./myticket.php">
                <img src="./image/myticket.svg" alt="myticket" /> myticket</a
              >
            </li>
            <li class="active">
              <a href="#" >
                <img src="./image/account.svg" alt="accountbank" />
                accountbank</a
              >
            </li>
          </ul>
        </div>
        
        <a href="./home.php" class="exit"> Exist<img src="./image/exit.svg" alt="exit"></a>
      </div>
      <div class="dashboard__content">
           <main class="app">
      <div class="balances">
        <div class="balance">
          <div>
            <p class="balance__label">Current balance</p>
            <p class="balance__date">
              As of <span class="date">05/03/2037</span>
            </p>
          </div>
          <p class="balance__value">0000€</p>
        </div>
        <!-- OPERATION: TRANSFERS -->
        <div class="operation operation--transfer">
          <h2>Transfer money</h2>
          <form class="form form--transfer">
            <input type="text" class="form__input form__input--to" />
            <input type="number" class="form__input form__input--amount" />
            <button class="form__btn form__btn--transfer">&rarr;</button>
            <label class="form__label">Transfer to</label>
            <label class="form__label">Amount</label>
          </form>
        </div>
        <!-- SUMMARY -->
        <div class="summary">
          <p class="summary__label">In</p>
          <p class="summary__value summary__value--in">0000€</p>
          <p class="summary__label">Out</p>
          <p class="summary__value summary__value--out">0000€</p>
          <button class="btn--sort">&downarrow; SORT</button>
        </div>
      </div>
      <div class="movements">
        <!-- MOVEMENTS -->
      <div class="movement">
        <div class="movement__row">
          <div class="movement__type movement__type--deposit">2 deposit</div>
          <div class="movements__date">3 days ago</div>
          <div class="movement__value">4 000€</div>
        </div>
        <div class="movement__row">
          <div class="movement__type movement__type--withdrawal">
            1 withdrawal
          </div>
          <div class="movement__date">24/01/2037</div>
          <div class="movement__value">-378€</div>
        </div>
      </div>
      </div>
      
    </main>
      </div>
    </section>
 
    <script src="./js/account.js"></script>
  </body>
</html>
