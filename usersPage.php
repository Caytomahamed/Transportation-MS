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
    <link rel="stylesheet" href="./css/table.css?v=<?php echo time(); ?>" />
    
  </head>
  
  <?php  
  require "./authentication/user.php";
  require './getJson.php';
  require './users.php';
  
  $routeDate = json_decode($routeJson);
  $userData = json_decode($userJson);
  $users = json_decode($usersJson);
  $scheduleData = json_decode($scheduleJson);
  ?>
  <body>
    <div class="addNew">
      <div class="popup-form">
        <span class="addNew__close">&times;</span>
        <div class="form__New_transport">
          <form method="POST" >
           <fieldset>
             <legend> Add New User</legend>
             <input type="text" placeholder="Enter firstname*"  name="firstname"/>
             <input type="text" placeholder=" Enter lastname *"  name="lastname"/>
             <input type="email" placeholder="Enter your email*"  name="email"/>
             <input type="number" placeholder=" Enter your phone *"  name="phone"/>
             <input type="password"  name="password" placeholder="Ebter your password*" />
        </fieldset>
        <input type="submit" value="Register" name="add"/>
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
            <legend> Update User</legend>
             <input type="hidden" name="id" class="updateId"/>
              <input type="text" placeholder="Enter firstname*"  name="firstname"/>
             <input type="text" placeholder=" Enter lastname *"  name="lastname"/>
             <input type="email" placeholder="Enter your email*"  name="email"/>
             <input type="number" placeholder=" Enter your phone *"  name="phone"/>
             <input type="password"  name="password" placeholder="Ebter your password*" />
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
              <a href="./bookingPage.php">
                <img src="./image/account.svg" alt="accountbank" />
                Booking</a
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
        
        <a href="./authentication/logout.php" class="exit"> Logout<img src="./image/exit.svg" alt="exit"></a>
      </div>
      <div class="dashboard__content" >
       <div class="dashboard__summary">
            <div class="dashboard__summary__box">
                <h1>total users</h1>
                <h1><?php echo $usercount ?></h1>
            </div>
            <div class="dashboard__summary__box">
                <h1>total buses</h1>
                <h1><?php echo $buscount;?></h1>
            </div>
            <div class="dashboard__summary__box">
                <h1>total schedule</h1>
                 <h1><?php echo $schedulecount?></h1>
            </div>
            <div class="dashboard__summary__box">
                <h1>total Booking</h1>
                <h1><?php echo $bookcount?></h1>
            </div>
        </div>
      <div class="addNewsBox">
        <button class="addNewBtn"> + NEW schedule</button>
      </div>
      <div class="information">
        <table id="users">
         <tr>
           <th>id</th>
           <th>firstname </th>
           <th>lastname</th>
           <th>email</th>
           <th>password </th>
           <th>phone</th>
           <th>role</th>
           <th>actions</th>
        </tr>
           <?php 
             foreach($users as $data){
            $user = get_object_vars($data);
            
            $id = $user["id"];
            $firstname = $user["firstname"];
            $lastname = $user["lastname"];
            $email = substr($user["email"],0,12);
            $passwor = substr($user["password"],0,7);
            $phone = $user["phone"];
            $role = $user["role"]; ?>
            <tr data-id="<?php echo $id?>">
            <td><?php echo $id;?></td>
            <td><?php echo $firstname;?></td>
            <td><?php echo $lastname;?></td>
            <td><?php echo $email;?>..</td>
            <td><?php echo $passwor;?>...</td>
            <td><?php echo $phone;?></td>
            <td><?php echo $role;?></td>
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
    
    <script src="./js/home.js?v=<?php echo time();?>" ></script>
    <script src="./js/.js?v=<?php echo time();?>" ></script>
  </body>
</html>
