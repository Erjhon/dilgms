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
                            <h2>Local Government Policy and Barangay Affairs Section (LGPBAS) </h2>
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
                                                    <h5 class="sub2">Safety Seal Certification Program Monitoring</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : 17th day of the current month & 2nd day
                                                of the next month <br>
                                                Frequency of Submission : Bi-Monthly<br><br>
                                                Link: <a
                                                    href="https://docs.google.com/spreadsheets/d/1LYfOi3NpMuQx5XuvoSzkcj3Rs6YJxqFtAuLx2jaEW7g/edit#gid=0">bit.ly/SSCP_COMonitoring</a><br>
                                                Link: <a
                                                    href="https://drive.google.com/drive/u/0/folders/1eGJ6Uq8UxcrnlNLrivqtJImamhco_adh">
                                                    bit.ly/SSCPMonitoring</a><br>
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
                                        <!-- <i class="ti-youtube text-youtube icon-md"></i> -->
                                        <div class="ms-3">
                                            <ul>
                                                <li>
                                                    <h5 class="sub2">StaySafe.PH Monthly Report</h5>
                                                    <p style="color: green; font-family: Arial;"> (DILG MC 2021-075)</p>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : 5th day of ensuing month<br>
                                                Frequency of Submission : Monthly<br><br>
                                                Link: <a
                                                    href="https://drive.google.com/drive/folders/1lcQIXSTjLb8VNz9KbvEYEwyJB31OtwAk">bit.ly/StaySafePH_Monthly</a><br>
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
                                                    <h5 class="sub2">African Swine Fever (ASF) Monthly Report</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : 10th day of the ensuing month<br>
                                                Frequency of Submission : Monthly<br><br>
                                                Link: <a
                                                    href="https://drive.google.com/drive/folders/1Fr20zzCBMGK7QkKxyk5WTf899D9M9CCa">bit.ly/ASFreport2021</a><br>
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
                                                    <h5 class="sub2">Monthly Barangay Road Clearing Report</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : 25th day of the ensuing month <br>
                                                Frequency of Submission : Monthly<br><br>
                                                Link: <a
                                                    href="https://drive.google.com/drive/folders/1dLcRQ-0fX7elaqyz-aqrIaWckny8bfB6">bit.ly/ROADfolder2021</a><br>
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
                                                    <h5 class="sub2">Barangay Profile System (BPS)</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : 5th working day of the 1st month of the
                                                ensuing quarter <br>
                                                Frequency of Submission : Monthly<br><br>
                                                Link: <a
                                                    href="https://intranet.dilg.gov.ph/user/login">https://intranet.dilg.gov.ph</a><br>
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
                                                    <h5 class="sub2"> Barangay Officials Profiling System (BOPS)</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : 3rd working day of the month upon receipt
                                                of Letter of Acceptance of Resignation from elective or appointive
                                                officials or Death Certificate or ANA (as need arises), upon issuance of
                                                'Certification on Correction of Error/s' to requesting barangay official
                                                <br>
                                                Frequency of Submission : Monthly<br><br>
                                                Link: <a
                                                    href="https://intranet.dilg.gov.ph/user/login">https://intranet.dilg.gov.ph</a><br>
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
                                                    <h5 class="sub2">Resumption of Cockfighting (Alert level 2 & below)
                                                    </h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : Last working day of the month <br>
                                                Frequency of Submission : Monthly<br><br>
                                                Link: <a
                                                    href="https://docs.google.com/spreadsheets/d/1HRSAmDl7U79fgOhsw1Tz5C3YfQ_2Let0/edit#gid=1154480992">
                                                    https://bit.ly/MC2022-003Monitoring</a><br><br>
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
                                                    <h5 class="sub2">Beneficiaries/Availees of the First Time Job
                                                        Seekers Assistance Act</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : 15th day of the ensuing
                                                month<br>Frequency of Submission : Monthly<br><br>
                                                Link: <a
                                                    href="https://docs.google.com/spreadsheets/d/1HUlPlQEsQubxs-lP8x9jwe18VUPBJgLDvrnWnVdPQ9U/edit#gid=825794607">bit.ly/RegionV_FTJAAreport_2023</a><br>
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
                                                    <h5 class="sub2">Masterlist of Leagues</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : After Election <br> Frequency of
                                                Submission : Per Term<br><br>
                                                Link: <a
                                                    href="https://docs.google.com/spreadsheets/d/1etaH8onK6XOKP3brMmHUN9clisGLusWb/edit#gid=1370206473">
                                                    bit.ly/2022MasterlistofLiga</a><br>
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
                                                    <h5 class="sub2">Establishment of CSO Desk & Institutionalization of
                                                        People's Council</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : 10th day of ensuing month<br>Frequency of
                                                Submission : Monthly<br><br>
                                                Link: <a
                                                    href="https://drive.google.com/drive/folders/1bVWUMe39xosGEOh9gx8l5KzpoXLWtXXQ">
                                                    tinyurl.com/Monitoring-CSOD-PC</a><br>
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
                                                    <h5 class="sub2">Monthly LGU Reports on the Illegal Vehicle
                                                        Operations Activities</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : 10th day of the ensuing
                                                month<br>Frequency of Submission : Monthly<br><br>
                                                Note: Email to: <a
                                                    href="mailto:iact.dotr@gmail.com">iact.dotr@gmail.com</a>,<br><a
                                                    href="mailto:iact.charisseanne@gmail.com">iact.charisseanne@gmail.com</a>,
                                                cc:
                                                <a href="mailto:nboodilgco2020@gmail.com">nboodilgco2020@gmail.com</a>
                                                and <a
                                                    href="mailto:lgmedregion5@gmail.com">lgmedregion5@gmail.com</a><br>
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
                                                    <h5 class="sub2">Local Youth Development Office (LYDO) - Related
                                                        Indicators</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : Not later than February 20<br>Frequency
                                                of Submission : Annual<br><br>
                                                Link: <a
                                                    href="https://docs.google.com/spreadsheets/d/16983hEdqaBe92UhuSQjkGev1dA9UMdVm/edit#gid=662353438">
                                                    bit.ly/LYDOReport</a><br>
                                                <a
                                                    href="https://docs.google.com/spreadsheets/d/1tXaEGELaCDMayJxyWUV_F7fde6MiZhelXZTFUj_DujI/edit#gid=1391583137">
                                                    bit.ly/LYDOmonitoring</a>
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
                                                    <h5 class="sub2">Utilization of SK Funds, SK Membership and Other
                                                        Related Data</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : Not later than February 20<br>Frequency
                                                of Submission : Annual<br><br>
                                                Link: <a
                                                    href="https://docs.google.com/spreadsheets/d/1cWS9eYp7n3_n6r3Zgv5CY5TGp_Tgkkn10bhyiU5W_mA/edit#gid=603513384">
                                                    bit.ly/SKRelatedReports2023</a><br>
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
                                                    <h5 class="sub2">Barangay Full Disclosure Policy CY 2023</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : 1st Q – May 30, 2nd Q - Aug 30, 3rd Q -
                                                Nov 30, 4th Q - Jan 30<br>Frequency of Submission : Quarterly<br><br>
                                                Link: <a
                                                    href="https://docs.google.com/spreadsheets/d/1wKy9zynti7QisidZO3FjLeNloZNfOjcP4MLhmnyLdjQ/edit#gid=1409638356">https://bit.ly/R5-BFDP-2023</a><br>
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
                                                    <h5 class="sub2">Dispensing, Selling and Reselling of Pharmaceutical
                                                        Products in Sari-Sari Stores and Other Similar Retail Outlets
                                                    </h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : Every last Thursday of the
                                                Month<br>Frequency of Submission : Monthly<br><br>
                                                Link: <a
                                                    href="https://drive.google.com/drive/u/0/folders/1ThfnOXNOKF1BKldhOtCeR6jEjfhwq5iU">
                                                    https://bit.ly/MC2022-025MonitoringR5</a><br>
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
                                                    <h5 class="sub2">Elective Local Officials Profiling Database System
                                                        (ELOPDS)</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : 3rd working day of the month upon receipt
                                                of Letter of Acceptance of Resignation from elective or appointive
                                                officials or Death Certificate or ANA (as need arises), upon issuance of
                                                'Certification on Correction of Error/s' to requesting barangay official
                                                <br>
                                                Frequency of Submission : Monthly<br><br>
                                                Link: <a href="https://intranet.dilg.gov.ph/user/login">
                                                    https://intranet.dilg.gov.ph</a><br>
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
                                                    <h5 class="sub2">Accreditation of Barangay-Based NGOs</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : December 15, 2023<br>Frequency of
                                                Submission : Annual<br><br>
                                                Link: <a
                                                    href="https://drive.google.com/drive/folders/1_yyPmwqMHzo32g5p6taG7OIO4E7sm44O">bit.ly/R5_MC2022-124-Monitoring</a><br>
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
                                                    <h5 class="sub2">RA 11706: Timbangan ng Bayan</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : 10th day of the ensuing
                                                month<br>Frequency of Submission : Monthly<br><br>
                                                Link: <a
                                                    href="https://docs.google.com/spreadsheets/d/1R5IyFfliK4tUKqfIt3MaBijUiBalAxpTu37m4W8h2XE/edit#gid=0">bit.ly/R5-TimbanganNgBayan</a><br>
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
                                                    <h5 class="sub2">Barangay Registration of Kasambahay</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : Every July 15 (1st Sem) and January 15
                                                (2nd Sem)<br>Frequency of Submission : Semestral<br><br>
                                                Link: <a
                                                    href="https://docs.google.com/spreadsheets/d/1WtFJWvUoufcLP9EJRyVIgxy3LKYiaDN1Gz7Uli7XR1A/edit#gid=587311972">bit.ly/KasambahayMonitoring</a><br>
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
                                                    <h5 class="sub2">SO NQMS Documentation</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Processing of Authority to Purchase Motor
                                                Vehicle<br>Processing of Foreign Travel Authority <br> Processing of
                                                Death Benefit Claims <br> Issuance of Certificate of Service Rendered
                                                for Grant of CSC Eligibility <br>
                                                Issuance of Certificate of Incumbency <br> Deadline : Every 8th of the
                                                ensuing month<br><br>
                                                Link: <a
                                                    href="https://drive.google.com/drive/folders/1dtO6DSCa6Isx0PwHYlipTpJGmWhfVUQp?fbclid=IwAR06EMpcVP1dPJL3jQw6pwFtQLErTwadNzx819eonAZ_xvey4rVVJn3x4SM">https://bit.ly/LGPBAS-QMS-Province</a><br>
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
                                                    <h5 class="sub2">HAPAG-Monitoring Report (Supplemental Guidelines)
                                                    </h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : JULY 25 (1st Sem) and January 25 (2nd
                                                Sem)<br>Frequency of Submission : Semestral<br><br>
                                                Link: <a
                                                    href="https://docs.google.com/spreadsheets/d/1g0QVazlqlUZBcNa-a7QSG6bZvsX8NofrJXaYwd7J4KI/edit#gid=894497711">bit.ly/R5-2023HAPAGMonitoringReport</a><br>
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
                                                    <h5 class="sub2">Day of Remembrance for Road Crash Victims,
                                                        Survivors and their Families (RA 114668)</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : 5th working day after the 3rd Sunday of
                                                November<br>Frequency of Submission : Annual<br><br>
                                                Link: <a
                                                    href="https://drive.google.com/drive/u/0/folders/1GUWUD3QL2TLQgsJVX6dYloi8zwk6GaYU">bit.ly/RA-11468</a><br>
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
                                                    <h5 class="sub2">Katarungang Pambarangay</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : Every March 15<br>Frequency of Submission
                                                : Annual <br><br>
                                                Link: <a
                                                    href="https://docs.google.com/spreadsheets/d/1yd_a1d2WBwGBt5i_hgkbYdTrZx9mYRNWgSnkT29O7-A/edit#gid=597567614">bit.ly/KP2023Report</a><br>
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
                                                    <h5 class="sub2">Accreditation of CSO and Selection of
                                                        Representatives to the LSBs</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : 10th day of the ensuing
                                                month<br>Frequency of Submission : Monthly <br><br>
                                                Link: <a
                                                    href="https://drive.google.com/drive/u/0/folders/1bm5ElCOvIT7a_9tagBOLPFqez3hm28mu">bit.ly/2022-083-R5</a><br>
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
                                                    <h5 class="sub2">Barangay Assembly Semestral Report </h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : May 30, 2023<br>Frequency of Submission :
                                                Semestral <br><br>
                                                Link: <a
                                                    href="https://docs.google.com/spreadsheets/d/1GgVLtPsZWyw6yDwUAD2ud78fsth-6Sry/edit#gid=803968248">bit.ly/RegionV_BA1stSem2023</a><br>
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
                                                    <h5 class="sub2">Local Public Transport Route Plan 2023 </h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : April 21, 2023<br>Frequency of Submission
                                                : Annual <br><br>
                                                Link: <a
                                                    href="https://docs.google.com/spreadsheets/d/1L9KKzuGDzgmVm95fDUb23gMXh4WqcUN3/edit?pli=1#gid=563100318">bit.ly/LPTRP-R52023</a><br>
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
                                                    <h5 class="sub2">RA 11535 Cooperative Development Officer</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : February 28, 2023<br>Extended Deadline:
                                                April 28, 2023<br><br>
                                                Link: <a
                                                    href="https://drive.google.com/drive/folders/1HtOL1QKOybRmMSeGlVmiczdpI7SyA1to">bit.ly/R5-CDOreportFY2022</a><br>
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
                                                    <h5 class="sub2">Highest Ranking Sanggunian Member (2022-2025)</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : April 21, 2023 <br><br>
                                                Link: <a
                                                    href="https://drive.google.com/drive/folders/1rTjLQeBFOMu90gZS30H213BaRfPT3RSG">bit.ly/HighestSanggunian2023</a><br>
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
                                                    <h5 class="sub2">BHERT/Contact Tracing Related Data</h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : Every Friday, 5:00PM<br>Frequency of
                                                Submission : Weekly<br><br>
                                                Link: <a
                                                    href="https://docs.google.com/spreadsheets/d/1xFOLs6bvgRkO5317WH0mGdyu-V3e6ieNYZfsVRiBWuE/edit#gid=0">bit.ly/R5_BHERT</a><br>
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
                                                    <h5 class="sub2">BSKO COmpliance on Public Bonding Law and Treasury
                                                    </h5>
                                                </li>
                                            </ul>
                                            <h6 class="subsub-text">Deadline : May 26, 2023<br><br>
                                                Link: <a
                                                    href="https://docs.google.com/spreadsheets/d/1D36iWdfKGyfzFYi3jCPxJX5fkZyfDZt3PO5K1qHebro/edit#gid=0">bit.ly/BSKOBonding2023</a><br>
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