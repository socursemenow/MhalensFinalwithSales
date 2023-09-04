<?php
include 'backend/database.php';
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
  background-color: #00917C;
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
  <a href="Dashboard.php">Back</a>
  
  <p style="margin-right: 20%; position: fixed;"><b>Mhalens Beauty Product Inventory System</b></p>
</div>

<div class="main" style="margin-left:10%;padding:1px 16px;height:100%;">
    <h3>Dashboard                                                                     </h3>
  

<script>function display_ct7() {
var x = new Date()
var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
hours = x.getHours( ) % 12;
hours = hours ? hours : 12;
hours=hours.toString().length==1? 0+hours.toString() : hours;

var minutes=x.getMinutes().toString()
minutes=minutes.length==1 ? 0+minutes : minutes;

var seconds=x.getSeconds().toString()
seconds=seconds.length==1 ? 0+seconds : seconds;

var month=(x.getMonth() +1).toString();
month=month.length==1 ? 0+month : month;

var dt=x.getDate().toString();
dt=dt.length==1 ? 0+dt : dt;

var x1=month + "/" + dt + "/" + x.getFullYear(); 
x1 = x1 + " - " +  hours + ":" +  minutes + ":" +  seconds + " " + ampm;
document.getElementById('ct7').innerHTML = x1;
display_c7();
 }
 function display_c7(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct7()',refresh)
}
display_c7()
</script>
<span id='ct7' style="font-size: 20px;"></span>

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


<canvas id="invoice" style="width:500%;max-width:1300px"></canvas>


<script>

var barColors = ["#f9f9f9","#a5bc88","#506642","#30382b","#bdc9e3","#5a8cad","#868fb6","#526492","#beb6b3","#a4a3a8","#514654"];

new Chart("invoice", {
  type: "bar",
  data: {
    labels: <?php echo json_encode($name);?>,
    datasets: [{
      backgroundColor: barColors,
      data: <?php echo json_encode($quantity);?>
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "List of Stocks"
    }
  }
});
</script>
<br>
<br>
<br>
<table class="table table-striped table-hover">
                <thead>
                    <tr>
            <th>
              
              
            </th>
                        <th>SL NO</th>
                        <th>PRODUCT NAME</th>
                        <th>PRICE</th>
                        <th>QUANTITY</th>
                    </tr>
                </thead>
        <tbody>
        
        <?php
        $result = mysqli_query($conn,"SELECT * FROM crud");
          $i=1;
          while($row = mysqli_fetch_array($result)) {
        
        ?>
        <tr id="<?php echo $row["id"]; ?>">
        <td>
              
            </td>
          <td><?php echo $i; ?></td>
          <td><?php echo $row["name"]; ?></td>
          <td><?php echo $row["price"]; ?></td>
          <td><?php echo $row["quantity"]; ?></td>
                 
              

            </td>
          
          
        </tr>
        <?php
        $i++;
        }
        ?>
        </tbody>
      </table>
<?php 
  $conn= mysqli_connect("localhost", "root","", "inventory") or die (mysqli_error());
    $result= mysqli_query($conn, 'SELECT sum(quantity) as value_sum FROM crud');
    $row= mysqli_fetch_assoc($result);
    $sum= $row['value_sum'];
?>

<br>
<h1>TOTAL: STOCKS <?php echo $row["value_sum"];?></h1>

<?php

$con = mysqli_connect("localhost","root","","inventory");

  if(!$con) {
    echo "Disconnected!!" . mysqli_error();
  }else{
    $sql = "SELECT C.name, T.quantity FROM transactions T LEFT JOIN crud C ON C.id = T.product_id";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result)){
      $nameG[] = $row['name'];
      $quantityG[] = $row['quantity'];
    }
  }
?>


<canvas id="stocksales" style="width:500%;max-width:1300px"></canvas>


<script>

var barColors = ["#f9f9f9","#a5bc88","#506642","#30382b","#bdc9e3","#5a8cad","#868fb6","#526492","#beb6b3","#a4a3a8","#514654"];

new Chart("stocksales", {
  type: "bar",
  data: {
    labels: <?php echo json_encode($nameG);?>,
    datasets: [{
      backgroundColor: barColors,
      data: <?php echo json_encode($quantityG);?>
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Total Stock Sales"
    }
  }
});
</script>
<br>
<br>
<br>
<table class="table table-striped table-hover">
<thead>
	<tr>
		<th>Transaction ID</th>
		<th>PRODUCT NAME</th>
		<th>Quantity before Transaction</th>
		<th>Sale Quantity</th>
		<th>Price during Transaction</th>
		<th>Total PRICE</th>
	</tr>
</thead>
<tbody>

<?php
$result = mysqli_query($conn,"SELECT T.transaction_id, C.name, T.prev_quantity, T.quantity, T.price, T.total_price FROM transactions T LEFT JOIN crud C ON C.id = T.product_id");
	while($row = mysqli_fetch_array($result)) {

?>
<tr>
	<td><?php echo $row["transaction_id"]; ?></td>
	<td><?php echo $row["name"]; ?></td>
	<td><?php echo $row["prev_quantity"]; ?></td>
	<td><?php echo $row["quantity"]; ?></td>
	<td><?php echo $row["price"]; ?></td>
	<td><?php echo $row["total_price"]; ?></td>
</tr>
<?php
}
?>
</tbody>
</table>
<?php 
  $conn= mysqli_connect("localhost", "root","", "inventory") or die (mysqli_error());
    $result= mysqli_query($conn, 'SELECT sum(total_price) as value_sum FROM transactions');
    $row= mysqli_fetch_assoc($result);
    $sum= $row['value_sum'];
?>

<br>
<h1>GRAND TOTAL: <?php echo $row["value_sum"];?></h1>

<br>
<br>
<button style= "background-color: #184D47; color: #fff" onclick="window.print()">click to print</button>
<br>
<br>
<br>

  
</div>

</body>
</html>