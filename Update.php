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
  margin-top:1%; 
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
  <li><a class="active" href="Update.php">Update Items</a></li>
  <li><a href="Delete.php">Delete Items</a></li>
  <li><a href="Reports.php">Reports</a></li>
</ul>

<div class="main" style="margin-left:25%;padding:1px 16px;height:100%;">
  

<p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
            <h2>Update <b>Items</b></h2>
          </div>
          
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
            <th>
              
            </th>
            <th>SL NO</th>
                        <th>PRODUCT NAME</th>
                        <th>PRICE</th>
                        <th>QUANTITY</th>
                        <th>UPDATE</th>
            
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
          
          <td>
            <a href="#editEmployeeModal" class="edit" data-toggle="modal">
              <i class="material-icons update" data-toggle="tooltip" 
              data-id="<?php echo $row["id"]; ?>"
              data-name="<?php echo $row["name"]; ?>"
              data-price="<?php echo $row["price"]; ?>"
              data-quantity="<?php echo $row["quantity"]; ?>"
              title="Update">&#xE254;</i>
            </a>
                    </td>
        </tr>
        <?php
        $i++;
        }
        ?>
        </tbody>
      </table>
      
        </div>
    </div>
  
  <!-- Edit Modal HTML -->
  <div id="editEmployeeModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="update_form">
          <div class="modal-header">            
            <h4 class="modal-title">Edit Item</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <input type="hidden" id="id_u" name="id" class="form-control" required>         
            <div class="form-group">
              <label>Name</label>
              <input type="text" id="name_u" name="name" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Price</label>
              <input type="price" id="price_u" name="price" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Quantity</label>
              <input type="quantity" id="quantity_u" name="quantity" class="form-control" required>
            </div>        
          </div>
          <div class="modal-footer">
          <input type="hidden" value="2" name="type">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
            <button type="button" class="btn btn-info" id="update">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>




</body>
</html>