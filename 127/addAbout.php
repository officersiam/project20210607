<?php include("header.inc.php"); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Add About</h1>
                    <form accept-charset="utf-8" method="post" enctype="multipart/form-data" action="listAbout.php">
                        <div class="form-group">
                            <label>About Image Upload</label>
                            
                            <div class="uk-margin" uk-margin>
                                <div uk-form-custom="target: true">
                                    <input type="file" name="about_img">
                                    <input class="uk-input uk-form-width-large" type="text" placeholder="Select file" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>About Short</label>
                            <input type="text" class="form-control" name="about_short" aria-describedby="aboutShortHelp" placeholder="Type Short Here">
                            <small id="aboutShortHelp" class="form-text text-muted">Type Your Short Here For Show on Title.</small>
                        </div>
                        <div class="form-group">
                            <label>About Title</label>
                            <input type="text" class="form-control" name="about_title" aria-describedby="aboutTitleHelp" placeholder="Type Title Here">
                            <small id="aboutTitleHelp" class="form-text text-muted">We'll Type Your Title Here For Show on Title.</small>
                        </div>
                        <div class="form-group">
                            <label>About Discription</label>
                            <textarea type="text" id="editor" class="form-control" name="about_discription" aria-describedby="aboutDiscriptionHelp" placeholder="Type Discription Here"></textarea>
                            <small id="aboutDiscriptionHelp" class="form-text text-muted">We'll Type Your Discription Here If Any.</small>
                        </div>
                        <button type="submit" class="btn btn-primary" name="about">Submit</button>
                    </form>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

  
<?php include("footer.inc.php"); ?>