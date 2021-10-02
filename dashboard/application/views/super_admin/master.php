<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title; ?></title>
        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>asset/css/bootstrap.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="<?php echo base_url(); ?>asset/css/custom.css" rel="stylesheet">
        <script>
            function check_delete()
            {
                var chk = confirm('Are You Want To Delete This');
                if (chk)
                {
                    return true;
                } else
                {
                    return false;
                }
            }
        </script>
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="<?php echo base_url(); ?>" class="site_title">
                                Lights <span>Dashboard</span>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                        <br />
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <ul class="nav side-menu">
                                    <li>
                                        <a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Home</a>
                                    </li>
                                    <li>
                                        <a><i class="fa fa-male"></i> Admin Manager <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?php echo base_url(); ?>super_admin/add_admin">Add New Admin</a></li>
                                            <li><a href="<?php echo base_url(); ?>super_admin/manage_admin">Manage Admin</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a><i class="fa fa-briefcase"></i> Business Manager <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?php echo base_url(); ?>business/add_business">Add New Business</a></li>
                                            <li><a href="<?php echo base_url(); ?>business/manage_business">Manage Business</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>business/manage_cashbook"><i class="fa fa-money"></i> Cashbook Manager</a>
                                    </li>
                                    <li>
                                        <a><i class="fa fa-user"></i> Client Manager <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?php echo base_url(); ?>client/add_client">Add New Client</a></li>
                                            <li><a href="<?php echo base_url(); ?>client/manage_client">Manage Clients</a></li>
                                            <li><a href="<?php echo base_url(); ?>client/add_survey">Add New Survey</a></li>
                                            <li><a href="<?php echo base_url(); ?>client/manage_survey">Manage Surveys</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>client/manage_file"><i class="fa fa-file"></i> File Manager</a>
                                    </li>
                                    <li>
                                        <a><i class="fa fa-cart-plus"></i> Sale Manager <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?php echo base_url(); ?>business/add_sale">Add New Sale</a></li>
                                            <li><a href="<?php echo base_url(); ?>business/manage_sale">Manage Sales</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a><i class="fa fa-laptop"></i> Project Manager <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?php echo base_url(); ?>client/add_project">Add New Project</a></li>
                                            <li><a href="<?php echo base_url(); ?>client/manage_project">Manage Projects</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href=""><i class="fa fa-adjust"></i> About</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Top Navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav class="" role="navigation">
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <?php echo $this->session->userdata('admin_name'); ?>
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="<?php echo base_url(); ?>super_admin/edit_admin/<?php echo $this->session->userdata('admin_id'); ?>"> Profile</a></li>
                                        <li><a href="<?php echo base_url(); ?>super_admin/logout"><i class="fa fa-sign-out pull-right"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Top Navigation -->
                <?php echo $dashboard; ?>
                <!-- Footer Content -->
                <footer>
                    <div class="clearfix"></div>
                </footer>
                <!-- Footer Content -->
            </div>
        </div>
        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>asset/js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
        <!-- Custom JS -->
        <script src="<?php echo base_url(); ?>asset/js/custom.min.js"></script>
        <!-- Validator -->
        <script src="<?php echo base_url(); ?>asset/js/validator.min.js"></script>
        <script>
            // Start Validator
            validator.message.date = 'not a real date';
            $('form')
                    .on('blur', 'input[required], input.optional, select.required', validator.checkField)
                    .on('change', 'select.required', validator.checkField)
                    .on('keypress', 'input[required][pattern]', validator.keypress);
            $('.multi.required').on('keyup blur', 'input', function () {
                validator.checkField.apply($(this).siblings().last()[0]);
            });
            $('form').submit(function (e) {
                e.preventDefault();
                var submit = true;
                if (!validator.checkAll($(this))) {
                    submit = false;
                }
                if (submit)
                    this.submit();
                return false;
            });
        </script>
    </body>
</html>