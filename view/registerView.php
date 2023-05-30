<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register page</title>
    <link rel="stylesheet" href="./css/register.css" />
  </head>
  <body>
    <div class="login__form">
      <div class="login__form__logo">
        <img src="../image/logo.png" alt="no logo" />
      </div>
      <form method="POST" action="../include/register.inc.php" >
        <h1>Create New Account</h1>
        <p>Already A Member? <a href="./loginView.php">Log in</a></p>

        <fieldset>
          <label for="firstname">
            <img src="../image/user.svg" alt="user" />
            <input type="text" name="firstname" id="firstname" autocomplete="off" placeholder="Enter firstname *"/>
          </label>
          <label for="lastname">
            <img src="../image/user.svg" alt="user" />
            <input type="text" name="lastname" autocomplete="off" placeholder="Enter lastname *"/>
          </label>
          <label for="email">
            <img src="../image/email.svg" alt="email" />
            <input type="text" name="email" id="email" autocomplete="off" placeholder="Enter your email"/>
          </label>
          <label for="password">
            <img src="../image/call-black.svg" alt="lock icon" />
              <input type="text" name="phone" autocomplete="off" placeholder="Enter password *"/>
          </label>
          <label for="phone">
            <img src="../image/lock.svg" alt="lock icon" />
            <input type="password" name="password" autocomplete="off"  placeholder="Enter confirm password *"/>
          </label>
        </fieldset>
        <input type="submit" name="submit" id="submit" value="Register">
      </form>
      <div class="circle--1"></div>
      <div class="circle--2"></div>
    </div>
  </body>
</html>
