<?= \Config\Services::validation()->listErrors() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= (isset($pageTitle)) ?  $pageTitle: 'DILG System'; ?></title>
    <!-- Base url -->
    <base href="<?=base_url()?>public/">
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/dilg.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/dilg.png" class="mr-2"
                        alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/dilg.png" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                <span class="input-group-text" id="search">
                                    <i class="icon-search"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now"
                                aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">

                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <!-- <img src="images/faces/face28.jpg" alt="profile"/> -->
                            <!-- Fetch name -->
                            <?php $session = session(); echo $session->get('name');?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-settings text-primary"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="logout">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                    <li class="nav-item nav-settings d-none d-lg-flex">
                        <a class="nav-link">
                            <i class="icon-ellipsis"></i>
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>

            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="admin/dashboard/">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/memorandum/">
                            <i class="icon-paper menu-icon"></i>
                            <span class="menu-title">Memorandum</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/announcement/">
                            <i class="icon-paper menu-icon"></i>
                            <span class="menu-title">Announcement</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="icon-layout menu-icon"></i>
                            <span class="menu-title">Reports for Submission</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="admin/lgcdd_admin">LGCDD</a></li>
                                <li class="nav-item"> <a class="nav-link" href="admin/lgmed_admin">LGMED</a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- <li class="nav-item">
            <a class="nav-link" href="user/status">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Status of Compliance</span>
            </a>
          </li> -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#reports" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="icon-columns menu-icon"></i>
                            <span class="menu-title">Status of Compliance</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="reports">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" target=”_blank”
                                        href="https://docs.google.com/spreadsheets/d/197Qnlv0iXxTFn0ACRp2EGTuP5f4A0Ko0/edit#gid=189689531">January</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="">Febuary</a></li>
                                <li class="nav-item"> <a class="nav-link" target="_blank"
                                        href="https://docs.google.com/spreadsheets/d/197Qnlv0iXxTFn0ACRp2EGTuP5f4A0Ko0/edit#gid=910401658">March</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="">April</a></li>
                                <li class="nav-item"> <a class="nav-link" href="">May</a></li>
                                <li class="nav-item"> <a class="nav-link" href="">June</a></li>
                                <li class="nav-item"> <a class="nav-link" href="">July</a></li>
                                <li class="nav-item"> <a class="nav-link" href="">August</a></li>
                                <li class="nav-item"> <a class="nav-link" href="">September</a></li>
                                <li class="nav-item"> <a class="nav-link" href="">October</a></li>
                                <li class="nav-item"> <a class="nav-link" href="">November</a></li>
                                <li class="nav-item"> <a class="nav-link" href="">December</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="admin/status/">
                            <i class="icon-paper menu-icon"></i>
                            <span class="menu-title">Status</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="row">
                                <!-- <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome C/MLGOO <?php $session = session(); echo $session->get('name');?></h3>
                  <h6 class="font-weight-normal mb-0">Here is the updated Memorandum! You have <span class="text-primary">3 unread alerts!</span></h6>
                </div> -->
                                <div class="col-12 col-xl-4">
                                    <div class="justify-content-end d-flex">
                                        <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                            <!-- <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                    </button> -->
                                            <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="#">January - March</a>
                      <a class="dropdown-item" href="#">March - June</a>
                      <a class="dropdown-item" href="#">June - August</a>
                      <a class="dropdown-item" href="#">August - November</a>
                    </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card1">
                        <div class="row">
                            <div class="col-md-3 grid-margin stretch-card">
                                <div class="">
                                    <div class="card-people" style="margin-left:5px">
                                        <img src="images/dilg.png" alt="people" style="width: 65px;">
                                        <img src="images/lgrrc.png" alt="people">
                                        <div class="weather-info">
                                            <div class="d-flex">
                                                <div>
                                                    <!-- <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2> -->
                                                </div>
                                                <!-- <div class="ml-2">
                        <h4 class="location font-weight-normal"><b>Memorandum</b></h4>
                        <h6 class="font-weight-normal">Notice!</h6>
                      </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <h3 align="center" style="font-family:verdana;"> </h3> -->
                            </div>
                        </div>
                        <h2 class="h2home">LGMES Cluster 1 </h2><br>
                        <h2 class="h3home"> List of Reports and Links</h2>
                        <img class="monitor-icon" src="images/monitor-icon.png" alt="people">
                    </div>

                    <div class="row">
                        <div class="col-md-4 grid-margin">
                            <div class="cardd d-flex align-items-center">
                                <div class="card-body">
                                    <div class="d-flex flex-row align-items-center">
                                        <!-- <i class="ti-facebook text-facebook icon-md"></i> -->
                                        <div class="sub-text">
                                            <a href="user/ars">Awards and Recognition Section</a>
                                            <!--<a class="">Awards and Recognition Section </a>-->
                                            <!-- <p class="mt-2 text-muted card-text">You main list growing</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-margin">
                            <div class="cardd d-flex align-items-center">
                                <div class="card-body">
                                    <div class="d-flex flex-row align-items-center">
                                        <!-- <i class="ti-youtube text-youtube icon-md"></i> -->
                                        <div class="sub-text">
                                            <a href="user/lgpbas">Local Government Policy and Barangay Affairs Section
                                                (LGPBAS)</a>
                                            <!-- <p class="mt-2 text-muted card-text">You main list growing</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-margin">
                            <div class="cardd d-flex align-items-center">
                                <div class="card-body">
                                    <div class="d-flex flex-row align-items-center">
                                        <!-- <i class="ti-twitter-alt text-twitter icon-md"></i> -->
                                        <div class="sub-text">
                                            <a href="user/poarcs">Peace and Order and Related Concerns Section
                                                (POARCS)</a>
                                            <!-- <p class="mt-2 text-muted card-text">You main list growing</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="content-wrapper">
          <div class="row">
       -->

                    <!-- content-wrapper ends -->


                    <!-- partial -->
                </div>
                <footer class="footer">
                    <p>Local Government Capacity Development Division <br>Division DILG Provincial Operations Office No.
                        5<br>
                        <a>Rawis, Legazpi City</a>
                    </p>
                </footer>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->

        <!-- plugins:js -->
        <script src="vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="vendors/chart.js/Chart.min.js"></script>
        <script src="vendors/datatables.net/jquery.dataTables.js"></script>
        <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <script src="js/dataTables.select.min.js"></script>

        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="js/off-canvas.js"></script>
        <script src="js/hoverable-collapse.js"></script>
        <script src="js/template.js"></script>
        <script src="js/settings.js"></script>
        <script src="js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="js/dashboard.js"></script>
        <script src="js/Chart.roundedBarCharts.js"></script>
        <!-- End custom js for this page-->
</body>

</html>