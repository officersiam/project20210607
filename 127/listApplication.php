<?php include("header.inc.php"); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">List Application</h1>

                    <div class="uk-overflow-auto">
    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider uk-table-responsive table table-bordered table-striped mb-0" id="datatable-tabletools">
        <thead>
            <tr>
                <th>#</th>
                <th>Photo</th>
                <th>Jobs</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Status</th>
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

$result_count = mysqli_query($db,"SELECT COUNT(*) As total_records FROM `application` ");
$total_records = mysqli_fetch_array($result_count);
$total_records = $total_records['total_records'];
$total_no_of_pages = ceil($total_records / $total_records_per_page);
$second_last = $total_no_of_pages - 1; // total page minus 1
?>
<?php
    $applicationQuery = $db->query("SELECT * FROM `application` ORDER BY application_id DESC LIMIT $offset, $total_records_per_page") or die('could not search!');
        while ($row = mysqli_fetch_array($applicationQuery)) {
            $application_id = $row['application_id'];
            $application_pic = $row['application_pic'];
            $application_cv = $row['application_cv'];
            $application_name = $row['application_name'];
            $application_email = $row['application_email'];
            $application_phone = $row['application_phone'];
            $application_jobid = $row['application_jobid'];
            $application_action = $row['application_action'];
?>
                <tr class="text-center">
                    <td style="background: #FFCD43;color: #222;font-weight:bold;"><?php echo $application_id; ?></td>
                    <td>
                    <?php 
                        if(!empty($application_pic)){
                    ?>
                    <a href="../images/application/pic/<?php echo $application_pic; ?>" download>cv download</a>
                    <?php }else{}?></td>
<?php
    $jobQuery = $db->query("SELECT * FROM jobs WHERE `jobs_id` = '$application_jobid' ") or die('could not search!');
        while ($row = mysqli_fetch_array($jobQuery)) {
            $jobs_title = $row['jobs_title'];
?>
                    <td class="uk-text-truncate"><?php echo $jobs_title; ?></td>
<?php 
    }
?>
                    <td><?php echo $application_name; ?></td>
                    <td><?php echo $application_email; ?></td>
                    <td><?php echo $application_phone; ?></td>
                    <?php if($application_action == 'Seen'){?>
                    <td style="background: #A04AF2;color: #fff;font-weight:bold;"><?php echo $application_action; ?></td>
                    <?php }elseif($application_action == 'Accept'){?>
                    <td style="background: #FFCD42;color: #fff;font-weight:bold;"><?php echo $application_action; ?></td>
                    <?php }elseif($application_action == 'Interview'){?>
                    <td style="background: #E50C6F;color: #fff;font-weight:bold;"><?php echo $application_action; ?></td>
                    <?php }elseif($application_action == 'Confirm'){?>
                    <td style="background: #19A15F;color: #fff;font-weight:bold;"><?php echo $application_action; ?></td>
                    <?php }elseif($application_action == 'Cancel'){?>
                    <td style="background: #DD4F42;color: #fff;font-weight:bold;"><?php echo $application_action; ?></td>
                    <?php }elseif($application_action == 'Pending'){?>
                    <td style="background: #4B8BF4;color: #fff;font-weight:bold;"><?php echo $application_action; ?></td>
                    <?php } ?>
                    <td class="uk-table-Details">
                        <a class="btn btn-primary" href="javascript:void(0);" data-toggle="modal" data-target="#Application<?php echo $application_id; ?>">Edit</a>
                            <!-- Logout Modal-->
                            <div class="modal fade" id="Application<?php echo $application_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                            
                                        <form accept-charset="utf-8" method="post" action="listApplication.php">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <lebel>CV</lebel>
                                                <?php 
                                                    if(!empty($application_cv)){
                                                ?>
                                                <a href="../images/application/cv/<?php echo $application_cv; ?>" download>cv download</a>
                                                <?php }else{}?>
                                            </div>
                                            <div class="form-group">
                                                <lebel>Certificates</lebel>
                                                <?php
    $certificateQuery = $db->query("SELECT * FROM application_certificate WHERE `application_certificate_jobid` = '$application_jobid' AND `application_certificate_phone` = '$application_phone' ") or die('could not search!');
        while ($row = mysqli_fetch_array($certificateQuery)) {
            $application_certificate_file = $row['application_certificate_file'];
            if(!empty($application_certificate_file)){
?>
                                            <ol>
                                                <li>
                                                <a href="../images/application/certificate/<?php echo $application_certificate_file; ?>" download>certificate download</a></li>
                                            </ol>
<?php }} ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Action</label>
                                                <input type="text" name="application_id" value="<?php echo $application_id; ?>" hidden>
                                                <select class="form-control" name="application_action" id="exampleFormControlSelect1">
                                                    <option value="Seen">Seen</option>
                                                    <option value="Accept">Accept</option>
                                                    <option value="Interview">Interview</option>
                                                    <option value="Confirm">Confirm</option>
                                                    <option value="Cancel">Cancel</option>
                                                </select>
                                            </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary" name="application_update">Update</button>
                                        </div>
                                        </form>
                                        
                                        <form accept-charset="utf-8" method="post" action="listApplication.php">
                                            <input type="text" name="application_id" value="<?php echo $application_id; ?>" hidden>
                                            <button type="submit" class="btn btn-primary" name="application_delete">Delete</button>
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