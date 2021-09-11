<?php include ("../core.php");

 if (!isLoggedIn()) {
       $_SESSION['msg'] = "You must log in first";
       header('location: ../login.php');
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link href="../css/uikit.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Editor -->
    <link href="css/sample.css" rel="stylesheet">
    <style>
        .uk-form-width-large {
            width: 1200px !important;
        }
        .uk-input, .uk-select:not([multiple]):not([size]) {
            height: 200px !important;
            vertical-align: middle !important;
            display: inline-block !important;
        }
        .uk-input, .uk-select::placeholder {
            text-align: center !important;
            font-size: 20px !important;
            color: #222;
            font-weight: bold;
        }
        @media only screen and (max-device-witdh: 768px){
            .dashLogoMob{
                display: none;
            }
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
        <?php
    $site_setting_query = $db->query("SELECT * FROM site_setting") or die('could not search!');
        while ($row = mysqli_fetch_array($site_setting_query)) {
            $site_setting_name = $row['site_setting_name'];
            $site_setting_icon = $row['site_setting_icon'];
?>
            <a style="
    background: #fff;
    color: #000;
" class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php"><img class="dashLogoMob" src="../images/<?php echo $site_setting_icon; ?>" alt="<?php echo $site_setting_name; ?>" width="60px">
                <div class="sidebar-brand-text mx-0"style="
    font-size: 10px;
"><?php echo $site_setting_name?></div>
            </a>
<?php } ?>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Main Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#siteSettings"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Site Settings</span>
                </a>
                <div id="siteSettings" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="siteSettings.php">Site Settings</a>
                        <a class="collapse-item" href="addSiteLogoIcon.php">Site Logo & Icon</a>
                        <a class="collapse-item" href="javascript:void(0);">Site SEO</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#userInfoUpdate"
                    aria-expanded="true" aria-controls="userInfoUpdate">
                    <i class="fas fa-fw fa-user"></i>
                    <span>User Update</span>
                </a>
                <div id="userInfoUpdate" class="collapse" aria-labelledby="headingPages" data-parent="#userInfoUpdate">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="userInfoUpdate.php">User Info Update</a>
                        <a class="collapse-item" href="userPasswordUpdate.php">Password Update</a>
                        <a class="collapse-item" href="userProfilePicUpdate.php">Profile Pic Update</a>
                    </div>
                </div>
            </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="listCategory.php">
                    <i class="fas fa-list"></i>
                    <span>Category</span>
                </a>
            </li>
            
<?php
	$mailQuery = $db->query("SELECT * FROM contact ORDER BY contact_id DESC");
	$mailCount = mysqli_num_rows($mailQuery);
?>
            <li class="nav-item">
                <a class="nav-link" href="listContact.php">
                    <i class="fas fa-envelope"></i>
                    <span>Mails</span> (<?php echo $mailCount; ?>)
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Homepage
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Plugin"
                    aria-expanded="true" aria-controls="Plugin">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Plugin</span>
                </a>
                <div id="Plugin" class="collapse" aria-labelledby="headingPages" data-parent="#Plugin">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="addPlugin.php">Add Plugin</a>
                        <a class="collapse-item" href="listPlugin.php">List Plugin</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Slider"
                    aria-expanded="true" aria-controls="Slider">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Slider</span>
                </a>
                <div id="Slider" class="collapse" aria-labelledby="headingPages" data-parent="#Slider">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="addSlider.php">Add Slider</a>
                        <a class="collapse-item" href="listSlider.php">List Slider</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#whatWeOffer"
                    aria-expanded="true" aria-controls="whatWeOffer">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>What We Offer</span>
                </a>
                <div id="whatWeOffer" class="collapse" aria-labelledby="headingPages" data-parent="#whatWeOffer">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="addWhatWeOffer.php">Add What We Offer</a>
                        <a class="collapse-item" href="listWhatWeOffer.php">List What We Offer</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Projects"
                    aria-expanded="true" aria-controls="Projects">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Projects</span>
                </a>
                <div id="Projects" class="collapse" aria-labelledby="headingPages" data-parent="#Projects">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="addProject.php">Add Projects</a>
                        <a class="collapse-item" href="listProject.php">List Projects</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Partners"
                    aria-expanded="true" aria-controls="Partners">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Partners</span>
                </a>
                <div id="Partners" class="collapse" aria-labelledby="headingPages" data-parent="#Partners">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="addPartner.php">Add Partners</a>
                        <a class="collapse-item" href="listPartner.php">List Partners</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Heading -->
            <div class="sidebar-heading">
                About
            </div>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="aboutDetails.php">
                    <i class="fas fa-list"></i>
                    <span>Details</span>
                </a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#About"
                    aria-expanded="true" aria-controls="About">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Sections</span>
                </a>
                <div id="About" class="collapse" aria-labelledby="headingPages" data-parent="#About">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="addAbout.php">Add About</a>
                        <a class="collapse-item" href="listAbout.php">List About</a>
                    </div>
                </div>
            </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Heading -->
        <div class="sidebar-heading">
            Jobs
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Jobs"
                aria-expanded="true" aria-controls="Jobs">
                <i class="fas fa-fw fa-shopping-bag"></i>
                <span>Jobs Admin Section</span>
            </a>
            <div id="Jobs" class="collapse" aria-labelledby="headingPages" data-parent="#Jobs">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="addJobs.php">Add Jobs</a>
                    <a class="collapse-item" href="listJobs.php">List Jobs</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Applications"
                aria-expanded="true" aria-controls="Applications">
                <i class="fas fa-fw fa-shopping-bag"></i>
                <span>Job Applications</span>
            </a>
            <div id="Applications" class="collapse" aria-labelledby="headingPages" data-parent="#Applications">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="listApplication.php">All Application List</a>
                </div>
            </div>
        </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small text-uppercase"><?php echo $_SESSION['user']['picci_full_name']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="../images/users/<?php echo $_SESSION['user']['picci_profile_pic']; ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="userInfoUpdate.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Info Update
                                </a>
                                <a class="dropdown-item" href="userPasswordUpdate.php">
                                    <i class="fas fa-lock fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Password Update
                                </a>
                                <a class="dropdown-item" href="userProfilePicUpdate.php">
                                    <i class="fas fa-smile fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile Picture Update
                                </a>
                                <a class="dropdown-item" href="siteSettings.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Site Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->