<?php include("header.inc.php"); ?>
<!-- Tesimonial Start -->
        <section class="section" id="reviews">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title">
                            <h4 class="title text-uppercase mb-4">Available Jobs</h4>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
<?php
    $today = date('Y-m-d');
    $todayTime = date('H:i:s');

    


    if (isset($_GET['page_no']) && $_GET['page_no']!="") {
    $page_no = $_GET['page_no'];
    } else {
      $page_no = 1;
      }
    
    $total_records_per_page = 24;
    $offset = ($page_no-1) * $total_records_per_page;
    $previous_page = $page_no - 1;
    $next_page = $page_no + 1;
    $adjacents = "2";
    
    $result_count = mysqli_query($db,"SELECT COUNT(*) As total_records FROM `jobs` WHERE `jobs_application_start_date` <= '$today' AND `jobs_deadline_date` >= '$today' ");
    $total_records = mysqli_fetch_array($result_count);
    $total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
    $second_last = $total_no_of_pages - 1; // total page minus 1

    $jobsQuery = $db->query("SELECT * FROM jobs WHERE `jobs_application_start_date` <= '$today' AND `jobs_deadline_date` >= '$today' LIMIT $offset, $total_records_per_page") or die('could not search!');
        while ($row = mysqli_fetch_array($jobsQuery)) {
            $jobs_id = $row['jobs_id'];
            $jobs_title = $row['jobs_title'];
            $jobs_details = $row['jobs_details'];
            $jobs_application_start_date = $row['jobs_application_start_date'];
            $jobs_deadline_date = $row['jobs_deadline_date'];
?>   
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <a href="job_details.php?jobid=<?php echo $jobs_id; ?>">
                            <div class="testimonial text-center">
                                <div class="review arrow-bottom rounded p-4 position-relative">
                                    <h4 class="base" style="margin: 0px"><?php echo $jobs_title; ?></h4>
                                    <p class="text-muted text-right" style="margin: 0px">Deadline- <?php echo $jobs_deadline_date; ?></p>
                                    <p class="text-muted mb-0">~ <?php echo $jobs_details; ?> ~</p>
                                    <a class="btn btn-success" href="jobDetails.php?jobid=<?php echo $jobs_id; ?>">Apply Now</a>
                                </div>
                            </div><!--end content-->
                        </a>
                    </div><!--end col-->
<?php } ?>
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Tesimonial End -->
        <nav aria-label="Page navigation example" style="margin: 0 auto">
        <ul class="pagination justify-content-center">
        <li class="page-item" <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
          <a class="page-link" <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?> aria-label="Previous">
            <span aria-hidden="true"><i class="fas fa-angle-left"></i></span>
          </a>
        </li>
  <?php
  if ($total_no_of_pages <= 10){
  for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
  if ($counter == $page_no) {
  echo "<li class=\"page-item active\"><a class=\"page-link\">$counter</a></li>";
  }else{
  echo "<li class=\"page-item\"><a class=\"page-link\" href='?page_no=$counter'>$counter</a></li>";
  }
  }
  }
  elseif($total_no_of_pages > 10){

  if($page_no <= 4) {
  for ($counter = 1; $counter < 8; $counter++){
  if ($counter == $page_no) {

  echo "<li class='page-item active'><a class=\"page-link\">$counter</a></li>";
  }else{
  echo "<li class=\"page-item\"><a class=\"page-link\" href='?page_no=$counter'>$counter</a></li>";
  }
  }
  echo "<li class=\"page-item\"><a class=\"page-link\">...</a></li>";
  echo "<li class=\"page-item\"><a class=\"page-link\" href='?page_no=$second_last'>$second_last</a></li>";
  echo "<li class=\"page-item\"><a class=\"page-link\" href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
  }

  elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {
  echo "<li class=\"page-item\"><a class=\"page-link\" href='?page_no=1'>1</a></li>";
  echo "<li class=\"page-item\"><a class=\"page-link\" href='?page_no=2'>2</a></li>";
  echo "<li class=\"page-item\"><a class=\"page-link\">...</a></li>";
  for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {
  if ($counter == $page_no) {
  echo "<li class='page-item active'><a class=\"page-link\">$counter</a></li>";
  }else{
  echo "<li class=\"page-item\"><a class=\"page-link\" href='?page_no=$counter'>$counter</a></li>";
  }
  }
  echo "<li class=\"page-item\"><a class=\"page-link\">...</a></li>";
  echo "<li class=\"page-item\"><a class=\"page-link\" href='?page_no=$second_last'>$second_last</a></li>";
  echo "<li class=\"page-item\"><a class=\"page-link\" href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
  }

  else {
  echo "<li class=\"page-item\"><a class=\"page-link\" href='?page_no=1'>1</a></li>";
  echo "<li class=\"page-item\"><a class=\"page-link\" href='?page_no=2'>2</a></li>";
  echo "<li class=\"page-item\"><a class=\"page-link\">...</a></li>";

  for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
  if ($counter == $page_no) {
  echo "<li class=\"page-item active\"><a class=\"page-link\">$counter</a></li>";
  }else{
  echo "<li class=\"page-item\"><a class=\"page-link\" href='?page_no=$counter'>$counter</a></li>";
  }
  }
  }
  }
  ?>
        <li class="page-item" <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
          <a class="page-link" <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?> aria-label="Next">
            <span aria-hidden="true"><i class="fas fa-angle-right"></i></span>
          </a>
        </li>
  <?php if($page_no < $total_no_of_pages){
  echo "<li class=\"page-item\"><a class=\"page-link\" href='?page_no=$total_no_of_pages'>
  <span aria-hidden=\"true\">&rsaquo;&rsaquo;</span>
  </a></li>";
  } ?>
        </ul>
      </nav>
<?php include("footer.inc.php"); ?>