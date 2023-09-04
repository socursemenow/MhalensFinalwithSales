<!DOCTYPE html>
<html>
<head>
  <title>Mhalen's Beauty Product Inventory System</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inventory Data</title>
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
  number-decoration: none;
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
  number-align: center;
  padding: 14px 16px;
  number-decoration: none;
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
  number-align: center;
  padding: 14px 16px;
  number-decoration: none;
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
  <li><a class="active" href="index.php">Products</a></li>
  <li><a href="transactions.php">Sales Transactions</a></li>
  <li><a href="Items.php">Inventory</a></li>
  <li><a href="Profile.php">Profile</a></li>  
</ul>

<div class="main" style="margin-left:25%;padding:1px 16px;height:100%;">
<div class="row">
  <div class="col-xs-12 section-container-spacer">
    <h2><b>Product Details</b></h2><hr>
    <p>"Glowing skin is a result of proper skin care. It means you can wear less makeup and let skin shine through." <br>   

- Michael Coulombe.</p>
  </div>

<div class="col-xs-12 col-md-4 section-container-spacer">
    <img class="img-responsive" alt="" src="css/product1.jpg">
    <h3>Nica Bloom Rejuvenating</h3>
    <p>How long to use rejuvenating set? For best results, use one rejuvenating set for 25 to 30 days. On the other hand, for sensitive skin.</p>
	<input class="form-control" type="number" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" placeholder="Quantity" id="t53"></input><button class="btn btn-info buy_product" id="53">Buy</button><span hidden id="t53span">Quantity exceeded stock</span>
  </div>

  <div class="col-xs-12 col-md-4 section-container-spacer">
    <img class="img-responsive" alt="" src="css/product2.jpg">
    <h3>Skin Magical Rejuvenating Set no.1</h3>
    <p>These products will not only help dry up and heal your acne fast, it will also help brighten and protect your skin, making you look younger.</p>
	<input class="form-control" type="number" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" placeholder="Quantity" id="t54"></input><button class="btn btn-info buy_product" id="54">Buy</button><span hidden id="t54span">Quantity exceeded stock</span>
  </div>

  <div class="col-xs-12 col-md-4 section-container-spacer">
    <img class="img-responsive" alt="" src="css/product3.jpg">
    <h3>Skin Magical Rejuvenating Set no.2</h3>
    <p>It repairs, improves and strengthens skin's natural barrier to keep the skin protected.</p>
	<input class="form-control" type="number" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" placeholder="Quantity" id="t55"></input><button class="btn btn-info buy_product" id="55">Buy</button><span hidden id="t55span">Quantity exceeded stock</span>
  </div>

  <div class="col-xs-12 col-md-4 section-container-spacer">
    <img class="img-responsive" alt="" src="css/product4.jpg">
    <h3>Skin Magical Rejuvenating Set no.3</h3>
    <p>This product set comes with better whitening, anti-acne, anti-aging and sunscreen effects for your better skin care regimen.</p>
	<input class="form-control" type="number" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" placeholder="Quantity" id="t56"></input><button class="btn btn-info buy_product" id="56">Buy</button><span hidden id="t56span">Quantity exceeded stock</span>
  </div>

  <div class="col-xs-12 col-md-4 section-container-spacer">
    <img class="img-responsive" alt="" src="css/product5.jpg">
    <h3>Beauty Vault Rejuvenating Set</h3>
    <p>This product set comes with better whitening, anti-acne, anti-aging and sunscreen effects for your better skin care regimen.</p>
	<input class="form-control" type="number" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" placeholder="Quantity" id="t57"></input><button class="btn btn-info buy_product" id="57">Buy</button><span hidden id="t57span">Quantity exceeded stock</span>
  </div>

  <div class="col-xs-12 col-md-4 section-container-spacer">
    <img class="img-responsive" alt="" src="css/product6.jpg">
    <h3>Ryx Skin Clearbomb set</h3>
    <p>This set is packed with skin-loving ingredients that will deeply exfoliate the damaged top-most layer of your skin to bring out that clear.</p>
	<input class="form-control" type="number" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" placeholder="Quantity" id="t58"></input><button class="btn btn-info buy_product" id="58">Buy</button><span hidden id="t58span">Quantity exceeded stock</span>
  </div>

  <div class="col-xs-12 col-md-4 section-container-spacer">
    <img class="img-responsive" alt="" src="css/product7.jpg">
    <h3>Fairy Skin Derma Set</h3>
    <p>Test the skin for sensitivity to the product prior to use. If no allergies occur, you may start using the product.</p>
	<input class="form-control" type="number" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" placeholder="Quantity" id="t59"></input><button class="btn btn-info buy_product" id="59">Buy</button><span hidden id="t59span">Quantity exceeded stock</span>
  </div>

  <div class="col-xs-12 col-md-4 section-container-spacer">
    <img class="img-responsive" alt="" src="css/product8.jpg">
    <h3>Brilliant Skin Moisturizing Set</h3>
    <p>Developed with premium ingredients just for you. It has a mild, gentle, and smooth formula which you will totally love.</p>
	<input class="form-control" type="number" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" placeholder="Quantity" id="t60"></input><button class="btn btn-info buy_product" id="60">Buy</button><span hidden id="t60span">Quantity exceeded stock</span>
  </div>

  <div class="col-xs-12 col-md-4 section-container-spacer">
    <img class="img-responsive" alt="" src="css/product9.jpg">
    <h3>Brilliant Skin Whitening Set</h3>
    <p>Use in the morning and at night as your daily cleanser. Apply to damp skin and lather for three (3) minutes before rinsing.</p>
	<input class="form-control" type="number" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" placeholder="Quantity" id="t61"></input><button class="btn btn-info buy_product" id="61">Buy</button><span hidden id="t61span">Quantity exceeded stock</span>
  </div>

  <div class="col-xs-12 col-md-4 section-container-spacer">
    <img class="img-responsive" alt="" src="css/product10.jpg">
    <h3>Brilliant Skin Rejuvenating Set</h3>
    <p>Use once a day, preferably before bedtime, for one month, then rest for another month before using it again.</p>
	<input class="form-control" type="number" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" placeholder="Quantity" id="t62"></input><button class="btn btn-info buy_product" id="62">Buy</button><span hidden id="t62span">Quantity exceeded stock</span>
  </div>

 <div class="col-xs-12 col-md-4 section-container-spacer">
    <img class="img-responsive" alt="" src="css/product11.jpg">
    <h3>Dr. Alvin Rejuvenating Set</h3>
    <p>Speeds up skin cells turn over to shed dead skin cells that are clogging your skin pores.</p>
	<input class="form-control" type="number" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" placeholder="Quantity" id="t63"></input><button class="btn btn-info buy_product" id="63">Buy</button><span hidden id="t63span">Quantity exceeded stock</span>
  </div> 

</div>


</main>

<script>
document.addEventListener("DOMContentLoaded", function (event) {
  navbarToggleSidebar();
  navActivePage();
});
function buyFunc(x) {
  let p = document.getElementById(x + "span");
  p.removeAttribute("hidden");
}
</script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID 

<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script>

--> <script type="number/javascript" src="./main.85741bff.js"></script></body>




</div>

</body>
</html>