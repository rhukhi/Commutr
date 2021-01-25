
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/vector-map/jqvmap.css">
    <link rel="stylesheet" href="assets/vendor/jvectormap/jquery-jvectormap-2.0.2.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>

    <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>public/js/default.js"></script>

        <!--link for javascript validation-->
        <script type="text/javascript" src="<?php echo URL; ?>public/js/form_validation/jquery.form-validator.min.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>public/js/form_validation/customValidation.js"></script>


<!--<script type="text/javascript" src="<?php echo URL; ?>public/js/booker/seat.js"></script>-->

        <!--link for javascript data table-->
        <script type="text/javascript" src="<?php echo URL; ?>public/js/table/jquery.dataTables.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>public/js/table/customTables.js"></script>

        <!--link for javascript date&time-->
        <script type="text/javascript" src="<?php echo URL; ?>public/js/date&time/jQuery.ptTimeSelect.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>public/js/date&time/jquery-ui-1.8.22.custom.min.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>public/js/date&time/jquery.ui.timepicker.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>public/js/date&time/customDateTime.js"></script>

        <!--link for javascript Parse-->
        <script type="text/javascript" src="<?php echo URL; ?>public/js/report.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>public/js/map/parse-1.2.18.min.js"></script>
        
        
        <!--link for stylesheet for defalt-->
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/report.css" />

        <!--link for stylesheet for booker-->
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/booker/seat.css" />

        <!--link for stylesheet for data table-->
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/table/demo_page.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/table/demo_table.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/table/demo_table_jui.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/table/jquery-ui-1.8.4.custom.css" />

        <!--link for stylesheet for date&time-->
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/date&time/jquery.ptTimeSelect.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/date&time/jquery.ui.timepicker.css" />

        <!--<link rel="stylesheet" href="<?php echo URL; ?>public/css/booker/ticket.css" />-->


        <?php
        if (isset($this->js_1)) {
            foreach ($this->js_1 as $js) {
                echo '<script type="text/javascript" src="' . URL . $js . '"></script>';
            }
        }
        if (isset($this->js_2)) {
            foreach ($this->js_2 as $js) {
                echo '<script type="text/javascript" src="' . URL . $js . '"></script>';
            }
        }
        if (isset($this->js_3)) {
            foreach ($this->js_3 as $js) {
                echo '<script type="text/javascript" src="' . URL . $js . '"></script>';
            }
        }
        ?>  
</head>

<body>
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">COMMUTR</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div id="mainmenu">
                <header>
                    <ul>
                        <?php if (Session::get('privilege') != 'Admin' && Session::get('privilege') != 'Operator' && Session::get('privilege') != 'Conduct') : ?>
                            <li><a href="<?php echo URL; ?>index">Commutr Home</a></li>
                        <?php endif; ?>
                        <?php if (Session::get('privilege') == 'Admin') : ?>
                            <li><a href="<?php echo URL; ?>systemUser">Create Login</a></li>
                            <li><a href="<?php echo URL; ?>report">Report</a></li>
                        <?php endif; ?>
                        <?php if (Session::get('privilege') == 'Operator') : ?>
                            <li><a href="<?php echo URL; ?>systemUser">System User</a></li>
                            <li><a href="<?php echo URL; ?>bus">Bus</a></li>
                            <li><a href="<?php echo URL; ?>journey">Journey</a></li>
                            <li><a href="<?php echo URL; ?>entryPoint">Entry Point</a></li>
                            <li><a href="<?php echo URL; ?>conductor">Conductor</a></li>
                        <?php endif; ?>
                        <?php if (Session::get('privilege') == 'Conduct') : ?>
                            <li><a href="<?php echo URL; ?>report">Report</a></li>
                        <?php endif; ?>
                        <?php if (Session::get('loggedIn') == true) : ?>
                            <li><a href="<?php echo URL; ?>systemUser/changePassword">Change Password</a></li>
                            <li><a href="<?php echo URL; ?>login/logout">Logout(<?php echo Session::get('userName'); ?>)</a></li>
                        <?php else : ?>
                            <li><a href="<?php echo URL; ?>login">Login</a></li>
                            <!--<li><a href="<?php // echo URL;   
                                                ?>map">Map</a></li>-->
                            <li><a href="<?php echo URL; ?>map/map2">Map</a></li>
                        <?php endif; ?>
                    </ul>
                </header>
            </div>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham</span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/github.png" alt="" > <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/dribbble.png" alt="" > <span>Dribbble</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/dropbox.png" alt="" > <span>Dropbox</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/slack.png" alt="" > <span>Slack</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="conntection-footer"><a href="#">More</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->




        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">

             <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 " id="content">
                 
                
            </div>
        </div>
        


    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 js-->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstrap bundle js-->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js-->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- chartjs js-->
    <script src="assets/vendor/charts/charts-bundle/Chart.bundle.js"></script>
    <script src="assets/vendor/charts/charts-bundle/chartjs.js"></script>
   
    <!-- main js-->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- jvactormap js-->
    <script src="assets/vendor/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/vendor/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- sparkline js-->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <script src="assets/vendor/charts/sparkline/spark-js.js"></script>
     <!-- dashboard sales js-->
    <script src="assets/libs/js/dashboard-sales.js"></script>

</body>
 