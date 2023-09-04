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
  <a href="logout.php">Log Out</a>
  <p>Welcome User</p>
  <p style="margin-right: 20%; position: fixed;"><b>Mhalens Beauty Product Inventory System</b></p>
</div>

<ul>
  <li><a href="index.php">Home</a></li>
  <li><a  href="Items.php">Add Items</a></li>
  <li><a href="Update.php">Update Items</a></li>
  <li><a href="Delete.php">Delete Items</a></li>
  <li><a class="active" href="Reports.php">Reports</a></li>
</ul>

<div class="main" style="margin-left:25%;padding:1px 16px;height:100%;">
    <h3>Report</h3>
  <p>This is the Report page.</p>


<table id="vendorDetailsTable" class="table table-sm table-striped table-bordered table-hover" style="width:100%">
        <thead>
          <tr>
            <th>Item ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Items</th>
            
            
          </tr>
        </thead>
        <tbody>

          <tr> 
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            
          </tr>

          </tbody>
            <tfoot>
              <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
               
              </tr>
            </tfoot>
          </table>

       <tr style="font-size:24px" align="left">
                <td colspan="2">
                    STOCK INFORMATION<br>
                    Product name &emsp;&emsp;&emsp;&emsp; <input type="text" name="Product Name" size="15"> <br><br>
                    Price &emsp;&emsp;&emsp;&emsp;<input type="text" name="Price" size="15"> <br><br>
                    Quantity &emsp;&emsp;&emsp;&emsp;<input type="text" name="Quantity" size="15"> <br><br>
                    Total Items &emsp;&emsp;&emsp;<input type="text" name="Total Items" size="15"> <br><br>
                    
                    
                    
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="SAVE">
                    <input type="Reset" name="clear" Value="RESET">
                </td>




  
</div>

</body>
</html>