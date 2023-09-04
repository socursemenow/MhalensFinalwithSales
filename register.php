<?php

?>

<html>

<head>
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div style="margin-top: 3%;margin-bottom: 3%" class="container">
      <div class="wrapper">
        <div class="title"><span>Register Form</span></div>
        <form action="register.php" method="post" name="form1">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="name" name="name" placeholder="Fullname" required>
          </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="email" name="email" placeholder="Email" required>
          </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="contact" name="contact" placeholder="Contact" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
          </div>
          <div class="row button">
            <input type="submit" name="register" value="Register">
          </div>
          <div class="signup-link">Do have an account? <a href="login.php">Login now</a></div>
        </form>
      </div>
    </div>

        <?php
        //including the database connection file
        include_once("db-config.php");

        // Check If form submitted, insert user data into database.
        if (isset($_POST['register'])) {
            $name     = $_POST['name'];
            $email    = $_POST['email'];
            $password = $_POST['password'];
            $contact = $_POST['contact'];

            // If email already exists, throw error
            $email_result = mysqli_query($mysqli, "select 'email' from users where email='$email' and password='$password'");

            // Count the number of row matched 
            $user_matched = mysqli_num_rows($email_result);

            // If number of user rows returned more than 0, it means email already exists
            if ($user_matched > 0) {
                echo "<br/><br/><strong>Error: </strong> User already exists with the email id '$email'.";
            } else {
                // Insert user data into database
                $result   = mysqli_query($mysqli, "INSERT INTO users(name,email,password,contact) VALUES('$name','$email','$password','$contact')");

                // check if user data inserted successfully.
                if ($result) {
                    echo "<br/><br/>User Registered successfully.";
                } else {
                    echo "Registration error. Please try again." . mysqli_error($mysqli);
                }
            }
        }

        ?>
    </form>
</body>

</html>