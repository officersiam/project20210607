<?php include("header.inc.php"); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Add Job</h1>
                    <form accept-charset="utf-8" method="post" enctype="multipart/form-data" action="listJobs.php">
                        <div class="form-group">
                            <label>Job Image Upload</label>
                            
                            <div class="uk-margin" uk-margin>
                                <div uk-form-custom="target: true">
                                    <input type="file" name="jobs_file">
                                    <input class="uk-input uk-form-width-large" type="text" placeholder="Select file" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Job Title</label>
                            <input type="text" class="form-control" name="jobs_title" aria-describedby="jobsTitleHelp" placeholder="Type Title Here">
                            <small id="jobsTitleHelp" class="form-text text-muted">We'll Type Your Title Here For Show on Title.</small>
                        </div>
                        <div class="form-group">
                            <label>Job Discription</label>
                            <textarea type="text" id="editor" class="form-control" name="jobs_discription" aria-describedby="jobsDiscriptionHelp" placeholder="Type Discription Here"></textarea>
                            <small id="jobsDiscriptionHelp" class="form-text text-muted">We'll Type Your Discription Here If Any.</small>
                        </div>
                        <div class="form-group">
                            <label>Job Short Discpition</label>
                            <textarea type="text" id="editor" class="form-control" name="jobs_details" aria-describedby="jobsDetailsHelp" placeholder="Type Details Here"></textarea>
                            <small id="jobsDetailsHelp" class="form-text text-muted">This Will Appare on Jobs Front Page.</small>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label>Application Start Date</label>
                                <input type="date" class="form-control form-control-user" id="exampleFirstName" name="jobs_application_start_date">
                            </div>
                            <div class="col-sm-6">
                                <label>Application Start Time</label>
                                <input type="time" class="form-control form-control-user" id="exampleLastName" name="jobs_application_start_time">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label>Application Deadline Date</label>
                                <input type="date" class="form-control form-control-user" id="exampleFirstName" name="jobs_deadline_date">
                            </div>
                            <div class="col-sm-6">
                                <label>Application Deadline Time</label>
                                <input type="time" class="form-control form-control-user" id="exampleLastName" name="jobs_deadline_time">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="jobs">Submit</button>
                    </form>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

  
<?php include("footer.inc.php"); ?>