<?php
	session_start();
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    error_reporting(E_ALL ^ E_NOTICE);

    include ("plugin/config.php");

	// variable declaration
	$username = "";
	$phone    = "";
    $errors   = array();

    include ("plugin/sitesetting.php");
    include ("plugin/register.php");
    include ("plugin/users.php");
    include ("plugin/user_power.php");
    include ("plugin/login.php");
    include ("plugin/whatWeOffer.php");
    include ("plugin/slider.php");
    include ("plugin/partner.php");
    include ("plugin/project.php");
    include ("plugin/category.php");
    include ("plugin/plugin.php");
    include ("plugin/contact.php");
    include ("plugin/about.php");
    include ("plugin/jobs.php");
    include ("plugin/application.php");

?>