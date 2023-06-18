<?= \Config\Services::validation()->listErrors() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= (isset($pageTitle)) ?  $pageTitle: 'DILG Monitoring System'; ?></title>
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
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-toggle="dropdown">
                            <i class="icon-bell mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="ti-info-alt mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Just now
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="ti-settings mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Private message
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="ti-user mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        2 days ago
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
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
            <div id="right-sidebar" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab"
                            aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab"
                            aria-controls="chats-section">CHATS</a>
                    </li>
                </ul>
                <div class="tab-content" id="setting-content">
                    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
                        aria-labelledby="todo-section">
                        <div class="add-items d-flex px-3 mb-0">
                            <form class="form w-100">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                    <button type="submit" class="add btn btn-primary todo-list-add-btn"
                                        id="add-task">Add</button>
                                </div>
                            </form>
                        </div>
                        <div class="list-wrapper px-3">
                            <ul class="d-flex flex-column-reverse todo-list">
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Team review meeting at 3.00 PM
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Prepare for presentation
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Resolve all the low priority tickets due today
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Schedule meeting for next week
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Project review
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                            </ul>
                        </div>
                        <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary mr-2"></i>
                                <span>Feb 11 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                            <p class="text-gray mb-0">The total number of sessions</p>
                        </div>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary mr-2"></i>
                                <span>Feb 7 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                            <p class="text-gray mb-0 ">Call Sarah Graves</p>
                        </div>
                    </div>
                    <!-- To do section tab ends -->
                    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                            <small
                                class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See
                                All</small>
                        </div>
                        <ul class="chat-list">
                            <li class="list active">
                                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span
                                        class="online"></span></div>
                                <div class="info">
                                    <p>Thomas Douglas</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">19 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span
                                        class="offline"></span></div>
                                <div class="info">
                                    <div class="wrapper d-flex">
                                        <p>Catherine</p>
                                    </div>
                                    <p>Away</p>
                                </div>
                                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                                <small class="text-muted my-auto">23 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span
                                        class="online"></span></div>
                                <div class="info">
                                    <p>Daniel Russell</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">14 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span
                                        class="offline"></span></div>
                                <div class="info">
                                    <p>James Richardson</p>
                                    <p>Away</p>
                                </div>
                                <small class="text-muted my-auto">2 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span
                                        class="online"></span></div>
                                <div class="info">
                                    <p>Madeline Kennedy</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">5 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span
                                        class="online"></span></div>
                                <div class="info">
                                    <p>Sarah Graves</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">47 min</small>
                            </li>
                        </ul>
                    </div>
                    <!-- chat tab ends -->
                </div>
            </div>

            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="user/home/">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
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
                                <li class="nav-item"> <a class="nav-link" href="user/lgcdd">LGCDD</a></li>
                                <li class="nav-item"> <a class="nav-link" href="user/lgmed">LGMES</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#reports" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="icon-columns menu-icon"></i>
                            <span class="menu-title">LGMES Status of Compliance</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="reports">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" target=”_blank”
                                        href="https://docs.google.com/spreadsheets/d/197Qnlv0iXxTFn0ACRp2EGTuP5f4A0Ko0/edit#gid=189689531">January</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="https://docs.google.com/spreadsheets/d/197Qnlv0iXxTFn0ACRp2EGTuP5f4A0Ko0/edit#gid=1028907825">Febuary</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" target="_blank"
                                        href="https://docs.google.com/spreadsheets/d/197Qnlv0iXxTFn0ACRp2EGTuP5f4A0Ko0/edit#gid=910401658">March</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" target=”_blank”
                                        href="https://docs.google.com/spreadsheets/d/197Qnlv0iXxTFn0ACRp2EGTuP5f4A0Ko0/edit#gid=1353401257">April</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" target=”_blank”
                                        href="https://docs.google.com/spreadsheets/d/197Qnlv0iXxTFn0ACRp2EGTuP5f4A0Ko0/edit#gid=296127381">May</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" target=”_blank” href="">June</a></li>
                                <li class="nav-item"> <a class="nav-link" target=”_blank” href="">July</a></li>
                                <li class="nav-item"> <a class="nav-link" target=”_blank” href="">August</a></li>
                                <li class="nav-item"> <a class="nav-link" target=”_blank” href="">September</a></li>
                                <li class="nav-item"> <a class="nav-link" target=”_blank” href="">October</a></li>
                                <li class="nav-item"> <a class="nav-link" target=”_blank” href="">November</a></li>
                                <li class="nav-item"> <a class="nav-link" target=”_blank” href="">December</a></li>
                            </ul>
                        </div>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#lgcdds" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="icon-columns menu-icon"></i>
                            <span class="menu-title">LGCDDS Status of Compliance</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="lgcdds">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" target=”_blank”
                                        href="https://docs.google.com/spreadsheets/d/197Qnlv0iXxTFn0ACRp2EGTuP5f4A0Ko0/edit#gid=1345980712">January</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="https://docs.google.com/spreadsheets/d/197Qnlv0iXxTFn0ACRp2EGTuP5f4A0Ko0/edit#gid=675112853">Febuary</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" target="_blank"
                                        href="https://docs.google.com/spreadsheets/d/197Qnlv0iXxTFn0ACRp2EGTuP5f4A0Ko0/edit#gid=1957204409">March</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" target=”_blank”
                                        href="https://docs.google.com/spreadsheets/d/197Qnlv0iXxTFn0ACRp2EGTuP5f4A0Ko0/edit#gid=1441680854">April</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" target=”_blank”
                                        href="https://docs.google.com/spreadsheets/d/197Qnlv0iXxTFn0ACRp2EGTuP5f4A0Ko0/edit#gid=193008450">May</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" target=”_blank” href="">June</a></li>
                                <li class="nav-item"> <a class="nav-link" target=”_blank” href="">July</a></li>
                                <li class="nav-item"> <a class="nav-link" target=”_blank” href="">August</a></li>
                                <li class="nav-item"> <a class="nav-link" target=”_blank” href="">September</a></li>
                                <li class="nav-item"> <a class="nav-link" target=”_blank” href="">October</a></li>
                                <li class="nav-item"> <a class="nav-link" target=”_blank” href="">November</a></li>
                                <li class="nav-item"> <a class="nav-link" target=”_blank” href="">December</a></li>
                            </ul>
                        </div>
                    <li class="nav-item">
                        <a class="nav-link" href="user/user_status/">
                            <i class="icon-paper menu-icon"></i>
                            <span class="menu-title">Status</span>
                        </a>
                    </li>
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

                    <div class="card2">
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
                        <div class="lguadmin">
                            <h2>Awards and Recognition Section (ARS) </h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 grid-margin">
                            <div class="card3 d-flex align-items-center">
                                <div class="card-body">
                                    <div class="d-flex flex-row align-items-center">
                                        <!-- <i class="ti-facebook text-facebook icon-md"></i> -->
                                        <div class="ms-3">
                                            <ul>
                                                <li>
                                                    <h5 class="sub2">Full Disclosure Policy</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline: 1st Quarter March 15, 2nd Quarter June 15,
                                                3rd Quarter Sept 15, 4th Quarter Dec 15 <br>
                                                Frequency of Submission : Quarterly<br><br>
                                                Link: <a href="https://fdpp.dilg.gov.ph/">https://fdpp.dilg.gov.ph/</a>
                                            </h6>



                                            <!--<a class="">Awards and Recognition Section </a>-->
                                            <!-- <p class="mt-2 text-muted card-text">You main list growing</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 grid-margin">
                            <div class="card3 d-flex align-items-center">
                                <div class="card-body">
                                    <div class="d-flex flex-row align-items-center">
                                        <!-- <i class="ti-youtube text-youtube icon-md"></i> -->
                                        <div class="ms-3">
                                            <ul>
                                                <li>
                                                    <h5 class="sub2">CY 2023 FDP Implementation</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Uploading of requests for rectification to FDP
                                                portal and updates<br><br>
                                                Link: <a
                                                    href="https://bit.ly/FDP-implementation-r5">https://bit.ly/FDP-implementation-r5</a>
                                            </h6>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 grid-margin">
                            <div class="card3 d-flex align-items-center">
                                <div class="card-body">
                                    <div class="d-flex flex-row align-items-center">
                                        <!-- <i class="ti-twitter-alt text-twitter icon-md"></i> -->
                                        <div class="ms-3">
                                            <ul>
                                                <li>
                                                    <h5 class="sub2">CY 2022 CFLGA Assessment</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Uploading of MOVs for the CY 2022 CFLGA Assessment
                                                (2021-year assessed)<br><br>
                                                Link: <a
                                                    href="https://bit.ly/2022cflga-DCF">https://bit.ly/2022cflga-DCF</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-margin">
                            <div class="card3 d-flex align-items-center">
                                <div class="card-body">
                                    <div class="d-flex flex-row align-items-center">
                                        <!-- <i class="ti-twitter-alt text-twitter icon-md"></i> -->
                                        <div class="ms-3">

                                            <ul>
                                                <li>
                                                    <h5 class="sub2">CY 2023 SGLG</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Uploading of Action Plans of Field Officers for CY
                                                2023 SGLG Implementation<br><br>
                                                Link: <a
                                                    href="https://bit.ly/CY2023SGLGactionPlan">https://bit.ly/CY2023SGLGactionPlan</a><br>
                                                <a
                                                    href="https://bit.ly/2023SGLG-Materials">https://bit.ly/2023SGLG-Materials</a></br>
                                                <a
                                                    href="https://bit.ly/SGLG2023_NGAData">https://bit.ly/SGLG2023_NGAData</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4 grid-margin">
                            <div class="card3 d-flex align-items-center">
                                <div class="card-body">
                                    <div class="d-flex flex-row align-items-center">
                                        <!-- <i class="ti-twitter-alt text-twitter icon-md"></i> -->
                                        <div class="ms-3">

                                            <ul>
                                                <li>
                                                    <h5 class="sub2">Incidence of VAW and VAC at the Community Level
                                                        during the COVID-19 Pandemic</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Frequency of Submission : 1st Quarter-April 10, 2nd
                                                Quarter-July 10, 3rd Quarter-October 10, 4th Quarter-January 10<br><br>
                                                Link: <a href="https://bit.ly/VacVaw">https://bit.ly/VacVaw</a><br></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 grid-margin">
                            <div class="card3 d-flex align-items-center">
                                <div class="card-body">
                                    <div class="d-flex flex-row align-items-center">
                                        <!-- <i class="ti-twitter-alt text-twitter icon-md"></i> -->
                                        <div class="ms-3">

                                            <ul>
                                                <li>
                                                    <h5 class="sub2">LGUs Compliance to RA 9344 as amended by RA 10630
                                                    </h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Submit the accomplished RA 9344 forms: 001 and 002
                                                (Hard Copies); Input data thru shared Google Sheet (Database)<br><br>
                                                Link: <a href="https://bit.ly/3wcuYU">https://bit.ly/3wcuYU</a><br></h6>
                                            <h6 class="subsub-text">Upload scanned MOVs thru link: <br> <a
                                                    href="https://drive.google.com/drive/folders/1QLO6nvScb7ZLszgjwMZg6yeaODEWJcRy?usp=sharing">https://drive.google.com/drive/<br>folders/1QLO6nvScb7Z<br>LszgjwMZg6yeaODEWJcRy?usp=sharing</a><br><br>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 grid-margin">
                            <div class="card3 d-flex align-items-center">
                                <div class="card-body">
                                    <div class="d-flex flex-row align-items-center">
                                        <!-- <i class="ti-twitter-alt text-twitter icon-md"></i> -->
                                        <div class="ms-3">

                                            <ul>
                                                <li>
                                                    <h5 class="sub2">LCAT Accomplishment Report (LCAT AR)</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Frequency of Submission: Every 22nd of January and
                                                July of the following Year<br><br>
                                                Link: <a
                                                    href="https://docs.google.com/spreadsheets/d/1bQTcABSLiJVLQKKKjF-Ew_lVoCUaBKuCB2n5O8IpzWk/edit?usp=sharing">https://docs.google.com/<br>spreadsheets/d/1bQTcABSLi<br>JVLQKKKjF-Ew_lVoCUaBKuCB2n5O8I<br>pzWk/edit?usp=sharing</a><br>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 grid-margin">
                            <div class="card3 d-flex align-items-center">
                                <div class="card-body">
                                    <div class="d-flex flex-row align-items-center">
                                        <!-- <i class="ti-twitter-alt text-twitter icon-md"></i> -->
                                        <div class="ms-3">

                                            <ul>
                                                <li>
                                                    <h5 class="sub2">Barangay Vaw Desk Functionality Assessment by the
                                                        City/Municipal Inter-Agency Monitoring Team (C/IMT)</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline: 30/09/2023 (SUBJECT TO RESCHEDULE PENDING
                                                LATEST GUIDELINES)<br><br>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 grid-margin">
                            <div class="card3 d-flex align-items-center">
                                <div class="card-body">
                                    <div class="d-flex flex-row align-items-center">
                                        <!-- <i class="ti-twitter-alt text-twitter icon-md"></i> -->
                                        <div class="ms-3">

                                            <ul>
                                                <li>
                                                    <h5 class="sub2">Level of Functionality of LCPC</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : To be submitted to Provincial IMTF on May
                                                15, 2023<br><br>
                                                For submission of MOVs <br><br>
                                                Link: <a href="https://bit.ly/VacVaw">https://bit.ly/VacVaw</a><br><br>
                                                Link for LCPC Templates and other resource materials: <br><br>
                                                Link: <a
                                                    href="https://tinyurl.com/LCPC-Policy">https://tinyurl.com/LCPC-Policy</a><br>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 grid-margin">
                            <div class="card3 d-flex align-items-center">
                                <div class="card-body">
                                    <div class="d-flex flex-row align-items-center">
                                        <!-- <i class="ti-twitter-alt text-twitter icon-md"></i> -->
                                        <div class="ms-3">

                                            <ul>
                                                <li>
                                                    <h5 class="sub2">Lupong Tagapamayapa Incentives Awards Information
                                                        System (LTIA-IS)</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline: Awaiting for final Guidelines for 2023
                                                implementation<br><br>
                                                For submission of MOVs <br><br>
                                                Link: <a href="https://ltia.dilg.gov.ph/ ">https://ltia.dilg.gov.ph/
                                                </a><br><br>
                                                Enhance Guidelines in CY 2023 LTIA Implementation<br>Technical
                                                Notes<br>LTIA Forms<br>Submission of Assessment forms and MOVs for CY
                                                2023 LTIA assessesment <br><br>
                                                Link: <a
                                                    href="https://bit.ly/2023LTIA-implementation">https://bit.ly/2023LTIA-implementation</a><br>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 grid-margin">
                            <div class="card3 d-flex align-items-center">
                                <div class="card-body">
                                    <div class="d-flex flex-row align-items-center">
                                        <!-- <i class="ti-twitter-alt text-twitter icon-md"></i> -->
                                        <div class="ms-3">

                                            <ul>
                                                <li>
                                                    <h5 class="sub2">Local Committee on Anti-Trafficking and Violence
                                                        Against Women and their Children (LCAT-VAWC)</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : LCAT-VAWC FORM 3 to be submitted to the
                                                Regional Inter-Agency Monitoring Team (RIMT) not later than May 15,
                                                2023<br><br>
                                                For submission of MOVs <br><br>
                                                Link: <a
                                                    href="bit.ly/LCAT-VAWC_ASSESSMENT">bit.ly/LCAT-VAWC_ASSESSMENT</a><br><br>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>








                    </div>
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