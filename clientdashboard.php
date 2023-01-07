
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/cleintdashboard.css?v=<?php echo time(); ?>" />
  </head>
  <body>
    <?php require "./authentication/user.php";
     require './getJson.php';
     $userData = json_decode($userJson);
     $accountData = json_decode($accountJson);
     echo $accountJson;;
    ?> 

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
              <a href="#" >
                <img src="./image/dashboard-icon.svg" alt="dashboard" /> dashboard</a
              >
            </li>
            <li>
              <a href="./myticket.php">
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
      <div class="dashboard__content">
        <div class="balance__card">
          <div class="balance__header">
            <p>Availiable balance</p>
            <p>Credit</p>
          </div>
            
            <h1 class="amount">$12,000</h1>
           <div class="balance__bottom">
            <h3>**** 4444</h3>
            <div class="circle circle--1"></div>
            <div class="circle circle--2"></div>
          </div>

        </div>

        <div class="transaction">
          <h3>Transaction</h3>
          <div style="overflow-x: auto">
            <table>
              <tr>
                <th>id</th>
                <th>sentTo</th>
                <th>amount</th>
                <th>status</th>
              </tr>
              <tr>
                <td>1</td>
                <td>Smith</td>
                <td>50</td>
                <td>success</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jonas</td>
                <td>50</td>
                <td>fail</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Jonas</td>
                <td>50</td>
                <td>success</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Jonas</td>
                <td>50</td>
                <td>fail</td>
              </tr>
            </table>
          </div>
        </div>
        <div class="availiable__transport">
          <h3>Availiable Transport</h3>
          <div style="overflow-x: auto">
            <table>
              <tr>
                <th>id</th>
                <th>sentTo</th>
                <th>amount</th>
                <th>status</th>
              </tr>
              <tr>
                <td>1</td>
                <td>Smith</td>
                <td>50</td>
                <td>success</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jonas</td>
                <td>50</td>
                <td>fail</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Jonas</td>
                <td>50</td>
                <td>success</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Jonas</td>
                <td>50</td>
                <td>fail</td>
              </tr>
            </table>
          </div>
        </div>
        <div class="tickets">
          <h3>My Tickets</h3>
          <div style="overflow-x: auto">
            <table>
              <tr>
                <th>id</th>
                <th>sentTo</th>
                <th>amount</th>
                <th>status</th>
              </tr>
              <tr>
                <td>1</td>
                <td>Smith</td>
                <td>50</td>
                <td>success</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jonas</td>
                <td>50</td>
                <td>fail</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Jonas</td>
                <td>50</td>
                <td>success</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
