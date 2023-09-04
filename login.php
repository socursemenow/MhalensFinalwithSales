<?php

?>



<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Login Form | CodingLab</title> -->
    <link rel="stylesheet" type="text/css" href="css/style4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <style>
.bgimg-1 {
  background-image: url('/w3images/parallax1.jpg');
  min-height: 20%;

</style>

<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">MHALEN'S <span class="w3-hide-small">BEAUTY</span> PRODUCTS INVENTORY SYSTEM</span> 
  </div>
</div>

  <body>
    <div style="margin-top: 6%;margin-bottom: 6%" class="container">
      <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form action="login.php" method="post" name="form1">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="email" name="email" placeholder="Email" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
          </div>
          <div class="row button">
            <input type="submit" name="login" value="Login">
          </div>
          <div class="signup-link">Don't have an account? <a href="register.php">Signup now</a></div>
        </form>
      </div>
    </div>



</body>
</html>


<?php

session_start();

// Create database connection using config file
include_once("db-config.php");


if (isset($_POST['login'])) {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    // Check if a user exists with given username & password
    $result = mysqli_query($mysqli, "select 'email', 'password' from users
        where email='$email' and password='$password'");

    // Count the number of user/rows returned by query 
    $user_matched = mysqli_num_rows($result);

    // Check If user matched/exist, store user email in session and redirect to sample page-1
    if ($user_matched > 0) {

      $_SESSION["email"] = $email;
        header("location: Dashboard.php");
    } else {
        echo "User email or password is not matched <br/><br/>";
    }
}
?>



