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
                            <li><a href="index.php#about">About</a></li>                     
                            <li><a href="index.php#product">Products</a></li>
                            <li class="active"><a href="package.php">Internet Packages</a></li>
                            <li><a href="index.php#service">Service</a></li>  
                            <li><a href="index.php#contact">Contact</a></li>
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

        <!-- Start About Page -->
        <div class="row">
            <div class="col-md-12">
                <div class="about-area">
                    <div class="row">
                        <div class="col-md-5 col-sm-6 col-xs-12">
                            <div class="about-right wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="title-area">
                                    <h2 class="tittle"><span>Corporate Internet</span></h2>
                                    <span class="tittle-line"></span>
                                    <p>Lights Communication Limited provides special offers and packages for corporate customers. Our corporate services include corporate software solutions and broadband internet connectivity. For further details, please contact us. Contact details can be found in the "Contact Us" tab.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="about-right wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="title-area">
                                    <h2 class="tittle">Tariff Chart</h2>
                                    <span class="tittle-line"></span>
                                    <table class="table table-bordered btn-success" style="text-align: center; font-weight: bolder;">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">Package Plan</th>
                                                <th style="text-align: center;">Price (BDT)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>512 Kbps</td>
                                                <td>599</td>
                                            </tr>
                                            <tr>
                                                <td>1 Mbps</td>
                                                <td>999</td>
                                            </tr>
                                            <tr>
                                                <td>2 Mbps</td>
                                                <td>1599</td>
                                            </tr>
                                            <tr>
                                                <td>3 Mbps</td>
                                                <td>2199</td>
                                            </tr>
                                            <tr>
                                                <td>5 Mbps</td>
                                                <td>2999</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>
                                        These are the standard prices of broadband internet packages. Offer may change as per area requirements and accessibility of the region. Details can be found by contacting local branch office or Lights Communication Limited’s head office.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Page -->

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

        <!-- Initialize jQuery Library --> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- Bootstrap -->
        <script src="assets/js/bootstrap.js"></script>
    </body>
</html>