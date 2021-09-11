<?php 
    include ("core.php");
?>
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <?php
    $site_setting_query = $db->query("SELECT * FROM site_setting") or die('could not search!');
        while ($row = mysqli_fetch_array($site_setting_query)) {
            $site_setting_title = $row['site_setting_title'];
            $site_setting_icon = $row['site_setting_icon'];
            $site_setting_logo = $row['site_setting_logo'];
?>
        <title><?php echo "$site_setting_title"; ?></title>
        <!-- favicon -->
        <link rel="shortcut icon" href="images/<?php echo "$site_setting_icon"; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta content="" name="author" />
        <!-- Magnific -->
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />
        <!-- css -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/uikit.min.css" rel="stylesheet" type="text/css" />
        <link href="127/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <!-- Slider -->        
        <link rel="stylesheet" href="css/slick-theme.css"/>
        <link rel="stylesheet" href="css/slick.css"/>

        
        <style>
            body{
                background: url("images/<?php echo "$site_setting_logo"; ?>") repeat fixed;
                background-size: 60px;
            }
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
        </style>
        <?php } ?>
    </head>

    <body>
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom navbar-light sticky">
    		<div class="container">
        <?php
    $site_setting_query = $db->query("SELECT * FROM site_setting") or die('could not search!');
        while ($row = mysqli_fetch_array($site_setting_query)) {
            $site_setting_name = $row['site_setting_name'];
            $site_setting_icon = $row['site_setting_icon'];
?>
			    <a class="navbar-brand" href="index.php"><img src="images/<?php echo $site_setting_icon; ?>" alt="<?php echo $site_setting_name; ?>" width="30px"> <?php echo $site_setting_name; ?></a>
<?php } ?>
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			        <span class="mdi mdi-menu"></span>
			    </button><!--end button-->

			    <div class="collapse navbar-collapse" id="navbarCollapse">
			        <ul class="navbar-nav ml-auto">
			            <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
<?php
$aboutMenuQuery = $db->query("SELECT * FROM plugin_database WHERE `plugin_name` = 'career' ") or die('could not find!');
while ($row = mysqli_fetch_array($aboutMenuQuery)){
    $plugin_action = $row['plugin_action'];
    if($plugin_action == 'show'){
?>
                        <li class="nav-item">
                            <a class="nav-link" href="career.php">Career</a>
                        </li>
<?php }} ?>
<?php
$aboutMenuQuery = $db->query("SELECT * FROM plugin_database WHERE `plugin_name` = 'about' ") or die('could not find!');
while ($row = mysqli_fetch_array($aboutMenuQuery)){
    $plugin_action = $row['plugin_action'];
    if($plugin_action == 'show'){
?>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
<?php }} ?>
<?php if (isLoggedIn()) { ?>
                        <li class='nav-item'>
                            <a class='nav-link' href='127/'>Dashboard</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='logout.php'>Logout</a>
                        </li>
<?php } ?>
                    </ul><!--end navbar nav-->
			    </div><!--end collapse-->
		    </div><!--end container-->
		</nav><!--end navbar-->
        <!-- Navbar End -->