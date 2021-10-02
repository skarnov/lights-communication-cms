<?php
    session_start();

    $client_id = $_SESSION["client_id"];

    if ($client_id == NULL) {
        header("location: index.php");
    }
    require 'function/db_connect.php';
    
    $project = "SELECT * FROM tbl_project WHERE client_id='$client_id'";
    $result_project = mysqli_query($conn, $project);
    
    $project_id = filter_input(INPUT_GET, 'id');
    $sql = "SELECT * FROM tbl_file WHERE project_id='$project_id'";
    $result = mysqli_query($conn, $sql);

    $client = "SELECT * FROM tbl_project WHERE client_id='$client_id' AND project_id='$project_id'";

    $result_client = mysqli_query($conn, $client);
    $row_client = mysqli_fetch_assoc($result_client);
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

        <!-- Start Client Page -->
        <section id="client">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container-fluid main-container">
                            <div class="col-md-3 sidebar">
                                <nav>
                                    <ul class="nav">
                                        <li><a href="client_area.php" class="btn btn-warning" style="color: black;">Client Area</a></li>
                                        <li><a class="active" href="#" title="View Your Projects" id="btn-1" data-toggle="collapse" data-target="#submenu1" aria-expanded="false" class="btn btn-success" style="color: black;">Project Management</a>
                                            <ul class="nav collapse" id="submenu1" role="menu" aria-labelledby="btn-1">
                                                <?php
                                                while ($row = mysqli_fetch_assoc($result_project)) {
                                                    ?>   
                                                    <li><a href="project_management.php?id=<?php echo $row['project_id'] ?>"><?php echo $row['project_name'] ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                        <li><a href="function/logout.php" class="btn btn-danger">Logout</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-md-9 content">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Running Projects
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <form enctype="multipart/form-data" action="" method="POST">
                                                    <input type="file" class="btn btn-success" name="file"><br />
                                                    <input type="submit" name="file" class="btn btn-warning" value="Upload">
                                                    <?php
                                                    if (isset($_POST['file'])) {
                                                        $file_name = $_FILES['file']['name'];
                                                        $file_tmp = $_FILES['file']['tmp_name'];
                                                        move_uploaded_file($file_tmp, "media_library/project_file/" . $file_name);
                                                        $file = "INSERT INTO tbl_file (project_id,file) VALUES ('$project_id', 'media_library/project_file/$file_name')";
                                                        mysqli_query($conn, $file);
                                                    }
                                                    ?>
                                                </form>
                                            </div>
                                            <div class="col-md-6">
                                                <form action="" method="POST">
                                                    <div class="form-group">
                                                        <label for="comment">Instruction</label>
                                                        <input type="hidden" name="project_id" value="<?php echo $row_client['project_id'] ?>">
                                                        <textarea name="instruction_box" class="form-control" rows="5"><?php echo $row_client['instruction_box'] ?></textarea>
                                                    </div>
                                                    <input type="submit" name="update" class="btn btn-danger" value="Update">
                                                    <?php
                                                    if (isset($_POST['update'])) {
                                                        $project_id = filter_input(INPUT_POST, 'project_id');
                                                        $instruction_box = filter_input(INPUT_POST, 'instruction_box');
                                                        $sql = "UPDATE tbl_project SET instruction_box='$instruction_box' WHERE project_id='$project_id' ";
                                                        mysqli_query($conn, $sql);
                                                    }
                                                    ?>
                                                </form>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="text-center">
                                            <?php
                                            $i = 1;
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                ?>    
                                                <a href="<?php echo $row['file'] ?>" class="btn btn-info">File <?php echo $i; ?></a>
                                                <?php
                                                $i++;
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Client Page -->

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