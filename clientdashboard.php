<?php 
 require "./includes/connection.php";
if(isset($_POST['update']) && isset($_FILES["image"])){
    $id = $_POST['id'];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];  
    
    print_r($_FILES);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/cleintdashboard.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="./css/register.css" />
    <link rel="stylesheet" href="./css/alertmsg.css?v=<?php echo time(); ?>" />
  </head>
  <body>
    <?php require "./authentication/user.php";
     require './getJson.php';
     $userData = json_decode($userJson);
    ?> 

    <section class="dashboard">
      <div class="dashboard__sidebar"  style="padding-top:4rem;">
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
          <p><?php echo $data["email"];?></p>
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
          </ul>
        </div>
        
        <a href="./home.php" class="exit">Home<img src="./image/exit.svg" alt="exit"></a>
      </div>
      <div class="dashboard__content">
        <?php 
          foreach($userData as $user){ 
            $data = get_object_vars($user);
            $firstname = $data["firstname"];
            $lastname =$data["lastname"];
            $email = $data["email"];
            $phone = $data["phone"];
          }
          ?> 
          
        <form method="POST">   
        <h1>Update Account</h1>

        <fieldset>
          <input type="hidden" name="id" value="<?php echo $id;?>"/>
          <label for="firstname">
            <img src="./image/user.svg" alt="user" />
            <input type="text" name="firstname" id="firstname" autocomplete="off" placeholder="Enter firstname *" value='<?php echo $firstname?>'/>
          </label>
          <label for="lastname">
            <img src="./image/user.svg" alt="user" />
            <input type="text" name="lastname" autocomplete="off" placeholder="Enter lastname *" value='<?php echo $lastname?>'/>
          </label>
          <label for="email">
            <img src="./image/email.svg" alt="email" />
            <input type="text" name="email" id="email" autocomplete="off" placeholder="Enter your email" value='<?php echo $email?>'/>
          </label>
          <label for="phone">
            <img src="./image/call-black.svg" alt="lock icon" />
              <input type="text" name="phone" autocomplete="off" placeholder="Enter password *" value='<?php echo $phone?>'/>
          </label>
          <label for="photo">
            <img src="./image/user.svg" alt="lock icon" />
            <input type="file" name="image" autocomplete="off" />
          </label>
          <label for="password">
            <img src="./image/lock.svg" alt="lock icon" />
            <input type="password" name="password" autocomplete="off"  placeholder="Enter confirm password *" />
          </label>
        </fieldset>
        <input type="submit" name="update" id="submit" value="Update">
      </form>
      </div>
    </section>
    <script src="./js/home.js">
    </script>
  </body>
</html>
