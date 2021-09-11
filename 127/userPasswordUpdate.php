<?php include("header.inc.php"); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Site Settings</h1>
                    <form accept-charset="utf-8" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<?php
    $site_setting_query = $db->query("SELECT * FROM picci") or die('could not search!');
        while ($row = mysqli_fetch_array($site_setting_query)) {
            $picci_id = $row['picci_id'];
?>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="new_pass" placeholder="Type Your Password Here">
                            <input type="text" class="form-control" name="picci_id" value="<?php echo $picci_id;?>" hidden>
                        </div>
                        <div class="form-group">
                            <label>Repeat Password</label>
                            <input type="password" class="form-control" name="repeat_pass" placeholder="Type Your Password Here">
                        </div>
<?php } ?>
                        <button type="submit" class="btn btn-primary" name="users_password">Submit</button>
                    </form>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

  
<?php include("footer.inc.php"); ?>