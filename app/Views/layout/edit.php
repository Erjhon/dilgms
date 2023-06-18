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
                            <span class="menu-title text-dark">Announcement</span>
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
                        <a class="nav-link" href="admin/status/">
                            <i class="icon-paper menu-icon"></i>
                            <span class="menu-title text-dark">Status</span>
                        </a>
                    </li>
                </ul>
            </nav>


            <!-- <div class="content-wrapper">
          <div class="row"> -->
            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Monitoring Sheets</h4>
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <?php if (session()->getFlashdata('success')): ?>
                                        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                                        <?php endif; ?>
                                        <!-- dilg/edit.php -->
                                        <form method="post" action="<?= site_url('dilg/update/'.$dilg['id']) ?>">
                                            <?= csrf_field() ?>
                                            <div class="form-group">
                                                <label for="lgu_place">LGU:</label>
                                                <input class="form-control" type="text" name="lgu_place" id="lgu_place"
                                                    value="<?= $dilg['lgu_place'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="brgy_num">No of Barangays:</label>
                                                <input class="form-control" type="text" name="brgy_num" id="brgy_num"
                                                    value="<?= $dilg['brgy_num'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="income">Income Class:</label>
                                                <input class="form-control" type="text" name="income" id="income"
                                                    value="<?= $dilg['income'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="lgoo_name">LGOO VI (FO):</label>
                                                <input class="form-control" type="text" name="lgoo_name" id="lgoo_name"
                                                    value="<?= $dilg['lgoo_name'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="lgmes">Month:</label>
                                                <select class="form-control" type="text" name="month" id="month"
                                                    value="<?= $dilg['month'] ?>">
                                                    <option value="January">January</option>
                                                    <option value="February">February</option>
                                                    <option value="March">March</option>
                                                    <option value="April">April</option>
                                                    <option value="May">May</option>
                                                    <option value="June">June</option>
                                                    <option value="July">July</option>
                                                    <option value="August">August</option>
                                                    <option value="September">September</option>
                                                    <option value="October">October</option>
                                                    <option value="November">November</option>
                                                    <option value="December">December</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="lgmes">LGMES:</label>
                                                <select class="form-control" type="text" name="lgmes" id="lgmes"
                                                    value="<?= $dilg['lgmes'] ?>">
                                                    <option value="completed">Completed</option>
                                                    <option value="not submitted">Not Submitted</option>
                                                    <option value="late">Late</option>
                                                </select>
                                                <!-- <input class="form-control" type="text" name="lgmes" id="lgmes"
                                                    value="<?= $dilg['lgmes'] ?>" required> -->
                                            </div>
                                            <div class="form-group">
                                                <label for="lgcds">LGCDS:</label>
                                                <select class="form-control" type="text" name="lgcds" id="lgcds"
                                                    value="<?= $dilg['lgcds'] ?>">
                                                    <option value="completed">Completed</option>
                                                    <option value="not submitted">Not Submitted</option>
                                                    <option value="late">Late</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="fas">FAS:</label>
                                                <select class="form-control" type="text" name="fas" id="fas"
                                                    value="<?= $dilg['fas'] ?>">
                                                    <option value="completed">Completed</option>
                                                    <option value="not submitted">Not Submitted</option>
                                                    <option value="late">Late</option>
                                                </select>
                                            </div>
                                            <div class="from-group">
                                                <button type="submit" class="btn btn-primary me-2">Update</button>
                                                <div>
                                        </form>

                                        <!-- <a href="<?= site_url('dilg/create') ?>">Add New Entry</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Completed Modal -->
                    <div class="modal fade" id="completedModal" tabindex="-1" role="dialog"
                        aria-labelledby="completedModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <!-- Add your content here for the Completed modal -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Not Submitted Modal -->
                    <div class="modal fade" id="notSubmittedModal" tabindex="-1" role="dialog"
                        aria-labelledby="notSubmittedModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <!-- Add your content here for the Not Submitted modal -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Late Modal -->
                    <div class="modal fade" id="lateModal" tabindex="-1" role="dialog" aria-labelledby="lateModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <!-- Add your content here for the Late modal -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- <script>
  function editStatus(button) {
    var dilg = button.parentNode.parentNode;
    var statusLabel = row.querySelector(".badge");
    var currentStatus = statusLabel.textContent;
    
    if (currentStatus === "Complete") {
      statusLabel.textContent = "No submission yet";
      statusLabel.classList.remove("badge-success");
      statusLabel.classList.add("badge-danger");
    } else {
      statusLabel.textContent = "Complete";
      statusLabel.classList.remove("badge-danger");
      statusLabel.classList.add("badge-success");
    }
  }
</script> -->

                    <!-- content-wrapper ends -->


                    <!-- partial -->
                </div>
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