<?php
require "../../include/session.inc.php";

confirm_logged_in();

include "../../include/autoloader.inc.php";

$user = UserController::getUserById($_SESSION['MEMBER_ID']);
$userId = $user[0]["id"];
$username = $user[0]["firstname"];
$lastname = $user[0]["lastname"];
$userImage = $user[0]["imageUrl"];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/cleintdashboard.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../css/register.css" />
    <link rel="stylesheet" href="../css/alertmsg.css?v=<?php echo time(); ?>" />
  </head>
  <body>
    <section class="dashboard">
      <div class="dashboard__sidebar"  style="padding-top:4rem; margin-top: 0rem;">
        <div class="dashboard__profile">
          <div class="dashboard__profile__image">
            <?php
              if(!$userImage){
                $userImage = "IMG-user.svg";
              }
              echo '<img src="../uploads/'.$userImage.'" alt="profile" />';
            ?>
          </div>
          <p>Wellcome back</p>
          <h3><?php echo $username . " " . $lastname; ?></h3>
        </div>
        <div class="dashboard__menu">
          <ul>
            <li class="active">
              <a href="#" >
                <img src="../image/dashboard-icon.svg" alt="dashboard" /> dashboard</a
              >
            </li>
            <li>
              <a href="./myticket.php">
                <img src="../image/myticket.svg" alt="myticket" /> myticket</a
              >
            </li>
          </ul>
        </div>

        <a href="./index.php" class="exit">Home<img src="../image/exit.svg" alt="exit"></a>
      </div>
      <div class="dashboard__content">
<?php
foreach ($user as $data) {
    // $data = get_object_vars($user);
    $firstname = $data["firstname"];
    $lastname = $data["lastname"];
    $email = $data["email"];
    $phone = $data["phone"];
}
?>

        <form method="POST" action="../../include/user.inc.php" enctype="multipart/form-data">
        <h1>Update Your Account</h1>

        <fieldset>
          <input type="hidden" name="id" value="<?php echo $userId; ?>"/>
          <label for="firstname">
            <img src="../image/user.svg" alt="user" />
            <input type="text" name="firstname" id="firstname" autocomplete="off" placeholder="Enter firstname *" value='<?php echo $firstname ?>'/>
          </label>
          <label for="lastname">
            <img src="../image/user.svg" alt="user" />
            <input type="text" name="lastname" autocomplete="off" placeholder="Enter lastname *" value='<?php echo $lastname ?>'/>
          </label>
          <label for="email">
            <img src="../image/email.svg" alt="email" />
            <input type="text" name="email" id="email" autocomplete="off" placeholder="Enter your email" value='<?php echo $email ?>'/>
          </label>
          <label for="phone">
            <img src="../image/call-black.svg" alt="lock icon" />
              <input type="text" name="phone" autocomplete="off" placeholder="Enter password *" value='<?php echo $phone ?>'/>
          </label>
          <label for="photo">
            <img src="../image/user.svg" alt="lock icon" />
            <input type="file" name="image" autocomplete="off" />
          </label>
          <label for="password">
            <img src="../image/lock.svg" alt="lock icon" />
            <input type="password" name="password" autocomplete="off"  placeholder="Enter confirm password *"/>
          </label>
        </fieldset>
        <input type="submit" name="update" id="submit" value="Update">
      </form>
      </div>
    </section>
    <script src="../js/home.js">
    </script>
  </body>
</html>
