<?php include("header.inc.php"); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">List Jobs</h1>
                    <a class="btn btn-primary" href="addJobs.php">Add</a>

                    <div class="uk-overflow-auto">
    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider uk-table-responsive table table-bordered table-striped mb-0" id="datatable-tabletools">
        <thead>
            <tr>
                <th>#</th>
                <th>File</th>
                <th>Title</th>
                <th>Discription</th>
                <th>Details</th>
                <th>Action</th>
            </tr>
        </thead>
            <tbody>

            <?php

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

$result_count = mysqli_query($db,"SELECT COUNT(*) As total_records FROM `jobs` ");
$total_records = mysqli_fetch_array($result_count);
$total_records = $total_records['total_records'];
$total_no_of_pages = ceil($total_records / $total_records_per_page);
$second_last = $total_no_of_pages - 1; // total page minus 1
?>
<?php
    $jobsQuery = $db->query("SELECT * FROM jobs ORDER BY jobs_id DESC LIMIT $offset, $total_records_per_page") or die('could not search!');
        while ($row = mysqli_fetch_array($jobsQuery)) {
            $jobs_id = $row['jobs_id'];
            $jobs_file = $row['jobs_file'];
            $jobs_title = $row['jobs_title'];
            $jobs_discription = $row['jobs_discription'];
            $jobs_details = $row['jobs_details'];
            $jobs_application_start_date = $row['jobs_application_start_date'];
            $jobs_application_start_time = $row['jobs_application_start_time'];
            $jobs_deadline_date = $row['jobs_deadline_date'];
            $jobs_deadline_time = $row['jobs_deadline_time'];
?>
                <tr class="text-center">
                    <td style="background: #FFCD43;color: #222;font-weight:bold;"><?php echo $jobs_id; ?></td>
                    <td><File src="../images/jobs/<?php echo $jobs_file; ?>" width="500px"></td>
                    <td><?php echo $jobs_title; ?></td>
                    <td><?php
                        if (strlen($jobs_discription) > 95) {
                            $trimstring = substr($jobs_discription, 0, 95). ' <br><a href="javascript:void(0)" class="primary-btn">...</a>';
                            } else {
                            $trimstring = $jobs_discription;
                            }

                            echo $trimstring; ?></td>
                    <td><?php echo $jobs_details; ?></td>
                    <td>
                        <a class="btn btn-primary" href="javascript:void(0);" data-toggle="modal" data-target="#jobs<?php echo $jobs_id; ?>">Edit</a>
                            <!-- Logout Modal-->
                            <div class="modal fade" id="jobs<?php echo $jobs_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                            
                                        <form accept-charset="utf-8" method="post" action="listJobs.php">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Jobs Title</label>
                                                <input type="text" class="form-control" name="jobs_title" aria-describedby="jobsTitleHelp" value="<?php echo $jobs_title; ?>">
                                                <input type="text" class="form-control" name="jobs_id" aria-describedby="jobsTitleHelp" value="<?php echo $jobs_id; ?>" hidden>
                                                <small id="jobsTitleHelp" class="form-text text-muted">We'll Type Your Title Here For Show on Title.</small>
                                            </div>
                                            <div class="form-group">
                                                <label>Jobs Discription</label>
                                                <textarea type="text" id="editor" class="form-control" name="jobs_discription" aria-describedby="jobsDiscriptionHelp"><?php echo $jobs_discription; ?></textarea>
                                                <small id="jobsDiscriptionHelp" class="form-text text-muted">We'll Type Your Discription Here If Any.</small>
                                            </div>
                                            <div class="form-group">
                                                <label>Jobs Details</label>
                                                <textarea type="text" id="editor" class="form-control" name="jobs_details" aria-describedby="jobsDetailsHelp"><?php echo $jobs_details; ?></textarea>
                                                <small id="jobsDetailsHelp" class="form-text text-muted">We'll Type Your Details Here If Any.</small>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label>Application Start Date</label>
                                                    <input type="date" class="form-control form-control-user" id="exampleFirstName" name="jobs_application_start_date" value="<?php echo $jobs_application_start_date; ?>">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>Application Start Time</label>
                                                    <input type="time" class="form-control form-control-user" id="exampleLastName" name="jobs_application_start_time" value="<?php echo $jobs_application_start_time; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label>Application Deadline Date</label>
                                                    <input type="date" class="form-control form-control-user" id="exampleFirstName" name="jobs_deadline_date" value="<?php echo $jobs_deadline_date; ?>">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>Application Deadline Time</label>
                                                    <input type="time" class="form-control form-control-user" id="exampleLastName" name="jobs_deadline_time" value="<?php echo $jobs_deadline_time; ?>">
                                                </div>
                                            </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary" name="jobs_update">Update</button>
                                        </div>
                                        </form>
                                        
                                        <form accept-charset="utf-8" method="post" action="listJobs.php">
                                            <input type="text" name="jobs_id" value="<?php echo $jobs_id; ?>" hidden>
                                            <button type="submit" class="btn btn-primary" name="jobs_delete">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </td>
                </tr>
<?php } ?>
                
            </tbody>
        </table>
</div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
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