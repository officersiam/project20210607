<?php include("header.inc.php"); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">List About</h1>
                    <a class="btn btn-primary" href="addAbout.php">Add</a>

                    <div class="uk-overflow-auto">
    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider uk-table-responsive table table-bordered table-striped mb-0" id="datatable-tabletools">
        <thead>
            <tr>
                <th>#</th>
                <th>IMG</th>
                <th>Short</th>
                <th>Title</th>
                <th>Discription</th>
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

    $result_count = mysqli_query($db,"SELECT COUNT(*) As total_records FROM `about` ");
    $total_records = mysqli_fetch_array($result_count);
    $total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
    $second_last = $total_no_of_pages - 1; // total page minus 1
    ?>
<?php
    $aboutQuery = $db->query("SELECT * FROM about ORDER BY about_id DESC LIMIT $offset, $total_records_per_page") or die('could not search!');
        while ($row = mysqli_fetch_array($aboutQuery)) {
            $about_id = $row['about_id'];
            $about_img = $row['about_img'];
            $about_short = $row['about_short'];
            $about_title = $row['about_title'];
            $about_discription = $row['about_discription'];
?>
                <tr class="text-center">
                    <td style="background: #FFCD43;color: #222;font-weight:bold;"><?php echo $about_id; ?></td>
                    <td><img src="../images/about/<?php echo $about_img; ?>" width="500px"></td>
                    <td><?php echo $about_short; ?></td>
                    <td><?php echo $about_title; ?></td>
                    <td><?php
                        if (strlen($about_discription) > 95) {
                            $trimstring = substr($about_discription, 0, 95). ' <br><a href="javascript:void(0)" class="primary-btn">...</a>';
                            } else {
                            $trimstring = $about_discription;
                            }

                            echo $trimstring; ?></td>
                    <td>
                        <a class="btn btn-primary" href="javascript:void(0);" data-toggle="modal" data-target="#about<?php echo $about_id; ?>">Edit</a>
                            <!-- Logout Modal-->
                            <div class="modal fade" id="about<?php echo $about_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                            
                                        <form accept-charset="utf-8" method="post" action="listabout.php">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>About Short</label>
                                                <input type="text" class="form-control" name="about_short" aria-describedby="aboutShortHelp" value="<?php echo $about_short; ?>">
                                                <small id="aboutTitleHelp" class="form-text text-muted">Type Your Short Here For Show on Title.</small>
                                            </div>
                                            <div class="form-group">
                                                <label>About Title</label>
                                                <input type="text" class="form-control" name="about_title" aria-describedby="aboutTitleHelp" value="<?php echo $about_title; ?>">
                                                <input type="text" class="form-control" name="about_id" aria-describedby="aboutTitleHelp" value="<?php echo $about_id; ?>" hidden>
                                                <small id="aboutTitleHelp" class="form-text text-muted">We'll Type Your Title Here For Show on Title.</small>
                                            </div>
                                            <div class="form-group">
                                                <label>About Discription</label>
                                                <textarea type="text" id="editor" class="form-control" name="about_discription" aria-describedby="aboutDiscriptionHelp"><?php echo $about_discription; ?></textarea>
                                                <small id="aboutDiscriptionHelp" class="form-text text-muted">We'll Type Your Discription Here If Any.</small>
                                            </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary" name="about_update">Update</button>
                                        </div>
                                        </form>
                                        
                                        <form accept-charset="utf-8" method="post" action="listabout.php">
                                            <input type="text" name="about_id" value="<?php echo $about_id; ?>" hidden>
                                            <button type="submit" class="btn btn-primary" name="about_delete">Delete</button>
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