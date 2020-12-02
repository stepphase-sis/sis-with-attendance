<?php

include('student/connection.php');

if (!isset($_SESSION['logged'])) {
//if (!isset($_SESSION['hidemylogin']) == ("display: none")) {
// echo ('<meta http-equiv="refresh" content="3"/>');

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="../styles/style.css" rel="stylesheet" type="text/css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <style>
      .container-card {
        background-color: #189ab4;
        color: white;
        padding: 20px;
        max-width: 600px;
        margin: auto;
        margin-top: 70px;
        height: auto;
      }
      .input {
        padding: 8px;
        display: block;
        border: none;
        border-bottom: 1px solid #ccc;
        width: 100%;
      }
    </style>
  </head>

  <body>
    <nav class="navbar">
      <span class="navbar-toggle" id="js-navbar-toggle">
        <i class="fa fa-bars"></i>
      </span>
     <a href="index.html"><img class="logo" src="../images/logo.png"></a>
      <ul class="main-nav" id="js-menu">
        <li>
          <a href="../index.html" class="nav-links">Home</a>
        </li>
        <li>
          <a href="../About.html" class="nav-links">About Us</a>
        </li>
        <li>
          <a href="../Contact.html" class="nav-links">Contact Us</a>
        </li>
        <li>
          <a href="registration.php" class="nav-links">Registration</a>
        </li>
      </ul>
    </nav>
    <div class="container-card">
      <table width="345">
        <caption style="padding: 20px; background-color: #05445e">
          Login
        </caption>
      </table>
      <form
        name="slogin" 
        method="post" 
        action="../validation/login_validation.php"
      >
        <p>
          <label>Number</label>
          <input class="input" name="user_id" type="user_id" 
          value="<?php if (isset($_COOKIE['user_id'])) {echo $_COOKIE['user_id'];} ?>" required />
        </p>
        <p>
          <label>Passowrd</label>
          <input class="input" type="password" id="pass" name="password" value="<?php if (isset($_COOKIE['password'])) {echo $_COOKIE['password'];} ?>" required />
        </p>
        <div style="text-align: center">
          <input type="submit" value="LogIn" name="s_login"/>
        </div>
      </form>
      <div style="text-align: center; margin: 20px">
        <span>Forgot <a href="#" style="color: #05445e">password?</a></span
        >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For
        <a href="Registration.html" style="color: #05445e"> registration</a>
      </div>
    </div>
    <div class="footer">
      <h2>2020&copy; SIS</h2>
    </div>
    <script src="../script/script.js"></script>
  </body>
</html>
<?php
//}else {
//    echo "<script type='text/javascript'>alert('You are already logged in.');</script>";
//    echo '<meta http-equiv="refresh" content="0; URL=../index.php">';
//}
} else {
    echo '<meta http-equiv="refresh" content="0; URL=./login.php">';
}
?>