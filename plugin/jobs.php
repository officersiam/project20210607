<?php
    // call the jobs() function if sitesetting is clicked
    if (isset($_POST['jobs'])) {
        jobs();
    }

    // jobs
    function jobs(){
        global $db, $errors;

        
        $jobs_file          = $_FILES['jobs_file']['name'];
        $target             = "../images/about/".basename($jobs_file);
        
        $jobs_title = stripslashes($_REQUEST['jobs_title']);
        $jobs_title = mysqli_real_escape_string($db,$jobs_title);

        $jobs_discription = stripslashes($_REQUEST['jobs_discription']);
        $jobs_discription = mysqli_real_escape_string($db,$jobs_discription);

        $jobs_details = stripslashes($_REQUEST['jobs_details']);
        $jobs_details = mysqli_real_escape_string($db,$jobs_details);

        $jobs_application_start_date = stripslashes($_REQUEST['jobs_application_start_date']);
        $jobs_application_start_date = mysqli_real_escape_string($db,$jobs_application_start_date);

        $jobs_application_start_time = stripslashes($_REQUEST['jobs_application_start_time']);
        $jobs_application_start_time = mysqli_real_escape_string($db,$jobs_application_start_time);

        $jobs_deadline_date = stripslashes($_REQUEST['jobs_deadline_date']);
        $jobs_deadline_date = mysqli_real_escape_string($db,$jobs_deadline_date);

        $jobs_deadline_time = stripslashes($_REQUEST['jobs_deadline_time']);
        $jobs_deadline_time = mysqli_real_escape_string($db,$jobs_deadline_time);

        date_default_timezone_set("Asia/Dubai");
        $jobs_created_date       = date('Y-m-d');
        $jobs_created_time       = date('h:i:A');


        $jobsSql = "INSERT INTO jobs (`jobs_file`, `jobs_details`, `jobs_title`, `jobs_discription`, `jobs_application_start_date`, `jobs_application_start_time`, `jobs_deadline_date`, `jobs_deadline_time`, `jobs_created_date`, `jobs_created_time`)
                          VALUES('$jobs_file', '$jobs_details', '$jobs_title', '$jobs_discription',  '$jobs_application_start_date',  '$jobs_application_start_time',  '$jobs_deadline_date',  '$jobs_deadline_time', '$jobs_created_date', '$jobs_created_time')";
                $jobsResult = mysqli_query($db, $jobsSql);

                if($jobsResult){
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> Jobs Submitted Successfully.

                        </p>
                        </div>';
                }
                else{
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Failed!</strong> There Must be any problem i think!
                        </p>
                        </div>';
                }
                

        if (move_uploaded_file($_FILES['jobs_file']['tmp_name'], $target)) {
            echo '<div style="width:50%;margin-top:20px;" class="fixed-top alert alert-success fade in alert-dismissible show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true" style="font-size:20px">×</span>
            </button><strong>Success!</strong> jobs Image Uploaded Successfully.

                        </p>
                        </div>';
        }else{}

    }


    
    if (isset($_POST['jobs_update'])) {
        jobs_update();
    }

    function jobs_update(){
        global $db, $errors;

        
        $jobs_id = stripslashes($_REQUEST['jobs_id']);
        $jobs_id = mysqli_real_escape_string($db,$jobs_id);
        
        $jobs_details = stripslashes($_REQUEST['jobs_details']);
        $jobs_details = mysqli_real_escape_string($db,$jobs_details);
        
        $jobs_title = stripslashes($_REQUEST['jobs_title']);
        $jobs_title = mysqli_real_escape_string($db,$jobs_title);
        
        $jobs_discription = stripslashes($_REQUEST['jobs_discription']);
        $jobs_discription = mysqli_real_escape_string($db,$jobs_discription);

        $jobs_application_start_date = stripslashes($_REQUEST['jobs_application_start_date']);
        $jobs_application_start_date = mysqli_real_escape_string($db,$jobs_application_start_date);

        $jobs_application_start_time = stripslashes($_REQUEST['jobs_application_start_time']);
        $jobs_application_start_time = mysqli_real_escape_string($db,$jobs_application_start_time);

        $jobs_deadline_date = stripslashes($_REQUEST['jobs_deadline_date']);
        $jobs_deadline_date = mysqli_real_escape_string($db,$jobs_deadline_date);

        $jobs_deadline_time = stripslashes($_REQUEST['jobs_deadline_time']);
        $jobs_deadline_time = mysqli_real_escape_string($db,$jobs_deadline_time);


        $jobsUpdateSql = "UPDATE jobs SET `jobs_details` = '$jobs_details', `jobs_title` = '$jobs_title', `jobs_discription` = '$jobs_discription', `jobs_application_start_date` = '$jobs_application_start_date', `jobs_application_start_time` = '$jobs_application_start_time', `jobs_deadline_date` = '$jobs_deadline_date', `jobs_deadline_time` = '$jobs_deadline_time' WHERE `jobs_id` = '$jobs_id' ";
        $jobsUpdateResult = mysqli_query($db, $jobsUpdateSql);

        if($jobsUpdateResult){
            echo '<div class="uk-alert-success" uk-alert>
<a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> Jobs Updated Successfully.

                </p>
                </div>';
        }
        else{
            echo '<div class="uk-alert-success" uk-alert>
<a class="uk-alert-close" uk-close></a><p><strong>Failed!</strong> There Must be any problem i think!
                </p>
                </div>';
        }



    }
    
    if (isset($_POST['jobs_delete'])) {
        jobs_delete();
    }

    
    function jobs_delete(){
        global $db, $errors;

        
        $jobs_id = stripslashes($_REQUEST['jobs_id']);
        $jobs_id = mysqli_real_escape_string($db,$jobs_id);

        if($jobs_id){
  
           

                $jobsDeleteSql = "DELETE FROM jobs WHERE `jobs_id` = '$jobs_id' ";
                $jobsDeleteResult = mysqli_query($db, $jobsDeleteSql);

                if($jobsDeleteResult){
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> Jobs Deleted Successfully.

                        </p>
                        </div>';
                }
                else{
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Failed!</strong> There Must be any problem i think!
                        </p>
                        </div>';
                }
            }

        }
?>