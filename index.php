<!DOCTYPE html>
<html>
<?php 
session_start(); 
require 'connection.php';
$conn = Connect();
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go cars!</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                <a style="font-size:18px;font-weight:800" class="navbar-brand page-scroll" href="index.php">
                   Go cars! </a>
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
                    <ul class="nav navbar-nav">
            <li><a style="font-size:18px;font-weight:800" href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Garagge <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a style="font-size:18px;font-weight:800" href="prereturncar.php">Return Now</a></li>
              <li> <a style="font-size:18px;font-weight:800" href="mybookings.php"> My Bookings</a></li>
            </ul>
            </li>
          </ul>
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
                        <a style="font-size:18px;font-weight:800" href="faq/index.php"> FAQ </a>
                    </li>
                    <li>
                        <a style="font-size:18px;font-weight:800" href="#aboutus">About-Us</a>
                    </li>
                    
                </ul>
            </div>
                <?php   }
                ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="bgimg-1">
        <header class="intro">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <div id="sec2" style="color: #777;background-color:#d0ebff;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 style="text-align:center;">Available Cars</h3>
<br>
        <section class="menu-content">
            <?php   
            $sql1 = "SELECT * FROM cars WHERE car_availability='yes'";
            $result1 = mysqli_query($conn,$sql1);

            if(mysqli_num_rows($result1) > 0) {
                while($row1 = mysqli_fetch_assoc($result1)){
                    $car_id = $row1["car_id"];
                    $car_name = $row1["car_name"];
                    $ac_price = $row1["ac_price"];
                    $ac_price_per_day = $row1["ac_price_per_day"];
                    $non_ac_price = $row1["non_ac_price"];
                    $non_ac_price_per_day = $row1["non_ac_price_per_day"];
                    $car_img = $row1["car_img"];
               
                    ?>
            <a href="booking.php?id=<?php echo($car_id) ?>">
            <div class="sub-menu">
            

            <img class="card-img-top" src="<?php echo $car_img; ?>" alt="Card image cap">
            <h5><b> <?php echo $car_name; ?> </b></h5>
            <h6> AC Fare: <?php echo ("Rs. " . $ac_price . "/km & Rs." . $ac_price_per_day . "/day"); ?></h6>
            <h6> Non-AC Fare: <?php echo ("Rs. " . $non_ac_price . "/km & Rs." . $non_ac_price_per_day . "/day"); ?></h6>

            
            </div> 
            </a>
            <?php }}
            else {
                ?>
<h1> No cars available :( </h1>
                <?php
            }
            ?>                                   
        </section>
                    
    </div>

    <div class="bgimg-2">
        <div class="caption">
            <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
        </div>
    </div>

    
    <!-- Container (Contact Section) -->
    <!-- -->

    <!-- About-us section starts -->
  <section class="aboutus" id="aboutus" style="display: flex; justify-content: center; align-items: center; min-height: 100vh; background-color: #d0ebff;">
    <div class="about-section" style="max-width: 600px; padding: 40px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); text-align: center;border:2px solid #000;">
      <h1 style="font-size: 28px; margin-bottom: 20px;font-weight:900">About Us</h1>
      <p style="font-size: 16px; line-height: 1.6; margin-bottom: 15px;font-weight:600">Welcome to Car Rental, your trusted destination for high-quality car rentals. With a wide range of vehicles and flexible rental options, we make your journey comfortable and convenient. Our experienced team is dedicated to providing exceptional service to meet your transportation needs.</p>
      <p style="font-size: 16px; line-height: 1.6; margin-bottom: 15px;font-weight:600">Whether you're planning a family vacation, a business trip, or just need a reliable vehicle, we have you covered. Our fleet is regularly maintained and equipped with the latest features to ensure your safety and enjoyment.</p>
      <p style="font-size: 16px; line-height: 1.6; margin-bottom: 15px;font-weight:600">At Car Rental, we prioritize customer satisfaction and strive to exceed your expectations. We look forward to serving you and making your travel experience exceptional.</p>
    </div>
  </section>
  <!-- About-us section ends -->


<!-- Contact-us section starts -->
  <section class="footer" style="text-align: center; padding: 20px; background-color: #333; color: #fff;">
    <div class="box-container">
      <div class="box" style="display: flex; flex-direction: column; align-items: center;">
        <h3 style="margin-bottom: 10px;color:#fff;font-weight:800">Contact-Us</h3>
        <a href="#" style="color: #fff; text-decoration: none; margin-bottom: 5px;"> <i class="fab fa-facebook-f"></i> Facebook</a>
        <a href="#" style="color: #fff; text-decoration: none; margin-bottom: 5px;"> <i class="fab fa-twitter"></i> Twitter</a>
        <a href="#" style="color: #fff; text-decoration: none; margin-bottom: 5px;"> <i class="fab fa-instagram"></i> Instagram</a>
        <a href="#" style="color: #fff; text-decoration: none; margin-bottom: 5px;"> <i class="fab fa-linkedin"></i> LinkedIn</a>
        <a href="#" style="color: #fff; text-decoration: none; margin-bottom: 5px;"> <i class="fab fa-whatsapp"></i> WhatsApp</a>
        <a href="#" style="color: #fff; text-decoration: none;"> <i class="fab fa-pinterest"></i> Pinterest</a>
      </div>
    </div>
  </section>
<!-- Contact-us section ends -->

  <footer style="text-align: center; padding: 10px; background-color: #333; color: #fff;">
    <p>&copy; 2023 Car Rental. All rights reserved.</p>
  </footer>

            
    <script>
        function myMap() {
            myCenter = new google.maps.LatLng(25.614744, 85.128489);
            var mapOptions = {
                center: myCenter,
                zoom: 12,
                scrollwheel: true,
                draggable: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

            var marker = new google.maps.Marker({
                position: myCenter,
            });
            marker.setMap(map);
        }
    </script>
    <script>
        function sendGaEvent(category, action, label) {
            ga('send', {
                hitType: 'event',
                eventCategory: category,
                eventAction: action,
                eventLabel: label
            });
        };
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCuoe93lQkgRaC7FB8fMOr_g1dmMRwKng&callback=myMap" type="text/javascript"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="assets/js/theme.js"></script>
</body>

</html>