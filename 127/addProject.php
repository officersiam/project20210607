<?php include("header.inc.php"); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Add Project</h1>
                    <form accept-charset="utf-8" method="post" enctype="multipart/form-data" action="listProject.php">
                        <div class="form-group">
                            <label>Project Image Upload</label>
                            
                            <div class="uk-margin" uk-margin>
                                <div uk-form-custom="target: true">
                                    <input type="file" name="project_img">
                                    <input class="uk-input uk-form-width-large" type="text" placeholder="Select file" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Category</label>
                            <select class="form-control" name="project_category" id="exampleFormControlSelect1">

                            <?php
    $site_setting_query = $db->query("SELECT * FROM category") or die('could not search!');
        while ($row = mysqli_fetch_array($site_setting_query)) {
            $category_id = $row['category_id'];
            $category_title = $row['category_title'];
?>
                                <option value="<?php echo $category_id; ?>"><?php echo $category_title; ?></option>
<?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Project Title</label>
                            <input type="text" class="form-control" name="project_title" aria-describedby="projectTitleHelp" placeholder="Type Title Here">
                            <small id="projectTitleHelp" class="form-text text-muted">We'll Type Your Title Here For Show on Title.</small>
                        </div>
                        <div class="form-group">
                            <label>Project Client</label>
                            <input type="text" class="form-control" name="project_client" aria-describedby="projectClientHelp" placeholder="Type Client Here">
                            <small id="projectClientHelp" class="form-text text-muted">We'll Type Your Client Here For Show on Title.</small>
                        </div>
                        <div class="form-group">
                            <label>Project Discription</label>
                            <textarea type="text" id="editor" class="form-control" name="project_discription" aria-describedby="projectDiscriptionHelp" placeholder="Type Discription Here"></textarea>
                            <small id="projectDiscriptionHelp" class="form-text text-muted">We'll Type Your Discription Here If Any.</small>
                        </div>
                        <button type="submit" class="btn btn-primary" name="project">Submit</button>
                    </form>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

  
<?php include("footer.inc.php"); ?>