<?php 
if(!empty($_GET['jobid'])){
    $jobId = $_GET['jobid'];
    include("header.inc.php"); ?>


        <!-- About Start -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                            <?php
    $jobDetailsQuery = $db->query("SELECT * FROM jobs WHERE `jobs_id` = '$jobId' ") or die('could not search!');
        while ($row = mysqli_fetch_array($jobDetailsQuery)) {
            $jobs_id = $row['jobs_id'];
            $jobs_title = $row['jobs_title'];
            $jobs_discription = $row['jobs_discription'];
            $jobs_file = $row['jobs_file'];
            $jobs_application_start_date = $row['jobs_application_start_date'];
            $jobs_application_start_time = $row['jobs_application_start_time'];
            $jobs_deadline_date = $row['jobs_deadline_date'];
            $jobs_deadline_time = $row['jobs_deadline_time'];
?>
                        <div class="section-title">
                            <h4 class="title text-uppercase mb-4 text-center"><?php echo $jobs_title; ?></h4>
                            <p class="mx-auto mb-0" style="border: 2px solid #52CFA9;padding: 10px;background: linear-gradient(to top, #ddd, #fff);text-align: justify"><?php echo $jobs_discription; ?></p>
                            <?php
                                if(!empty($jobs_file)){ ?>
                            <div class="row">
                                <div class="col-12" style="border: 2px solid #52CFA9;padding: 10px;background: linear-gradient(to top, #ddd, #fff)">
                                <a href="/images/jobs/<?php echo $jobs_file; ?>" download>Download Circular</a></div>
                            </div>
                            <?php  }
                            ?>
                            <div class="row">
                                <div class="col-6 text-left" style="border: 2px solid #52CFA9;padding: 10px;background: linear-gradient(to top, #ddd, #fff)"><b>Job Application Start Date:</b> <?php echo $jobs_application_start_date; ?></div>
                                <div class="col-6 text-right" style="border: 2px solid #52CFA9;padding: 10px;background: linear-gradient(to top, #ddd, #fff)"><b>Job Application Start Time:</b> <?php echo date("h:i:s a", strtotime($jobs_application_start_time)); ?></div>
                            </div>
                            <div class="row">
                                <div class="col-6 text-left" style="border: 2px solid #52CFA9;padding: 10px;background: linear-gradient(to top, #ddd, #fff)"><b>Job Deadline Date:</b> <?php echo $jobs_deadline_date; ?></div>
                                <div class="col-6 text-right" style="border: 2px solid #52CFA9;padding: 10px;background: linear-gradient(to top, #ddd, #fff)"><b>Job Deadline Time:</b> <?php echo date("h:i:s a", strtotime($jobs_deadline_time)); ?></div>
                            </div>
                            <a class="btn btn-success text-uppercase" style="display: flex;width: max-content;margin:0 auto; margin-top: 50px" href="applyJob.php?jobid=<?php echo $jobs_id; ?>">Apply Job</a>
                        </div>
<?php } ?>
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