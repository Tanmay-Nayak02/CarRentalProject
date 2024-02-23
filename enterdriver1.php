<html>

  <head>
    <title> customer Signup | Car Rentals </title>
  </head>
  <?php session_start(); ?>
  <link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">

    <link rel="stylesheet" href="assets/w3css/w3.css">
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                <a class="navbar-brand page-scroll" href="index.php">
                   Car Rentals </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <?php
                if(isset($_SESSION['login_client'])){
            ?> 
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a style="font-size:18px;font-weight:800" href="index.php">Home</a>
                    </li>
                    <li>
                        <a style="font-size:18px;font-weight:800" href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_client']; ?></a>
                    </li>
                    <li>
                    <ul class="nav navbar-nav navbar-right">
            <li><a style="font-size:18px;font-weight:800" href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Control Panel <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a style="font-size:18px;font-weight:800" href="entercar.php">Add Car</a></li>
              <li> <a style="font-size:18px;font-weight:800" href="enterdriver.php"> Add Driver</a></li>
              <li> <a style="font-size:18px;font-weight:800" href="clientview.php">View</a></li>

            </ul>
            </li>
          </ul>
                    </li>
                    <li>
                        <a style="font-size:18px;font-weight:800" href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>
            
            <?php
                }
                else if (isset($_SESSION['login_customer'])){
            ?>
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a style="font-size:18px;font-weight:800" href="index.php">Home</a>
                    </li>
                    <li>
                        <a style="font-size:18px;font-weight:800" href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_customer']; ?></a>
                    </li>
                    <li>
                        <a style="font-size:18px;font-weight:800" href="#">History</a>
                    </li>
                    <li>
                        <a style="font-size:18px;font-weight:800" href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>

            <?php
            }
                else {
            ?>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a style="font-size:18px;font-weight:800" href="index.php">Home</a>
                    </li>
                    <li>
                        <a style="font-size:18px;font-weight:800" href="clientlogin.php">Admin</a>
                    </li>
                    <li>
                        <a style="font-size:18px;font-weight:800" href="customerlogin.php">Customer</a>
                    </li>
                    <li>
                        <a style="font-size:18px;font-weight:800" href="#"> FAQ </a>
                    </li>
                </ul>
            </div>
                <?php   }
                ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php

require 'connection.php';
$conn = Connect();

$driver_name = $conn->real_escape_string($_POST['driver_name']);
$dl_number = $conn->real_escape_string($_POST['dl_number']);
$driver_phone = $conn->real_escape_string($_POST['driver_phone']);
$driver_address = $conn->real_escape_string($_POST['driver_address']);
$driver_gender = $conn->real_escape_string($_POST['driver_gender']);
$client_username = $_SESSION['login_client'];
$driver_availability = "yes";

$query = "INSERT into driver(driver_name,dl_number,driver_phone,driver_address,driver_gender,client_username,driver_availability) VALUES('" . $driver_name . "','" . $dl_number . "','" . $driver_phone . "','" . $driver_address . "','" . $driver_gender ."','" . $client_username ."','" . $driver_availability ."')";
$success = $conn->query($query);

if (!$success){ ?>
    <div class="container">
	<div class="jumbotron" style="text-align: center;">
        Car with the same vehicle number already exists!
        <br><br>
        <a href="entercar.php" class="btn btn-default"> Go Back </a>
</div>
<?php	
}
else {
    header("location: enterdriver.php"); //Redirecting 
}

$conn->close();

?>

    </body>
    <footer style="text-align: center; padding: 10px; background-color: #333; color: #fff;">
    <p>&copy; 2023 Car Rental. All rights reserved.</p>
  </footer>
</html>