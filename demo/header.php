<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Lights</title>
        <!-- Font Awesome -->
        <link href="../assets/css/font-awesome.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="../assets/css/bootstrap.css" rel="stylesheet">
        <!-- Slick slider -->
        <link rel="stylesheet" type="text/css" href="../assets/css/slick.css"/> 
        <!-- Animate css -->
        <link rel="stylesheet" type="text/css" href="../assets/css/animate.css"/>  
        <!-- Theme color -->
        <link id="switcher" href="../assets/css/theme-color/default.css" rel="stylesheet">
        <!-- Main Style -->
        <link href="../style.css" rel="stylesheet">
        <!-- Fonts -->
        <!-- Open Sans for body font -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <!-- Raleway for Title -->
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <!-- Pacifico for 404 page   -->
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
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="../index.php#about">About</a></li>                     
                            <li class="active"><a href="../index.php#product">Products</a></li>
                            <li><a href="../package.php">Internet Packages</a></li>  
                            <li><a href="../index.php#service">Service</a></li>  
                            <li><a href="../index.php#contact">Contact</a></li>
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