<?php include("header.inc.php"); ?>
<?php
    $pluginQuery = $db->query("SELECT * FROM plugin_database WHERE `plugin_name` = 'slider' ") or die('could not find!');
        while ($row = mysqli_fetch_array($pluginQuery)){
            $plugin_action = $row['plugin_action'];
            if($plugin_action == 'show'){
?>        
        <!-- Hero Start -->
        <section class="bg-home">
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 7:3; animation: push">

                <ul class="uk-slideshow-items" uk-slideshow="autoplay:true">
<?php
    $sliderQuery = $db->query("SELECT * FROM slider ORDER BY slider_id DESC") or die('could not search!');
        while ($row = mysqli_fetch_array($sliderQuery)) {
            $slider_img = $row['slider_img'];
            $slider_title = $row['slider_title'];
            $slider_discription = $row['slider_discription'];
            $slider_link = $row['slider_link'];
?><a href="<?php echo $slider_link; ?>">
                    <li>
                        <img src="images/slider/<?php echo $slider_img?>" alt="" uk-cover>
                    </li></a>
<?php } ?>
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

            </div>
        </section><!--end section-->
        <!-- Hero End -->
<?php
        }}
        $pluginQuery = $db->query("SELECT * FROM plugin_database WHERE `plugin_name` = 'whatWeOffer' ") or die('could not find!');
            while ($row = mysqli_fetch_array($pluginQuery)){
                $plugin_action = $row['plugin_action'];
                if($plugin_action == 'show'){
?>
        <!-- Services Start -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title">
                            <h4 class="title text-uppercase mb-4">What We Offer ?</h4>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    
<?php
    $whatWeOfferQuery = $db->query("SELECT * FROM whatweoffer ORDER BY whatweoffer_id DESC") or die('could not search!');
        while ($row = mysqli_fetch_array($whatWeOfferQuery)) {
            $whatweoffer_id = $row['whatweoffer_id'];
            $whatweoffer_icon = $row['whatweoffer_icon'];
            $whatweoffer_title = $row['whatweoffer_title'];
            $whatweoffer_discription = $row['whatweoffer_discription'];
?>
                    <div class="col-lg-4 col-md-6 mt-5 pt-4">
                        <div class="services border pt-5 p-4 rounded bg-white">
                            <div class="icon position-relative border rounded bg-white mb-4">
                                <i class="<?php echo $whatweoffer_icon; ?>"></i>
                            </div>
                            <div class="content">
                                <h4 class="title mb-3"><?php echo $whatweoffer_title; ?></h4>
                                <p class="text-muted"><?php echo $whatweoffer_discription; ?></p>
                            </div>
                        </div>
                    </div><!--end col-->
                    <?php } ?>
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Services End -->

        <?php
        }}
        $pluginQuery = $db->query("SELECT * FROM plugin_database WHERE `plugin_name` = 'projects' ") or die('could not find!');
            while ($row = mysqli_fetch_array($pluginQuery)){
                $plugin_action = $row['plugin_action'];
                if($plugin_action == 'show'){
?>
        <!-- Project Start -->
        <section class="section" id="project">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title">
                            <h4 class="title text-uppercase mb-4">Latest Project</h4>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row justify-content-center mt-4 pt-2">
                    <div class="col-lg-8">
                        <div class="text-center">
                            <ul class="col container-filter portfolioFilter list-inline list-unstyled mb-0" id="filter">
                                <li class="list-inline-item mb-2"><a class="categories pr-4 pl-4 border rounded active" data-filter="*">All</a></li>
                                <li class="list-inline-item mb-2"><a class="categories pr-4 pl-4 border rounded" data-filter=".apps">Category 1</a></li>
                                <li class="list-inline-item mb-2"><a class="categories pr-4 pl-4 border rounded" data-filter=".ui">Category 2</a></li>
                                <li class="list-inline-item mb-2"><a class="categories pr-4 pl-4 border rounded" data-filter=".illus">Category 3</a></li>
                                <li class="list-inline-item mb-2"><a class="categories pr-4 pl-4 border rounded" data-filter=".brand">Category 4</a></li>
                            </ul>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-4 pt-3">
                <div class="portfolioContainer row">
                    <div class="col-lg-3 col-md-6 p-0 apps">
                        <div class="portfolio-box position-relative overflow-hidden mt-0 mb-0">                                
                            <a class="mfp-image" href="images/project/01.jpg" title="Project Name">
                                <div class="work-img position-relative overflow-hidden">
                                    <img src="images/project/01.jpg" class="img-fluid" alt="work-image">
                                    <div class="work-detail">
                                        <div class="content">
                                            <h5 class="text-light title mb-0">Project Title</h5>
                                            <small class="text-light">Client Name</small>
                                        </div>
                                    </div>
                                </div>  
                            </a>                              
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-6 p-0 ui">
                        <div class="portfolio-box position-relative overflow-hidden mt-0 mb-0">                                
                            <a class="mfp-image" href="images/project/02.jpg" title="Project Name">
                                <div class="work-img position-relative overflow-hidden">
                                    <img src="images/project/02.jpg" class="img-fluid" alt="work-image">
                                    <div class="work-detail">
                                        <div class="content">
                                            <h5 class="text-light title mb-0">Project Title</h5>
                                            <small class="text-light">Client Name</small>
                                        </div>
                                    </div>
                                </div>  
                            </a>                              
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-6 p-0 illus">
                        <div class="portfolio-box position-relative overflow-hidden mt-0 mb-0">                                
                            <a class="mfp-image" href="images/project/03.jpg" title="Project Name">
                                <div class="work-img position-relative overflow-hidden">
                                    <img src="images/project/03.jpg" class="img-fluid" alt="work-image">
                                    <div class="work-detail">
                                        <div class="content">
                                            <h5 class="text-light title mb-0">Project Title</h5>
                                            <small class="text-light">Client Name</small>
                                        </div>
                                    </div>
                                </div>  
                            </a>                              
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-6 p-0 brand">
                        <div class="portfolio-box position-relative overflow-hidden mt-0 mb-0">                                
                            <a class="mfp-image" href="images/project/04.jpg" title="Project Name">
                                <div class="work-img position-relative overflow-hidden">
                                    <img src="images/project/04.jpg" class="img-fluid" alt="work-image">
                                    <div class="work-detail">
                                        <div class="content">
                                            <h5 class="text-light title mb-0">Project Title</h5>
                                            <small class="text-light">Client Name</small>
                                        </div>
                                    </div>
                                </div>  
                            </a>                              
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-6 p-0 apps">
                        <div class="portfolio-box position-relative overflow-hidden mt-0 mb-0">                                
                            <a class="mfp-image" href="images/project/05.jpg" title="Project Name">
                                <div class="work-img position-relative overflow-hidden">
                                    <img src="images/project/05.jpg" class="img-fluid" alt="work-image">
                                    <div class="work-detail">
                                        <div class="content">
                                            <h5 class="text-light title mb-0">Project Title</h5>
                                            <small class="text-light">Client Name</small>
                                        </div>
                                    </div>
                                </div>  
                            </a>                              
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-6 p-0 ui brand">
                        <div class="portfolio-box position-relative overflow-hidden mt-0 mb-0">                                
                            <a class="mfp-image" href="images/project/06.jpg" title="Project Name">
                                <div class="work-img position-relative overflow-hidden">
                                    <img src="images/project/06.jpg" class="img-fluid" alt="work-image">
                                    <div class="work-detail">
                                        <div class="content">
                                            <h5 class="text-light title mb-0">Project Title</h5>
                                            <small class="text-light">Client Name</small>
                                        </div>
                                    </div>
                                </div>  
                            </a>                              
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-6 p-0 illus">
                        <div class="portfolio-box position-relative overflow-hidden mt-0 mb-0">                                
                            <a class="mfp-image" href="images/project/07.jpg" title="Project Name">
                                <div class="work-img position-relative overflow-hidden">
                                    <img src="images/project/07.jpg" class="img-fluid" alt="work-image">
                                    <div class="work-detail">
                                        <div class="content">
                                            <h5 class="text-light title mb-0">Project Title</h5>
                                            <small class="text-light">Client Name</small>
                                        </div>
                                    </div>
                                </div>  
                            </a>                              
                        </div>
                    </div><!--end col-->
                </div><!--end row--> 

                <div class="row justify-content-center">
                    <div class="col-12 text-center mt-4 pt-3">
<?php
    $categoryQuery = $db->query("SELECT * FROM category ORDER BY category_id ASC LIMIT 1") or die('could not search!');
        while ($row = mysqli_fetch_array($categoryQuery)) {
            $category_short = $row['category_short'];
?>
                        <a href="projects.php?page=<?php echo $category_short; ?>" class="btn btn-custom">See More</a>
<?php } ?>
                    </div>
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Project End -->  


        <?php
        }}
