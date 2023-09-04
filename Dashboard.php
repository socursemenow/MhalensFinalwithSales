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
  <script src="jquery-1.9.1.js"></script>
<script src="Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

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
  margin-top: 0; 
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
  <li><a class="active" href="Dashboard.php">Dashboard</a></li>
  <li><a  href="index.php">Products</a></li>
  <li><a  href="transactions.php">Sales Transactions</a></li> 
  <li><a  href="Items.php">Inventory</a></li>
  <li><a  href="Profile.php">Profile</a></li> 
</ul>

<div class="main" style="margin-left:25%;padding:1px 16px;height:100%;">
  <h3><b>Dashboard</b></h3><hr>
    



<?php

$con = mysqli_connect("localhost","root","","inventory");

  if(!$con) {
    echo "Disconnected!!" . mysqli_error();
  }else{
    $sql = "SELECT * FROM crud";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result)){
      $name[] = $row['name'];
      $quantity[] = $row['quantity'];
    }
  }
?>


<canvas id="myChart" style="width:600%;max-width:1800px"></canvas>

<script>

var barColors = [
  "#f9f9f9","#a5bc88","#506642","#30382b","#bdc9e3","#5a8cad","##868fb6","#526492","#beb6b3","#a4a3a8","#514654"
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: <?php echo json_encode($name);?>,
    datasets: [{
      backgroundColor: barColors,
      data: <?php echo json_encode($quantity);?>,
    }]
  },
  options: {
    title: {
      display: true,
      text: "Pie chart of the products"
    }
  }
});
</script>

<button style="background-color: #184D47;"><a class="active" style="color: #fff"" href="print.php">Reports</a></button>


  
</div>

</body>
</html>