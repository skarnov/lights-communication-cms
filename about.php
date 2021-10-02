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
                            <li><a href="index.php#portfolio">Portfolios</a></li>  
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
                            <div class="about-left wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                                <img src="assets/images/about-img.jpg" alt="img">
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                            <div class="about-right wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="title-area">
                                    <h2 class="tittle">About <span>Lights Communication</span> Limited</h2>
                                    <span class="tittle-line"></span>
                                    <p>Lights Communication Limited was founded in June 2015, by three young entrepreneurs, as an IT firm. The business started off its endeavour by the establishment of Lights Internet, Habiganj after qualifying for the Zonal ISP License. The License covers the North-eastern part of Bangladesh and includes more than 16 districts. Lights Communication Limited aims to implement development programs through Micro-Digitalization Project, in the rural areas among the operational districts through IT-related training sessions and other computing skill development programs while providing internet service in the more developed towns where internet is a necessity, not an availability and also provide various software solutions and develop customized software upon order.</p> 

                                    <p>Lights Communication Limited comprises of two individual concerns:</p>
                                    <ol>
                                        <li>Lights Software Solutions</li>
                                        <li>Lights ISP</li>
                                    </ol>
                                   
                                    <p>Lights Software Solutions is a start-up who aspires to create the finest software that boost the productivity and efficiency of its consumers. The software are targeted to district town audiences and are designed specifically for their ease-of-use with both English and Bangla transcripts. Existing software development was lead by an expert software and website developer who has been passionately serving the industry for 6 years.</p>
                                    
                                    <p>Lights ISP aims to provide high-quality internet service to the district towns along with various other Information Technology related services like ISP Consultancy, Web Development, IP Camera Service and other IT-related Services. The company aims to promote the importance of computing skills development among the public as it firmly believes in the growth of global digitalisation, and how computing skills will become an absolute necessity.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 col-sm-6 col-xs-12">
                            <div class="about-right wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="title-area">
                                    <h2 class="tittle">We <span>Believe</span></h2>
                                    <span class="tittle-line"></span>
                                    <ul>
                                        <li type="I">In a foundation based on character and integrity</li>
                                        <li type="I">Commitment to our clients</li>
                                        <li type="I">Digitalisation through software and Internet technology</li>
                                        <li type="I">Improved efficiency of services</li>
                                        <li type="I">Rural IT development</li>
                                        <li type="I">Personal and professional growth</li><br/><br/>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                            <div class="about-right wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="title-area">
                                    <h2 class="tittle">Our <span>Mission</span></h2>
                                    <span class="tittle-line"></span>
                                    <p>Become a leader and the most successfully growing company in the Information Technology and Software industry.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6 col-xs-12">
                            <div class="about-left wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                                <img src="assets/images/about-img.jpg" alt="img">
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6 col-xs-12">
                            <div class="about-right wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="title-area">
                                    <h2 class="tittle">Our <span>Vision</span></h2>
                                    <span class="tittle-line"></span>
                                    <p>Become the most efficient company in the industry and revolutionise the Information Technology sector with creative ideas, skills and proficient agility.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-6 col-xs-12" style="margin-top: 50px;">
                            <div class="about-right wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="title-area">
                                    <h2 class="tittle">Why Choose <span>Lights Communication</span>  Limited</h2>
                                    <span class="tittle-line"></span>
                                    <ul>
                                        <li type="circle">We provide high quality Internet service and flexible software solutions</li>
                                        <li type="circle">We offer services at affordable rates</li>
                                        <li type="circle">We believe in success through client satisfaction and development</li>
                                        <li type="circle">We believe in ―Just In Time (JIT) </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-11">
                            <div class="about-right wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="title-area">
                                    <h2 class="tittle"><span>Software</span></h2>
                                    <span class="tittle-line"></span>
                                    <p>
                                        Lights Software Solution is an extension to the ISP business and is booming with creative ideas and overflowing with some extraordinary talent who are forging a breakthrough with its existing set of software and ability to produce simplistic, customized software specifically designed for ease-of-use. Lights Software Solution aspires to continue in its path of success through ground-breaking software created for the sole purpose of helping its customers build their envisioned software with interactive design and five-star support service. The company works through creative talent and expertise of established IT personnel employed in the company. Lights Software Solution aims to market in-house software to sub-urban regions of the country to help locals and businesses the rural/sub-urban regions of the country. This activity supports digitalization of sub-urban areas of the country while also favouring a boost in the growth of economic activity in such regions through IT.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-11">
                            <div class="about-right wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="title-area">
                                    <h2 class="tittle"><span>Broadband Internet Service</span></h2>
                                    <span class="tittle-line"></span>
                                    <p>
                                        Lights Communication Limited is licensed to provide internet service in the North-Eastern zone of Bangladesh from BTRC. Lights ISPis providing corporate and consumer internet service in Habiganj district currently. Our aim is to provide internet service at an affordable rate in all the rural areas of the nation gradually. A more short-term goal is to provide high-speed broadband internet service as we expand into the other districts to serve the people better and help in IT development in those areas as a result.
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