?>
        <!-- 
            

        <!-- Project Start --
        <section class="section" id="project">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title">
                            <h4 class="title text-uppercase mb-4">Latest Project</h4>
                        </div>
                    </div><!--end col--
                </div><!--end row--

                <div class="row justify-content-center mt-4 pt-2">
                    <div class="col-lg-8">
                        <div class="text-center">
                            <ul class="col container-filter portfolioFilter list-inline list-unstyled mb-0" id="filter">
                                <li class="list-inline-item mb-2"><a class="categories pr-4 pl-4 border rounded active" data-filter="*">All</a></li>
<?php
    $categoryQuery = $db->query("SELECT * FROM category ORDER BY category_id DESC") or die('could not search!');
        while ($row = mysqli_fetch_array($categoryQuery)) {
            $category_id = $row['category_id'];
            $category_title = $row['category_title'];
            $category_short = $row['category_short'];
            $category_lebel = $row['category_lebel'];
?>
                                <li class="list-inline-item mb-2"><a class="categories pr-4 pl-4 border rounded" data-filter=".<?php echo $category_short; ?>"><?php echo $category_title; ?></a></li>
<?php } ?>
                            </ul>
                        </div>
                    </div><!--end col--
                </div><!--end row--
            </div><!--end container--

            <div class="container mt-4 pt-3">
                <div class="portfolioContainer row">
                
            <?php
    $projectQuery = $db->query("SELECT * FROM project ORDER BY project_id DESC LIMIT 8") or die('could not search!');
        while ($row = mysqli_fetch_array($projectQuery)) {
            $project_id = $row['project_id'];
            $project_img = $row['project_img'];
            $project_category = $row['project_category'];
            $project_title = $row['project_title'];
            $project_discription = $row['project_discription'];
            $project_client = $row['project_link'];
?>
<?php
    $categoryQuery = $db->query("SELECT * FROM category WHERE `category_id` = '$project_category' ") or die('could not search!');
        while ($row = mysqli_fetch_array($categoryQuery)) {
            $category_id = $row['category_id'];
            $category_title = $row['category_title'];
            $category_short = $row['category_short'];
            $category_lebel = $row['category_lebel'];
?>
                    <div class="col-lg-3 col-md-6 p-0 <?php echo $category_short; ?>">
<?php } ?>
                        <div class="portfolio-box position-relative overflow-hidden mt-0 mb-0">                                
                            <a class="mfp-image" href="images/project/<?php echo $project_img; ?>" title="<?php echo $project_title; ?>">
                                <div class="work-img position-relative overflow-hidden">
                                    <img src="images/project/<?php echo $project_img; ?>" class="img-fluid" alt="<?php echo $project_title; ?>">
                                    <div class="work-detail">
                                        <div class="content">
                                            <h5 class="text-light title mb-0"><?php echo $project_title; ?></h5>
                                            <small class="text-light"><?php echo $project_client; ?></small>
                                        </div>
                                    </div>
                                </div>  
                            </a>                              
                        </div>
                    </div><!--end col--
<?php } ?>
                </div><!--end row--

                <div class="row justify-content-center">
                    <div class="col-12 text-center mt-4 pt-3">
