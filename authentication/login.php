<?php require "session.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login page</title>
    <link rel="stylesheet" href="../css/login.css" />
  </head>
  <body>
    <div class="login__form">
      <div class="login__form__logo">
        <img src="../image/logo.png" alt="no logo" />
      </div>
      <form method="POST" action="userAuthentication.php">
        <h1>Welcome Back</h1>
        <p>Enter your credentials to acces your account</p>

        <fieldset>
          <label for="email">
            <img src="../image/email.svg" alt="email icon" />
            <input type="text" name="email" id="email" autocomplete="off" placeholder="Enter your email *"/>
          </label>
          <label for="password">
            <img src="../image/lock.svg" alt="lock icon" />
            <input type="password" name="password" autocomplete="off" placeholder="Enter your password *"/>
          </label>
        </fieldset>
        <input type="submit" name="submit" id="submit" value="submit">
      </form>
      <a href="./register.php" >Register Account</a>
      <div class="circle--1"></div>
      <div class="circle--2"></div>
    </div>
  </body>
</html>
