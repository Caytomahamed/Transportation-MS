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
            <li>
              <a href="./myaccount.php">
                <img src="./image/account.svg" alt="accountbank" />
                accountbank</a
              >
            </li>
          </ul>
        </div>
         <a href="./home.php" class="exit"> Exist<img src="./image/exit.svg" alt="exit"></a>
      </div>
      <div class="dashboard__content" style="height:auto;">
      <section class="profile" style="padding-bottom:5rem;">
      <h1 style="font-size: 30px; text-align: center; padding-top:3rem; color:black;">My tickets</h1>
      <div class="mytickets" data-id="1">
        <div class="myticket">
          <div class="col-1-of-3">
            <div class="card">
              <div class="card__side card__side--front">
                <div class="card__picture card__picture--1">&nbsp;</div>
                <h4 class="card__heading">
                  <span class="card__heading-span card__heading-span--1"
                    >Hargeisa To Borama</span
                  >
                </h4>
                <div class="card__details">
                  <ul>
                    <li>3 seat avaiable</li>
                    <li>Up to 30 people</li>
                    <li>Free wifi</li>
                    <li>Free water</li>
                    <li>Duration: 2 hours</li>
                  </ul>
                </div>
              </div>
              <div class="card__side card__side--back card__side--back-1">
                <div class="card__cta">
                  <div class="card__price-box">
                    <p class="card__price-only">Only</p>
                    <p class="card__price-value">$297</p>
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
        </div>
      </div>
      <div class="mytickets" data-id="1">
        <div class="myticket">
          <div class="col-1-of-3">
            <div class="card">
              <div class="card__side card__side--front">
                <div class="card__picture card__picture--1">&nbsp;</div>
                <h4 class="card__heading">
                  <span class="card__heading-span card__heading-span--1"
                    >Hargeisa To Borama</span
                  >
                </h4>
                <div class="card__details">
                  <ul>
                    <li>3 seat avaiable</li>
                    <li>Up to 30 people</li>
                    <li>Free wifi</li>
                    <li>Free water</li>
                    <li>Duration: 2 hours</li>
                  </ul>
                </div>
              </div>
              <div class="card__side card__side--back card__side--back-1">
                <div class="card__cta">
                  <div class="card__price-box">
                    <p class="card__price-only">Only</p>
                    <p class="card__price-value">$297</p>
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
        </div>
      </div>
      <div class="mytickets" data-id="1">
        <div class="myticket">
          <div class="col-1-of-3">
            <div class="card">
              <div class="card__side card__side--front">
                <div class="card__picture card__picture--1">&nbsp;</div>
                <h4 class="card__heading">
                  <span class="card__heading-span card__heading-span--1"
                    >Hargeisa To Borama</span
                  >
                </h4>
                <div class="card__details">
                  <ul>
                    <li>3 seat avaiable</li>
                    <li>Up to 30 people</li>
                    <li>Free wifi</li>
                    <li>Free water</li>
                    <li>Duration: 2 hours</li>
                  </ul>
                </div>
              </div>
              <div class="card__side card__side--back card__side--back-1">
                <div class="card__cta">
                  <div class="card__price-box">
                    <p class="card__price-only">Only</p>
                    <p class="card__price-value">$297</p>
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
        </div>
      </div>
      <div class="mytickets" data-id="1">
        <div class="myticket">
          <div class="col-1-of-3">
            <div class="card">
              <div class="card__side card__side--front">
                <div class="card__picture card__picture--1">&nbsp;</div>
                <h4 class="card__heading">
                  <span class="card__heading-span card__heading-span--1"
                    >Hargeisa To Borama</span
                  >
                </h4>
                <div class="card__details">
                  <ul>
                    <li>3 seat avaiable</li>
                    <li>Up to 30 people</li>
                    <li>Free wifi</li>
                    <li>Free water</li>
                    <li>Duration: 2 hours</li>
                  </ul>
                </div>
              </div>
              <div class="card__side card__side--back card__side--back-1">
                <div class="card__cta">
                  <div class="card__price-box">
                    <p class="card__price-only">Only</p>
                    <p class="card__price-value">$297</p>
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
        </div>
      </div>
      <div class="mytickets" data-id="1">
        <div class="myticket">
          <div class="col-1-of-3">
            <div class="card">
              <div class="card__side card__side--front">
                <div class="card__picture card__picture--1">&nbsp;</div>
                <h4 class="card__heading">
                  <span class="card__heading-span card__heading-span--1"
                    >Hargeisa To Borama</span
                  >
                </h4>
                <div class="card__details">
                  <ul>
                    <li>3 seat avaiable</li>
                    <li>Up to 30 people</li>
                    <li>Free wifi</li>
                    <li>Free water</li>
                    <li>Duration: 2 hours</li>
                  </ul>
                </div>
              </div>
              <div class="card__side card__side--back card__side--back-1">
                <div class="card__cta">
                  <div class="card__price-box">
                    <p class="card__price-only">Only</p>
                    <p class="card__price-value">$297</p>
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
        </div>
      </div>
      <div class="mytickets" data-id="1">
        <div class="myticket">
          <div class="col-1-of-3">
            <div class="card">
              <div class="card__side card__side--front">
                <div class="card__picture card__picture--1">&nbsp;</div>
                <h4 class="card__heading">
                  <span class="card__heading-span card__heading-span--1"
                    >Hargeisa To Borama</span
                  >
                </h4>
                <div class="card__details">
                  <ul>
                    <li>3 seat avaiable</li>
                    <li>Up to 30 people</li>
                    <li>Free wifi</li>
                    <li>Free water</li>
                    <li>Duration: 2 hours</li>
                  </ul>
                </div>
              </div>
              <div class="card__side card__side--back card__side--back-1">
                <div class="card__cta">
                  <div class="card__price-box">
                    <p class="card__price-only">Only</p>
                    <p class="card__price-value">$297</p>
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
        </div>
      </div>
      <div class="mytickets" data-id="1">
        <div class="myticket">
          <div class="col-1-of-3">
            <div class="card">
              <div class="card__side card__side--front">
                <div class="card__picture card__picture--1">&nbsp;</div>
                <h4 class="card__heading">
                  <span class="card__heading-span card__heading-span--1"
                    >Hargeisa To Borama</span
                  >
                </h4>
                <div class="card__details">
                  <ul>
                    <li>3 seat avaiable</li>
                    <li>Up to 30 people</li>
                    <li>Free wifi</li>
                    <li>Free water</li>
                    <li>Duration: 2 hours</li>
                  </ul>
                </div>
              </div>
              <div class="card__side card__side--back card__side--back-1">
                <div class="card__cta">
                  <div class="card__price-box">
                    <p class="card__price-only">Only</p>
                    <p class="card__price-value">$297</p>
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
        </div>
      </div>
      <div class="mytickets" data-id="1">
        <div class="myticket">
          <div class="col-1-of-3">
            <div class="card">
              <div class="card__side card__side--front">
                <div class="card__picture card__picture--1">&nbsp;</div>
                <h4 class="card__heading">
                  <span class="card__heading-span card__heading-span--1"
                    >Hargeisa To Borama</span
                  >
                </h4>
                <div class="card__details">
                  <ul>
                    <li>3 seat avaiable</li>
                    <li>Up to 30 people</li>
                    <li>Free wifi</li>
                    <li>Free water</li>
                    <li>Duration: 2 hours</li>
                  </ul>
                </div>
              </div>
              <div class="card__side card__side--back card__side--back-1">
                <div class="card__cta">
                  <div class="card__price-box">
                    <p class="card__price-only">Only</p>
                    <p class="card__price-value">$297</p>
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
        </div>
      </div>
    </section>
      </div>
    </section>

    
    <script src="./js/home.js"></script>
</body>
</html>