<?php
    $categoryQuery = $db->query("SELECT * FROM category ORDER BY category_id ASC LIMIT 1") or die('could not search!');
        while ($row = mysqli_fetch_array($categoryQuery)) {
            $category_short = $row['category_short'];
?>
                        <a href="projects.php?page=<?php echo $category_short; ?>" class="btn btn-custom">See More</a>
<?php } ?>
                    </div>
                </div><!--end row--
            </div><!--end container--
        </section><!--end section--
        <!-- Project End --  
         -->

        <!-- Tesimonial Start --
        <section class="section" id="reviews">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title">
                            <h4 class="title text-uppercase mb-4">Our Trusted Client's</h4>
                            <p class="text-muted mx-auto para-desc mb-0">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                        </div>
                    </div><!--end col--
                </div><!--end row--

                <div class="row">                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="testimonial text-center">
                            <div class="review arrow-bottom rounded p-4 position-relative">
                                <h6 class="base">Awesome Design</h6>
                                <p class="text-muted mb-0">" It has roots in a piece of classical Latin literature need to be sure there isn't years old. Richard McClintock. "</p>
                            </div>
                            <div class="name-content text-center mt-4 pt-2">
                                <div class="image">
                                    <img src="images/testi/01.jpg" class="avatar avatar-small rounded-pill shadow" alt="">
                                </div>
                                <div class="content pt-3">
                                    <h4 class="name mb-0 text-uppercase">Bert Woods</h4>
                                    <h6 class="designation text-muted font-weight-normal">C.E.O. - Apple</h6>
                                </div>
                            </div>
                        </div><!--end content--
                    </div><!--end col--
                                      
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="testimonial text-center">
                            <div class="review arrow-bottom rounded p-4 position-relative">
                                <h6 class="base">Great Supports</h6>
                                <p class="text-muted mb-0">" It has roots in a piece of classical Latin literature need to be sure there isn't years old. Richard McClintock. "</p>
                            </div>
                            <div class="name-content text-center mt-4 pt-2">
                                <div class="image">
                                    <img src="images/testi/02.jpg" class="avatar avatar-small rounded-pill shadow" alt="">
                                </div>
                                <div class="content pt-3">
                                    <h4 class="name mb-0 text-uppercase">Asthama Rohi</h4>
                                    <h6 class="designation text-muted font-weight-normal">M.D. - Vivo</h6>
                                </div>
                            </div>
                        </div><!--end content--
                    </div><!--end col--
                                      
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="testimonial text-center">
                            <div class="review arrow-bottom rounded p-4 position-relative">
                                <h6 class="base">Responsive</h6>
                                <p class="text-muted mb-0">" It has roots in a piece of classical Latin literature need to be sure there isn't years old. Richard McClintock. "</p>
                            </div>
                            <div class="name-content text-center mt-4 pt-2">
                                <div class="image">
                                    <img src="images/testi/03.jpg" class="avatar avatar-small rounded-pill shadow" alt="">
                                </div>
                                <div class="content pt-3">
                                    <h4 class="name mb-0 text-uppercase">Rapchik Laila</h4>
                                    <h6 class="designation text-muted font-weight-normal">G.M. - Oppo</h6>
                                </div>
                            </div>
                        </div><!--end content--
                    </div><!--end col--
                </div><!--end row--
            </div><!--end container--
        </section><!--end section--
        -- Tesimonial End -->
