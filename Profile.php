<?php
  //including the database connection file
  include_once("db-config.php");
      
?>
<!DOCTYPE html>
<html>
<head>
  <title>Mhalen's Beauty Product Inventory System</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Data</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="ajax/ajax.js"></script>
</head>
<style>
body {
  width: 100%;
  height: 400px;
  background-image: url('17.jpg');
  background-size: cover;
  background-attachment: fixed;
  margin: 0;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  margin-top:0; 
  width: 25%;
  background-color: #efebf2;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
  font-size: 20px;
}

li a.active {
  background-color: #184D47;
  color: white;
}

li a:hover:not(.active) {
  background-color: #A5F0C5;
  color: black;
}
h1{
  background-color: #d8d8d6;
}
/* The navigation bar */
.navbar {
  overflow: hidden;
  background-color: #184D47;
  position: fixed; /* Set the navbar to fixed position */
  top: 0; /* Position the navbar at the top of the page */
  width: 100%; /* Full width */
  z-index: 9999;
}

/* Links inside the navbar */
.navbar a {
  float: right;
  display: block;
  color: #fff;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change background on mouse-over */
.navbar a:hover {
  background: #A5F0C5;
  color: black;
}

/* Main content */
.main {
  margin-top: 53px; /* Add a top margin to avoid content overlay */
}
.navbar p {
  float: right;
  display: block;
  color: #fff;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-family: Valera, monospace;
}
</style>

<body>
<div class="navbar">
  <a href="logout.php">Log Out</a>
  
  <p style="margin-right: 20%; position: fixed;"><b>Mhalens Beauty Product Inventory System</b></p>
</div>

<ul>
  <li><a href="Dashboard.php">Dashboard</a></li>
  <li><a  href="index.php">Products</a></li>
  <li><a href="transactions.php">Sales Transactions</a></li>
  <li><a  href="Items.php">Inventory</a></li>
  <li><a class="active" href="Profile.php">Profile</a></li> 
</ul>

<div class="main" style="margin-left:25%;padding:1px 16px;height:100%;">
    
      <?php
      session_start();



                $active = $_SESSION['email'];                
                $sql = "SELECT * FROM users WHERE email='$active'";
                $result = mysqli_query($mysqli,$sql);

                while($row = mysqli_fetch_array($result)) {
                  $id = $row['id'];
                  $name = $row['name'];
                  $password = $row['password'];
                  $email = $row['email'];
                  $contact = $row['contact'];
                
                

            if(isset($_POST['submit']))
          {
          $name = $_POST['name'];
          $password = $_POST['password'];
          $email = $_POST['email'];
          $contact = $_POST['contact'];
          $sql = "UPDATE `users` SET `name`='$name',`password`='$password',`email`='$email',`contact`='$contact' WHERE id=$id";
          if (mysqli_query($mysqli, $sql)) {
            echo '<script>alert("Submit Successfully!")</script>';
          } 
          else {
            echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
          }
          mysqli_close($mysqli);
        
}
?>



<div id="content">

                <div class="col-md-12" style="padding:20px; width: 100%">
                    <div class="col-md-12 padding-0">
                        <div class="col-md-12 padding-0">
                <div class="col-md-14 padding-0">
                  <div class="panel box-shadow-none content-header">
                      <div class="panel-body">
                        <div class="col-md-12">
                            <h3 class="animated fadeInLeft"><span class="lnr lnr-user"></span> My Profile</h3>
                        </div>
                      </div>
                  </div>
                </div>

                <table style="text-align: left; width: 100%; background-color: #fff;">
                  <tr style="background-color: #efebf2;">
                    <td colspan="4" rowspan="4"><img src="00.jpg" width="370" height="300"></td>
                    <td colspan="2" style="text-align: center;"><form action="Profile.php" method="post"><h4>Profile Information</h4></td>
                  </tr>
                  <tr  style="border: 5px;background-color: #efebf2;">
                    <td><label>Full Name</label><br><input type="firstname" value="<?php echo $name;?>" name="name" class="form-control" style="width: 90%;" placeholder="John..."></td>
                    <td><label>Email</label><input input type=text value="<?php echo $email;?>" name="email" class="form-control" style="width: 90%;" placeholder="doe@gmail.com"></td>
                  </tr>
                  <tr style="background-color: #efebf2;">
                    <td><label>Contact</label><input type="contact" value="<?php echo $contact;?>" name="contact" class="form-control" style="width: 90%;" placeholder="09876543212"></td>
                    <td><label>Password</label><input type="password" value="<?php echo $password;?>" name="password" class="form-control" style="width: 90%;" placeholder="09876543212"></td>
                  </tr>
                  <tr style="background-color: #efebf2;">
                    <td colspan="2" style="text-align: center;"><button class="btn btn-md bg-info" name="submit" style="background-color: #184D47; color: #fff">Update</button></td>
                  </tr>
                </table>
                                        </div>
                                    </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <?php
        
        }
        ?>
          <!-- end: content -->
            </div>  
          <!-- end: right menu -->
          
      </div>

     




  



  
</div>

</body>
</html>