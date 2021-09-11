<?php 
if(!empty($_GET['jobid'])){
    $jobId = $_GET['jobid'];
    include("header.inc.php"); ?>


        <!-- About Start -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title">
<?php
    $jobQuery = $db->query("SELECT * FROM jobs WHERE `jobs_id` = '$jobId' ") or die('could not search!');
        while ($row = mysqli_fetch_array($jobQuery)) {
            $jobs_title = $row['jobs_title'];
?>
                            <h4 class="title text-uppercase mb-4 text-center">Job Title: <?php echo $jobs_title; ?></h4>
<?php } ?>
                        </div>
                        <form accept-charset="utf-8" method="post" enctype="multipart/form-data" action="index.php">
                            <div class="form-group">
                                <label>Upload Your Photo</label>
                                
                                <div class="uk-margin" uk-margin>
                                    <div uk-form-custom="target: true">
                                        <input type="file" name="application_pic">
                                        <input class="uk-input uk-form-width-large" type="text" placeholder="Select file" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="application_name" placeholder="Type Name Here" require>
                                <input type="text" class="form-control" name="application_jobid" value="<?php echo $jobId; ?>" hidden>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="application_email" placeholder="Type Email Here" require>
                            </div>
                            <div class="form-group">
                                <label>Phone Number *</label>
                                <input type="tel" class="form-control" name="application_phone" placeholder="Type Phone Number Here" require>
                            </div>
                            <div class="form-group">
                                <label>Upload CV</label>
                                
                                <div class="uk-margin" uk-margin>
                                    <div uk-form-custom="target: true">
                                        <input type="file" name="application_cv">
                                        <input class="uk-input uk-form-width-large" type="text" placeholder="Select file" disabled>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            
                            <div class="form-group">
                                <label>Upload Certificates</label>
                                
                                <div>
                                    <div>
                                        <input type="file" name="application_certificate[]" multiple="multiple">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="application">Submit</button>
                        </form>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- About End -->
<?php include("footer.inc.php");
}else{
    header('location: index.php');
}
?>