<?php

$pluginQuery = $db->query("SELECT * FROM plugin_database WHERE `plugin_name` = 'partners' ") or die('could not find!');
while ($row = mysqli_fetch_array($pluginQuery)){
    $plugin_action = $row['plugin_action'];
    if($plugin_action == 'show'){
?>
        <!-- Partners Start -->
        <section class="section-two">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider autoplay">
<?php
    $partnerQuery = $db->query("SELECT * FROM partner ORDER BY partner_id DESC") or die('could not search!');
        while ($row = mysqli_fetch_array($partnerQuery)) {
            $partner_img = $row['partner_img'];
            $partner_title = $row['partner_title'];
            $partner_discription = $row['partner_discription'];
            $partner_link = $row['partner_link'];
?>                          <a href="<?php echo $partner_link; ?>">
                            <div><img src="images/partner/<?php echo $partner_img; ?>" class="img-fluid mx-auto d-block" alt="partners"></div>
                            </a>
<?php } ?>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Partners End -->
<?php
    }}
    $pluginQuery = $db->query("SELECT * FROM plugin_database WHERE `plugin_name` = 'contact' ") or die('could not find!');
    while ($row = mysqli_fetch_array($pluginQuery)){
        $plugin_action = $row['plugin_action'];
        if($plugin_action == 'show'){
?>
        <!-- Contact Start -->
        <section class="section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title">
                            <h4 class="title text-uppercase mb-4">Contact Us</h4>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
<?php
    $siteSettingsQuery = $db->query("SELECT * FROM site_setting") or die('could not search!');
        while ($row = mysqli_fetch_array($siteSettingsQuery)) {
            $site_setting_adress = $row['site_setting_adress'];
            $site_setting_phone = $row['site_setting_phone'];
            $site_setting_email = $row['site_setting_email'];
?>
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <div class="contact-detail">
                                    <i class="mdi mdi-phone text-white shadow bg-custom rounded-pill d-inline-block text-center"></i>
                                </div>
                            </div>

                            <div class="col-8">
                                <div class="contact-detail">
                                    <div class="content d-block overflow-hidden">
                                        <h4 class="title mb-0">Call Me</h4>
                                        <p class="text-muted mb-0"><?php echo $site_setting_phone; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <div class="contact-detail">
                                    <i class="mdi mdi-crosshairs-gps text-white shadow bg-custom rounded-pill d-inline-block text-center"></i>
                                </div>
                            </div>

                            <div class="col-8">
                                <div class="contact-detail">
                                    <div class="content d-block overflow-hidden">
                                        <h4 class="title mb-0">Office</h4>
                                        <p class="text-muted mb-0"><?php echo $site_setting_adress; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <div class="contact-detail">
                                    <i class="mdi mdi-email text-white shadow bg-custom rounded-pill d-inline-block text-center"></i>
                                </div>
                            </div>

                            <div class="col-8">
                                <div class="contact-detail">
                                    <div class="content d-block overflow-hidden">
                                        <h4 class="title mb-0">Send Me</h4>
                                        <p class="text-muted mb-0"><?php echo $site_setting_email; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
<?php } ?>
                </div><!--end row-->

                <div class="row justify-content-center mt-4 pt-2">
                    <div class="col-lg-12">
                        <div class="custom-form mb-sm-30">
                            <div id="message"></div>
                            <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group position-relative mb-4">
                                            <label for="name">Your Name <span class="text-danger">*</span> :</label>
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Your Name :">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group position-relative mb-4">
                                            <label for="email">Your Email <span class="text-danger">*</span> :</label>
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Your email :">
                                        </div> 
                                    </div><!--end col-->
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group position-relative mb-4">
                                            <label for="subject">Subject :</label>
                                            <input name="subject" id="subject" class="form-control" placeholder="Your subject :">
                                        </div>                                                                               
                                    </div><!--end col-->
                                    <div class="col-md-12">
                                        <div class="form-group position-relative mb-4">
                                            <label for="comments">Your Message <span class="text-danger">*</span> :</label>
                                            <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your Message :"></textarea>
                                        </div>
                                    </div>
                                </div><!--end row-->
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <input type="submit" id="submit" name="send" class="submitBnt btn btn-custom w-100" value="Send Message">
                                        <div id="simple-msg"></div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form><!--end form-->
                        </div><!--end custom-form-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->

        <?php
    }}
?>
        <!-- Contact End -->
<?php include("footer.inc.php"); ?>