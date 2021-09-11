<?php include("header.inc.php"); ?>


        <!-- About Start -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title">
                            <h4 class="title text-uppercase mb-4">About</h4>
                            <?php
    $aboutDetailsQuery = $db->query("SELECT * FROM site_setting") or die('could not search!');
        while ($row = mysqli_fetch_array($aboutDetailsQuery)) {
            $site_setting_description = $row['site_setting_description'];
?>
                            <p class="text-muted mx-auto mb-0" style="border: 2px solid #52CFA9;padding: 10px;background: linear-gradient(to top, #ddd, #fff)"><?php echo $site_setting_description; ?></p>
<?php } ?>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                
                <div class="row mt-4">
                    <div class="col-12">
                        <ul class="nav nav-pills nav-justified" id="pills-tab" role="tablist">
<?php
    $aboutQuery = $db->query("SELECT * FROM about") or die('could not search!');
        while ($row = mysqli_fetch_array($aboutQuery)) {
            $about_short = $row['about_short'];
            $about_title = $row['about_title'];
?>                            
                            <li class="nav-item mb-4 pt-2">
                                <a class="nav-link" id="<?php echo $about_short; ?>-tab" data-toggle="pill" href="#<?php echo $about_short; ?>" role="tab" aria-controls="<?php echo $about_short; ?>" aria-selected="false">
                                    <div class="capabilities text-center rounded pt-2 pb-2">
                                        <div class="icon bg-custom mb-3">
                                            <i class="mdi mdi-cloud-outline text-white"></i>
                                        </div>
                                        <h4 class="title font-weight-normal mb-0"><?php echo $about_title; ?></h4>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
<?php } ?>
                        </ul><!--end nav pills-->

                        <div class="tab-content mt-3" id="pills-tabContent">
                        
<?php
    $aboutQuery = $db->query("SELECT * FROM about ORDER BY about_id ASC LIMIT 1") or die('could not search!');
        while ($row = mysqli_fetch_array($aboutQuery)) {
            $about_short = $row['about_short'];
            $about_title = $row['about_title'];
            $about_discription = $row['about_discription'];
            $about_img = $row['about_img'];
?>   
                            <div class="tab-pane fade show active" id="<?php echo $about_short; ?>" role="tabpanel" aria-labelledby="tab">
                                <div class="capabilities-content border rounded p-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <h4 class="title"><?php echo $about_title; ?></h4>
                                            <p class="text-muted"><?php echo $about_discription; ?></p>
                                        </div><!--end col-->

                                        <div class="col-md-6 mt-4 pt-2">
                                            <img src="images/about/<?php echo $about_img; ?>" class="img-fluid d-block mx-auto" alt="<?php echo $about_title; ?>">
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div>
                            </div><!--end teb pane-->
<?php } ?>
<?php
    $aboutQuery = $db->query("SELECT * FROM about ORDER BY about_id DESC") or die('could not search!');
        while ($row = mysqli_fetch_array($aboutQuery)) {
            $about_short = $row['about_short'];
            $about_title = $row['about_title'];
            $about_discription = $row['about_discription'];
            $about_img = $row['about_img'];
?>   
                            <div class="tab-pane fade show" id="<?php echo $about_short; ?>" role="tabpanel" aria-labelledby="tab">
                                <div class="capabilities-content border rounded p-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <h4 class="title"><?php echo $about_title; ?></h4>
                                            <p class="text-muted"><?php echo $about_discription; ?></p>
                                        </div><!--end col-->

                                        <div class="col-md-6 mt-4 pt-2">
                                            <img src="images/about/<?php echo $about_img; ?>" class="img-fluid d-block mx-auto" alt="<?php echo $about_title; ?>">
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div>
                            </div><!--end teb pane-->
<?php } ?>
                        </div><!--end tab content-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- About End -->
<?php include("footer.inc.php"); ?>