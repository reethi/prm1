<!DOCTYPE html>
<html>
<!-- Head -->
<head>
    <meta charset="utf-8" />
    <title>Stanford Medicine - Admin</title>

    <!--link rel="shortcut icon" href="<?php echo base_url();?>assets/beyondadmin/img/stanford_login_logo.png" type="image/x-icon"-->

    <!--Basic Styles-->
    <link href="<?php echo base_url();?>assets/beyondadmin/css/bootstrap.min.css" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/beyondadmin/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/beyondadmin/css/weather-icons.min.css" rel="stylesheet" />

    <!--Fonts-->
    <link href="<?php echo base_url();?>assets/beyondadmin/css/fonts.googleapi.css"
          rel="stylesheet" type="text/css">

    <!--Beyond styles-->
    <link href="<?php echo base_url();?>assets/beyondadmin/css/beyond.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/custom/css/beyondadmin.custom.css" rel="stylesheet" />
    <!--link href="<?php echo base_url();?>assets/custom/css/beyondadmin.custom1.css" rel="stylesheet" /-->
    <link href="<?php echo base_url();?>assets/beyondadmin/css/demo.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/beyondadmin/css/typicons.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/beyondadmin/css/animate.min.css" rel="stylesheet" />
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/beyondadmin/css/dataTables.bootstrap.css" rel="stylesheet" />
    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="<?php echo base_url();?>assets/beyondadmin/js/skins.min.js"></script>
    <script src="<?php echo base_url();?>assets/beyondadmin/js/jquery-2.0.3.min.js"></script>
    <script src="<?php echo base_url();?>assets/beyondadmin/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/beyondadmin/js/slimscroll/jquery.slimscroll.min.js"></script>
    <!--Beyond Scripts-->
    <script src="<?php echo base_url();?>assets/beyondadmin/js/beyond.min.js"></script>
    <script src="<?php echo base_url();?>assets/beyondadmin/js/datatable/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/beyondadmin/js/datatable/ZeroClipboard.js"></script>
    <script src="<?php echo base_url();?>assets/beyondadmin/js/datatable/dataTables.tableTools.min.js"></script>
    <script src="<?php echo base_url();?>assets/beyondadmin/js/datatable/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/beyondadmin/js/datatable/datatables-init.js"></script>
    <script src="<?php echo base_url();?>assets/custom/js/beyondadmin.custom.js"></script>
    
</head>
<!-- /Head -->
<!-- Body -->
<body>
    <!-- Loading Container -->
    <div class="loading-container">
       <div class="loader"></div>
    </div>
    <!--  /Loading Container -->
    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="navbar-container">
                <!-- Navbar Barnd -->
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                        <img src="<?php echo base_url(); ?>/assets/images/stanford_header_logo.png" class="logoclass">
                    </a>
                </div>
                <div class="navbar-header pull-right">
                    <div class="navbar-account">
                        <ul class="account-area">
                            <li>
                                <div class="login-area">
                                    <div class="avatar">
                                        <img src="<?php echo base_url(); ?>assets/images/icon_profile.png" />
                                    </div>
                                    <section>
                                        <h2><span class="profile"><span>Dustin Yoder</span></span></h2>
                                    </section>
                                </div>
                            </li>
                            <li>
                                <a class=" dropdown-toggle" data-toggle="dropdown" title="Help" href="#">
                                    <i class="icon glyphicon glyphicon-cog"></i>
                                </a>
                                <!--Notification Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                    <li class="dropdown-footer">
                                        <a href="<?php echo base_url();?>index.php/accounts/signout">
                                            Sign out
                                        </a>
                                    </li>
                                </ul>
                                <!--/Notification Dropdown-->
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /Account Area and Settings -->
            </div>
        </div>
    </div>
    <!-- /Navbar -->
    <!-- Main Container -->
    <div class="main-container container-fluid">

        <!-- Page Container -->
        <div class="page-container">
            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input type="text" class="searchinput" />
                    <i class="searchicon fa fa-search"></i>
                </div>
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                    <li class="<?= ($action == 'dashboard') ? 'active' : '' ?>">
                        <a href="<?php echo base_url(); ?>index.php/participant/landing/index">
                            <i class="menu-icon glyphicon glyphicon-star"></i>
                            <span class="menu-text"> <span style="font-weight:600;">Dashboard</span> </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="page-content">
                <?php echo $content;?>
            </div>
            <!-- /Page Content -->
        </div>
        <!-- /Page Container -->
        <!-- Main Container -->

    </div>

    
</body>
<!--  /Body -->
</html>