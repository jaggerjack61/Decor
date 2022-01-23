<!DOCTYPE html>
<!--
	Salient by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salient - Free Responsive HTML5 Template | Template Stock</title>

    <!-- Custom Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,300,700' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Crimson+Text:400,600" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS Style -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Template CSS Style -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Animate CSS  -->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!-- FontAwesome 4.3.0 Icons  -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- et line font  -->
    <link rel="stylesheet" href="assets/css/et-line-font/style.css">

    <!-- BXslider CSS  -->
    <link rel="stylesheet" href="assets/css/bxslider/jquery.bxslider.css">

    <!-- Owl Carousel CSS Style -->
    <link rel="stylesheet" href="assets/css/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="assets/css/owl-carousel/owl.transitions.css">

    <!-- Magnific-Popup CSS Style -->
    <link rel="stylesheet" href="assets/css/magnific-popup/magnific-popup.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('page-css')

</head>
<body>

<!-- Preload the Whole Page -->
<div id="preloader">
    <div id="loading-animation">&nbsp;</div>
</div>

<!-- Navbar -->
<header class="header">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><h2>Logo</h2></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navigation-nav">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a class="section-scroll" href="#wrapper">Home</a></li>
                    <li><a href="#landing-offer">About</a></li>
                    <li><a href="#features-section">Services</a></li>
                    <li><a href="#team-section">Team</a></li>
                    <li><a href="#screenshots-section">Works</a></li>
                    <li><a href="#prices-section">Prices</a></li>
                    <li><a href="#subscribe-section">Blog</a></li>
                    <li><a href="#contact-section">Contact</a></li>
                    <li><a href="#">LogIn</a></li>
                    <li><a href="#">Register</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</header>



@yield('content')





<!-- Back-to-top
================================================== -->
<div class="back-to-top">
    <i class="fa fa-angle-up fa-3x"></i>
</div> <!-- end back-to-top -->

<!-- JS libraries and scripts -->
<script src="assets/js/jquery-1.11.3.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>
<script src="assets/js/jquery.bxslider.min.js"></script>
<script src="assets/js/jquery.owl.carousel.min.js"></script>
<script src="assets/js/jquery.countTo.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<script src="assets/js/jquery.imagesloaded.min.js"></script>
<script src="assets/js/jquery.isotope.js"></script>
<script src="assets/js/jquery.placeholder.js"></script>
<script src="assets/js/jquery.smoothscroll.js"></script>
<script src="assets/js/jquery.stellar.min.js"></script>
<script src="assets/js/jquery.waypoints.js"></script>
<script src="assets/js/jquery.fitvids.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/jquery.countdown.js"></script>
<script src="assets/js/jquery.navbar-scroll.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="assets/js/jquery.gmaps.js"></script>
<script src="assets/js/main.js"></script>

@yield('page-js')

</body>
</html>
