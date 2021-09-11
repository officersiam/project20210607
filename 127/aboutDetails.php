<?php include("header.inc.php"); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">About</h1>
                    <form accept-charset="utf-8" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<?php
    $aboutQuery = $db->query("SELECT * FROM site_setting") or die('could not search!');
        while ($row = mysqli_fetch_array($aboutQuery)) {
            $site_setting_description = $row['site_setting_description'];
?>
                        <div class="form-group">
                            <label>About Details</label>
                            <textarea type="text" id="editor" class="form-control" name="site_setting_description" aria-describedby="siteNameHelp"><?php echo $site_setting_description;?></textarea>
                            <small id="siteNameHelp" class="form-text text-muted">Type Your Institute About Here.</small>
                        </div>
<?php } ?>
                        <button type="submit" class="btn btn-primary" name="about_details">Submit</button>
                    </form>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

  
<?php include("footer.inc.php"); ?>