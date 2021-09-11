<?php
    // call the project() function if sitesetting is clicked
    if (isset($_POST['project'])) {
        project();
    }

    // project
    function project(){
        global $db, $errors;

        
        $project_img          = $_FILES['project_img']['name'];
        $project_output_img  = time().'.jpg';
        $target             = "../images/project/".$project_output_img;
        
        $project_category = stripslashes($_REQUEST['project_category']);
        $project_category = mysqli_real_escape_string($db,$project_category);
        
        $project_title = stripslashes($_REQUEST['project_title']);
        $project_title = mysqli_real_escape_string($db,$project_title);
        
        $project_client = stripslashes($_REQUEST['project_client']);
        $project_client = mysqli_real_escape_string($db,$project_client);

        $project_discription = stripslashes($_REQUEST['project_discription']);
        $project_discription = mysqli_real_escape_string($db,$project_discription);

        date_default_timezone_set("Asia/Dubai");
        $project_created_date       = date('Y-m-d');
        $project_created_time       = date('H:i:s');


        $projectSql = "INSERT INTO project (`project_img`, `project_category`, `project_client`, `project_title`, `project_discription`, `project_created_date`, `project_created_time`)
                          VALUES('$project_output_img', '$project_category', '$project_client', '$project_title', '$project_discription', '$project_created_date', '$project_created_time')";
                $projectResult = mysqli_query($db, $projectSql);

                if($projectResult){
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> project Submitted Successfully.

                        </p>
                        </div>';
                }
                else{
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Failed!</strong> There Must be any problem i think!
                        </p>
                        </div>';
                }
                

        if (move_uploaded_file($_FILES['project_img']['tmp_name'], $target)) {
            echo '<div style="width:50%;margin-top:20px;" class="fixed-top alert alert-success fade in alert-dismissible show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true" style="font-size:20px">×</span>
            </button><strong>Success!</strong> project Image Uploaded Successfully.

                        </p>
                        </div>';
        }else{
            echo '<div style="width:50%;margin-top:20px;" class="fixed-top alert alert-danger fade in alert-dismissible show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true" style="font-size:20px">×</span>
            </button><strong>Failed!</strong> There Must be any problem i think!

                        </p>
                        </div>';
            }

    }


    
    if (isset($_POST['project_update'])) {
        project_update();
    }

    function project_update(){
        global $db, $errors;

        
        $project_id = stripslashes($_REQUEST['project_id']);
        $project_id = mysqli_real_escape_string($db,$project_id);
        
        $project_category = stripslashes($_REQUEST['project_category']);
        $project_category = mysqli_real_escape_string($db,$project_category);
        
        $project_title = stripslashes($_REQUEST['project_title']);
        $project_title = mysqli_real_escape_string($db,$project_title);
        
        $project_client = stripslashes($_REQUEST['project_client']);
        $project_client = mysqli_real_escape_string($db,$project_client);
        
        $project_discription = stripslashes($_REQUEST['project_discription']);
        $project_discription = mysqli_real_escape_string($db,$project_discription);


        $projectUpdateSql = "UPDATE project SET `project_category` = '$project_category', `project_client` = '$project_client', `project_title` = '$project_title', `project_discription` = '$project_discription' WHERE `project_id` = '$project_id' ";
        $projectUpdateResult = mysqli_query($db, $projectUpdateSql);

        if($projectUpdateResult){
            echo '<div class="uk-alert-success" uk-alert>
<a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> project Updated Successfully.

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
    
    if (isset($_POST['project_delete'])) {
        project_delete();
    }

    
    function project_delete(){
        global $db, $errors;

        
        $project_id = stripslashes($_REQUEST['project_id']);
        $project_id = mysqli_real_escape_string($db,$project_id);

        if($project_id){
  
           

                $projectDeleteSql = "DELETE FROM project WHERE `project_id` = '$project_id' ";
                $projectDeleteResult = mysqli_query($db, $projectDeleteSql);

                if($projectDeleteResult){
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> project Deleted Successfully.

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