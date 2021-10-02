<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Evis Technology">
        <title>Lights</title>
        <link href="assets/css/font-awesome.css" rel="stylesheet">
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Slick Slider -->
        <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/>
        <!-- Animate CSS -->
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>  
        <!-- Theme Color -->
        <link id="switcher" href="assets/css/theme-color/default.css" rel="stylesheet">
        <!-- Main Style -->
        <link href="style.css" rel="stylesheet">
        <!-- Fonts -->
        <!-- Open Sans For Body Font -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <!-- Raleway For Title -->
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <!-- Pacifico For 404 page   -->
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!-- BEGAIN PRELOADER -->
        <div id="preloader">
            <div class="loader">&nbsp;</div>
        </div>
        <!-- END PRELOADER --> 

        <!-- SCROLL TOP BUTTON -->
        <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
        <!-- END SCROLL TOP BUTTON -->

        <!-- Start Header Section -->  
        <header id="header">
            <div class="header-inner">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" style="height: 657px;">
                        <div class="item active">
                            <img src="asset/public/slider/1.jpg"  style="width:100%;">
                        </div>
                        <div class="item">
                            <img src="asset/public/slider/2.jpg" style="width:100%;">
                        </div>
                        <div class="item">
                            <img src="asset/public/slider/3.jpg" style="width:100%;">
                        </div>
                        <div class="item">
                            <img src="asset/public/slider/4.jpg" style="width:100%;">
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </header>
        <!-- End Header Section -->

        <!-- Start Menu Section -->
        <section id="menu-area">
            <nav class="navbar navbar-default main-navbar" role="navigation">  
                <div class="container">
                    <div class="navbar-header">
                        <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- LOGO -->     
                        <!-- Image Logo  -->
                        <a class="navbar-brand logo" href="index.php">
                            <img src="asset/public/logo.png" class="img-responsive">
                        </a> 
                        <!-- Text Logo  -->
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#about">About</a></li>                     
                            <li><a href="#product">Products</a></li>
                            <li><a href="package.php">Internet Packages</a></li>
                            <li><a href="#service">Service</a></li>  
                            <li><a href="#contact">Contact</a></li>
                            <?php
                            if (!isset($_SESSION["client_name"])) {
                                ?>
                                <li><a href="#clientModal" data-toggle="modal">Login</a></li>
                                <?php
                            } else {
                                ?>
                                <li><a href="client_area.php">Client Area</a></li>
                                <?php
                            }
                            ?>
                        </ul>                            
                    </div>
                </div>          
            </nav> 
        </section>
        <!-- End Menu Section -->

        <!-- Start About Section -->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Start Welcome Area -->
                        <div class="about-area">
                            <div class="title-area">
                                <h2 class="tittle">Welcome to <span>Lights</span></h2>
                                <span class="tittle-line"></span>
                                <p>
                                    Lights Communication Limited was founded in June 2015, by three young entrepreneurs, as an IT firm. The business started off its endeavour by the establishment of Lights Internet, Habiganj after qualifying for the Zonal ISP License. The License covers the North-eastern part of Bangladesh and includes more than 16 districts.
                                </p>
                                <div style="margin-top: 14px; width: 100%; margin-left: 40%;">
                                    <a href="about.php" class="button button-default" data-text="KNOW MORE"><span>KNOW MORE</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Welcome Area -->
                    </div>
                </div>
            </div>
        </section> 
        <!-- End About Section -->

        <!-- Start Call To Action -->
        <section id="call-to-action">
            <img src="asset/public/img/evis-technology-products.jpg" alt="img">
            <div class="call-to-overlay">
                <div class="container">
                    <div class="call-to-content wow fadeInUp">
                        <br/><br/>
                        <h2>Our Products</h2>
                    </div>
                </div>
            </div> 
        </section>
        <!-- End Call To Action -->

        <!-- Start Product Section -->
        <section id="product">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-area">
                            <!-- Product Content -->
                            <div class="product-content">
                                <ul class="product-table">
                                    <div class="row">
                                        <li class="col-md-3 col-sm-6">
                                            <div class="box single-product wow slideInUp">
                                                <a href="demo/pos.php" target="_blank" data-toggle="tooltip" title="See Demo">
                                                    <img src="asset/public/img/product-image/pos/logo.png" class="img-responsive" />
                                                    <p><br/>This is an POS software which is easy-to-use and specially designed for use in rural areas. This software can help the user manage and maintain sales efficiently.<br/><br/><br/><br/><br/><br/></p>
                                                </a>
                                                <a href="demo/pos.php" target="_blank" data-toggle="tooltip" title="See Demo">
                                                    <div class="overbox">
                                                        <div class="title overtext">See Demo</div>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="col-md-3 col-sm-6">
                                            <div class="box single-product wow slideInUp">
                                                <a href="demo/student_management_system.php" target="_blank" data-toggle="tooltip" title="See Demo">
                                                    <img src="asset/public/img/product-image/student-management-system/logo.png" class="img-responsive" />
                                                    <p><br/>Student Management has been made easier with Lights Student Management Software, SIMS. The software includes manage students, their grades, classrooms, etc.<br/><br/><br/><br/></p>
                                                </a>
                                                <a href="demo/student_management_system.php" target="_blank" data-toggle="tooltip" title="See Demo">
                                                    <div class="overbox">
                                                        <div class="title overtext">See Demo</div>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="col-md-3 col-sm-6">
                                            <div class="box single-product wow slideInUp">
                                                <a href="demo/hospital_management_system.php" target="_blank" data-toggle="tooltip" title="See Demo">
                                                    <img src="asset/public/img/product-image/hospital-management-system/logo.png" class="img-responsive" style="height: 202px;"/>
                                                    <p><br/>Lights HMS is the next step in digitalization of health care facilities in the sub-urban regions of Bangladesh.<br/><br/><br/><br/></p>
                                                </a>
                                                <a href="demo/hospital_management_system.php" target="_blank" data-toggle="tooltip" title="See Demo">
                                                    <div class="overbox">
                                                        <div class="title overtext">See Demo</div>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="col-md-3 col-sm-6">
                                            <div class="box single-product wow slideInUp">
                                                <a href="demo/erp_software.php" target="_blank" data-toggle="tooltip" title="See Demo">
                                                    <img src="asset/public/img/product-image/erp-software/logo.jpg" class="img-responsive" style="height: 202px;"/>
                                                    <p><br/>Lights ERP broke the traditional ERP system and integrated it with social API's. Marketing section includes a Digital Marketing Module. Lights ERP is a Modern ERP System.</p>
                                                </a>
                                                <a href="demo/erp_software.php" target="_blank" data-toggle="tooltip" title="See Demo">
                                                    <div class="overbox">
                                                        <div class="title overtext">See Demo</div>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="row">
                                        <li class="col-md-3 col-sm-6">
                                            <div class="box single-product wow slideInUp">
                                                <a href="demo/brickfield_management_software.php" target="_blank" data-toggle="tooltip" title="See Demo">
                                                    <span class="fa fa-cubes product-icon"></span>
                                                    <h4 class="product-title">Brickfield Management Software</h4>
                                                    <p>Brickfield Management Software, BMS, is an innovative new software designed for efficient monitoring of sales and management in brickfields.</p>
                                                </a>
                                                <a href="demo/brickfield_management_software.php" target="_blank" data-toggle="tooltip" title="See Demo">
                                                    <div class="overbox">
                                                        <div class="title overtext">See Demo</div>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="col-md-3 col-sm-6">
                                            <div class="box single-product wow slideInUp">
                                                <a href="demo/service_order_management_system.php" target="_blank" data-toggle="tooltip" title="See Demo">
                                                    <span class="fa fa-bar-chart-o product-icon"></span>
                                                    <h4 class="product-title">Service Order Management System</h4>
                                                    <p>Every customer has different delivery date, and our Service Order Management System can organize these orders effectively as per the requirements of the user.</p>
                                                </a>
                                                <a href="demo/service_order_management_system.php" target="_blank" data-toggle="tooltip" title="See Demo">
                                                    <div class="overbox">
                                                        <div class="title overtext">See Demo</div>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="col-md-3 col-sm-6">
                                            <div class="box single-product wow slideInUp">
                                                <a href="demo/isp_management_system.php" target="_blank" data-toggle="tooltip" title="See Demo">
                                                    <span class="fa fa-cloud-download product-icon"></span>
                                                    <h4 class="product-title">ISP Management Software</h4>
                                                    <p>The complex management issues of an Internet Service Providing company can be greatly simplified via the use of our ISP Management Software.<br/><br/></p>
                                                </a>
                                                <a href="demo/isp_management_system.php.php" target="_blank" data-toggle="tooltip" title="See Demo">
                                                    <div class="overbox">
                                                        <div class="title overtext">See Demo</div>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Section -->

    <!-- Start Service Section -->
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="service" style="margin-top: 7%;">
                <div class="service-area">
                    <div class="title-area">
                        <h2 class="tittle">Service We Offer</h2>
                        <span class="tittle-line"></span>
                        <p>Discover Our Premium Service</p>
                    </div>
                    <div class="welcome-content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="single-wc-content wow fadeInUp">
                                    <span class="fa fa-television wc-icon"></span>
                                    <h4 class="wc-tittle text-center">Software Solutions</h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-wc-content wow fadeInUp">
                                    <span class="fa fa-plug wc-icon"></span>
                                    <h4 class="wc-tittle text-center">Internet Solutions</h4>
                                    <p><a href="package.php" class="btn btn-success" style="margin-left: 33%;">View Package</a></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-wc-content wow fadeInUp">
                                    <span class="fa fa-empire wc-icon"></span>
                                    <h4 class="wc-tittle text-center">Web-Development</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Section -->

    <!-- Start Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <div class="contact-left wow fadeInLeft">
                        <h2>Contact With Us</h2>
                        <address class="single-address">
                            <!--                            <h4>House: 532, Road: 07, Mirpur &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DOHS, Dhaka 1216.</h4>
                                                        <h4>Phone: 028080963.</h4>-->
                            <h4>Mobile:<br> +8801771588287</h4>
                            <h4>Customer Care:<br> +8801779454804</h4>
                            <h4>E-Mail:<br> lights.communiaction@gmail.com</h4>
                        </address>
                    </div>
                </div>
                <div class="col-md-7 col-sm-6 col-xs-12">
                    <div class="contact-right wow fadeInRight">
                        <h2>Send a message</h2>

                        <form method="post" class="contact-form">
                            <div class="form-group">                
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">                
                                <input type="email" name="email" class="form-control" placeholder="Enter Email">
                            </div>              
                            <div class="form-group">
                                <textarea name="message" class="form-control"></textarea>
                            </div>
                            <button type="submit" data-text="SUBMIT" class="button button-default pull-right"><span>SUBMIT</span></button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

    <!-- Start Footer -->    
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-top-area">             
                            <a class="footer-logo" href="#">
                                <img src="" class="img-responsive">
                            </a>              
                            <div class="footer-social">
                                <a class="facebook" href=""><span class="fa fa-facebook"></span></a>
                                <a class="twitter" href="#"><span class="fa fa-twitter"></span></a>
                                <a class="google-plus" href="#"><span class="fa fa-google-plus"></span></a>
                                <a class="youtube" href="#"><span class="fa fa-youtube"></span></a>
                                <a class="linkedin" href="#"><span class="fa fa-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; Lights Communication. All Right Revised</p>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Start Client Area Modal -->
    <div id="clientModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="clientModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h4 class="modal-title">Client Area</h4>
                </div>
                <div class="modal-body">
                    <div class="containter">
                        <div class="row">
                            <form action="function/login.php" method="POST">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" name="client_email" placeholder="Email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="client_password" placeholder="Password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <a href="" class="forgot-password">Forgot Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <button type="submit" name="login" value="submit" class="btn btn-danger"/>Login</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr class="featurette-divider hidden-lg">
                </div>
            </div>
        </div>
    </div>
    <!-- End Client Area Modal -->

    <!-- Initialize jQuery Library --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include All Compiled Plugins (Below) -->
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- Slick Slider -->
    <script type="text/javascript" src="assets/js/slick.js"></script>
    <!-- Counter -->
    <script type="text/javascript" src="assets/js/waypoints.js"></script>
    <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
    <!-- Wow Animation -->
    <script type="text/javascript" src="assets/js/wow.js"></script> 
    <!-- Custom JS -->
    <script type="text/javascript" src="assets/js/custom.js"></script>
    <script>
        var $item = $('.carousel .item');
        var $wHeight = $(window).height();
        $item.eq(0).addClass('active');
        $item.height($wHeight);
        $item.addClass('full-screen');

        $('.carousel img').each(function () {
            var $src = $(this).attr('src');
            var $color = $(this).attr('data-color');
            $(this).parent().css({
                'background-image': 'url(' + $src + ')',
                'background-color': $color
            });
            $(this).remove();
        });

        $(window).on('resize', function () {
            $wHeight = $(window).height();
            $item.height($wHeight);
        });

        $('.carousel').carousel({
            interval: 6000,
            pause: "false"
        });
    </script>
</body>
</html>