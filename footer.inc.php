


        <!-- Footer Start -->
        <footer class="footer py-5 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
<?php
    $siteSettingsQuery = $db->query("SELECT * FROM site_setting") or die('could not search!');
        while ($row = mysqli_fetch_array($siteSettingsQuery)) {
            $site_setting_name = $row['site_setting_name'];
            $site_setting_slogan = $row['site_setting_slogan'];
?>
                        <a class="footer-logo" href="index.php"><img src="images/<?php echo $site_setting_icon; ?>" alt="<?php echo $site_setting_name; ?>" width="30px"> <?php echo $site_setting_name; ?></a>
                        <p class="text-foot mt-3"><?php echo $site_setting_slogan; ?></p>
<?php
        }
?>
                        <ul class="list-unstyled social-icon social mb-0 mt-4">
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-linkedin" title="Linkedin"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-youtube" title="Youtube"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-instagram" title="Instagram"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-twitter" title="Twitter"></i></a></li>
                        </ul><!--end icon-->
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-3 mt-4 pt-2 mt-lg-0 pt-lg-0">
                        <h4 class="text-light text-uppercase footer-head">Links</h4>
                        <ul class="list-unstyled footer-list mt-4 mb-0">
                        </li>
<?php
$aboutMenuQuery = $db->query("SELECT * FROM plugin_database WHERE `plugin_name` = 'about' ") or die('could not find!');
while ($row = mysqli_fetch_array($aboutMenuQuery)){
    $plugin_action = $row['plugin_action'];
    if($plugin_action == 'show'){
?>
                            <li class="mt-2"><a href="about.php" class="text-foot"><i class="mdi mdi-chevron-right mr-2"></i> About</a></li>
<?php }} ?>
<?php
$aboutMenuQuery = $db->query("SELECT * FROM plugin_database WHERE `plugin_name` = 'projects' ") or die('could not find!');
while ($row = mysqli_fetch_array($aboutMenuQuery)){
    $plugin_action = $row['plugin_action'];
    if($plugin_action == 'show'){
?>
                            <li class="mt-2"><a href="projects.php" class="text-foot"><i class="mdi mdi-chevron-right mr-2"></i> Projects</a></li>
<?php }} ?>
<?php
$aboutMenuQuery = $db->query("SELECT * FROM plugin_database WHERE `plugin_name` = 'career' ") or die('could not find!');
while ($row = mysqli_fetch_array($aboutMenuQuery)){
    $plugin_action = $row['plugin_action'];
    if($plugin_action == 'show'){
?>
                            <li class="mt-2"><a href="career.php" class="text-foot"><i class="mdi mdi-chevron-right mr-2"></i> Career</a></li>
<?php }} ?>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-4 mt-4 pt-2 mt-lg-0 pt-lg-0">
                        <h4 class="text-light text-uppercase footer-head">Business Hours</h4>
<?php 
    $businessHoursQuery =$db->query("SELECT * FROM site_setting");
        while($row = mysqli_fetch_array($businessHoursQuery)){
            $site_setting_business_hour = $row['site_setting_business_hour'];
?>
                        <p class="list-unstyled text-foot mt-4 mb-0">
                            <?php echo $site_setting_business_hour?>
                        </p>
<?php } ?>
                    </div>
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <footer class="footer py-4 footer-bar bg-dark">
            <div class="container text-foot text-center">
                <div class="row align-items-center">
                    <div class="col-sm-8">
                        <div class="text-sm-left">
<?php
    $siteSettingsQuery = $db->query("SELECT * FROM site_setting") or die('could not search!');
        while ($row = mysqli_fetch_array($siteSettingsQuery)) {
            $site_setting_name = $row['site_setting_name'];
            $site_setting_slogan = $row['site_setting_slogan'];
?>
                            <p class="mb-0">Copyright &copy; <?php echo date('Y');?> All rights reserved | <span class="text-uppercase"><?php echo $site_setting_name; ?></span>. Design  by <a href="https://hasheon.com">Hasheon</a><i class="mdi mdi-heart text-danger"></i></p>
<?php
        }
?>
                        </div>
                    </div><!--end col-->

                    <div class="col-sm-4 mt-4 mt-sm-0 pt-2 pt-sm-2">
                        <div class="text-sm-right">
                            <a href="#" class="back-to-top rounded d-inline-block text-center" id="back-to-top"> 
                                <i class="mdi mdi-chevron-up d-block"> </i> 
                            </a>
                        </div>                            
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer>
        <!-- Footer End -->

        <!-- javascript -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/uikit.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/scrollspy.min.js"></script>
        <script src="js/menu.js"></script>
        <!-- Magnific Popup -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/isotope.js"></script>
        <script src="js/portfolio.init.js"></script>
        <script src="js/magnific.init.js"></script>
        <!-- Slider -->
        <script src="js/slick.min.js "></script>
        <!-- Contact -->
        <script src="js/contact.js"></script>
        <!-- Main Js -->
        <script src="js/app.js"></script>
                
    </body>

</html>