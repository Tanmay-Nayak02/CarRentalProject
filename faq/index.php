<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/reset.css">
    <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Resource style -->
    <script src="js/modernizr.js"></script>
    <!-- Modernizr -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <title>FAQ | Car Rentals</title>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-custom" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                <a class="navbar-brand page-scroll" href="../index.php">
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
                                    <a style="font-size:18px;font-weight:800" href="../index.php">Home</a>
                                </li>
                                <li>
                                    <a style="font-size:18px;font-weight:800" href="../clientlogin.php">Admin</a>
                                </li>
                                <li>
                                    <a style="font-size:18px;font-weight:800" href="../customerlogin.php">Customer</a>
                                </li>
                                
                            </ul>
                        </div>
                        <?php   }
                ?>
                        <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <section class="cd-faq">
        <ul class="cd-faq-categories">
            <li><a class="selected" href="#basics">Basics</a></li>
        </ul>
        <!-- cd-faq-categories -->

        <div class="cd-faq-items">
            <ul id="basics" class="cd-faq-group">
                <li class="cd-faq-title">
                    <h2>Basics</h2>
                </li>
                <li>
                    <a class="cd-faq-trigger" href="#0">How do I pay for my Rental?</a>
                    <div class="cd-faq-content">
                        <p>Car Rentals gladly accepts Mastercard and Visa. Personal Checks are also accepted providing you purchase CDW and Theft Protection on your rental.
                         At this time we would like to advise that personal checks are not accepted locally.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>

                <li>
                    <a class="cd-faq-trigger" href="#0">What if i find a better rate for a rental car?</a>
                    <div class="cd-faq-content">
                        <p>One of the many great things about Car Rentals is our rental rates and services are guaranteed to be the very best in the industry. If you come across a lower price from a competitor and the rate is on a comparable vehicle including the same terms, locations, and rental car fees we will be glad to beat the price for you. Please complete our Guaranteed Best Rate form if you have found a better rate with one of our competitors.</div>
                    <!-- cd-faq-content -->
                </li>

                <li>
                    <a class="cd-faq-trigger" href="#0">Will i need a driving license to rent a car?</a>
                    <div class="cd-faq-content">
                        <p>A driving license is not needed as a driver is already provided by the Admin.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>

                <li>
                    <a class="cd-faq-trigger" href="#0">Is there a fee if i return the car after the due date?</a>
                    <div class="cd-faq-content">
                        <p>Yes, we charge ₹500/- day after the due date.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>
            </ul>
        <!-- cd-faq-items -->
        <a href="#0" class="cd-close-panel">Close</a>
    </section>
    <!-- cd-faq -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Resource jQuery -->
</body>

</html>