<?php
if(!empty($_GET['page'])){ 
    $page = $_GET['page'];
    include("header.inc.php");
?>
<?php
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
                            <h4 class="title text-uppercase mb-4">Project</h4>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row justify-content-center mt-4 pt-2">
                    <div class="col-lg-8">
                        <div class="text-center">
                            <ul class="col container-filter mb-0">
                                <?php
    $categoryQuery = $db->query("SELECT * FROM category ORDER BY category_id DESC") or die('could not search!');
        while ($row = mysqli_fetch_array($categoryQuery)) {
            $category_id = $row['category_id'];
            $category_title = $row['category_title'];
            $category_short = $row['category_short'];
            $category_lebel = $row['category_lebel'];
?>
                                <li class="list-inline-item mb-2"><a style="background: #222222; color: #fff" class="btn btn-primary" href="projects.php?page=<?php echo $category_short; ?>"><?php echo $category_title; ?></a></li>
<?php } ?>
                            </ul>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-4 pt-3">
                <div class="row">

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

    $result_count = mysqli_query($db,"SELECT COUNT(*) As total_records FROM `project` ");
    $total_records = mysqli_fetch_array($result_count);
    $total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
    $second_last = $total_no_of_pages - 1; // total page minus 1
    ?>
            <?php
    $projectQuery = $db->query("SELECT * FROM project WHERE `project_category` = '$page' ORDER BY project_id DESC LIMIT $offset, $total_records_per_page") or die('could not search!');
        while ($row = mysqli_fetch_array($projectQuery)) {
            $project_id = $row['project_id'];
            $project_img = $row['project_img'];
            $project_category = $row['project_category'];
            $project_title = $row['project_title'];
            $project_discription = $row['project_discription'];
            $project_client = $row['project_link'];
?>
                    <div class="col-lg-3 col-md-6 p-0">
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
                    </div><!--end col-->
<?php } ?>
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
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Project End -- >


        <?php
        }}
?>
<?php
    include("footer.inc.php");
}else{
    header('location: index.php');
} ?>