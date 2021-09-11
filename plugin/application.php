<?php
    // call the application() function if sitesetting is clicked
    if (isset($_POST['application'])) {
        application();
    }

    // application
    function application(){
        global $db, $errors;

        
        $application_pic          = $_FILES['application_pic']['name'];
        $targetPic             = "images/application/pic/".basename($application_pic);

        $application_cv          = $_FILES['application_cv']['name'];
        $targetCv             = "images/application/cv/".basename($application_cv);
        
        $application_certificate = $_FILES['application_certificate']['name'];
        if($application_certificate){
            $application_certificate = array_map(array($db, 'real_escape_string'), $application_certificate);
        }
        
        $application_jobid = stripslashes($_REQUEST['application_jobid']);
        $application_jobid = mysqli_real_escape_string($db,$application_jobid);
        
        $application_name = stripslashes($_REQUEST['application_name']);
        $application_name = mysqli_real_escape_string($db,$application_name);

        $application_email = stripslashes($_REQUEST['application_email']);
        $application_email = mysqli_real_escape_string($db,$application_email);

        $application_phone = stripslashes($_REQUEST['application_phone']);
        $application_phone = mysqli_real_escape_string($db,$application_phone);

        date_default_timezone_set("Asia/Dubai");
        $application_created_date       = date('Y-m-d');
        $application_created_time       = date('h:i:A');


        $applicationSql = "INSERT INTO application (`application_cv`, `application_jobid`, `application_phone`, `application_name`, `application_email`, `application_action`, `application_created_date`, `application_created_time`)
                          VALUES('$application_cv', '$application_jobid', '$application_phone', '$application_name', '$application_email', 'Pending', '$application_created_date', '$application_created_time')";
                $applicationResult = mysqli_query($db, $applicationSql);


                if($application_certificate){

                    for($i=0; $i<count($application_certificate); $i++){
            
                        $each_single_application_certificate ='';
                        if ($application_certificate[$i]!=''){
                          $each_single_application_certificate = $application_certificate[$i];
                        }
                $certificateSql = "INSERT INTO application_certificate (`application_certificate_file`, `application_certificate_jobid`, `application_certificate_phone`, `application_certificate_name`, `application_certificate_email`, `application_certificate_created_date`, `application_certificate_created_time`)
                                  VALUES('$each_single_application_certificate', '$application_jobid', '$application_phone', '$application_name', '$application_email', '$application_created_date', '$application_created_time')";
                        $certificateResult = mysqli_query($db, $certificateSql);

                
                        $targetCertificate = "images/application/certificate/"; 
                        $allowTypes = array('jpg','png','jpeg','gif', 'pdf', 'doc', 'docx'); 
                            
                        $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
                        $application_certificate_file = array_filter($_FILES['application_certificate']['name']); 
                        if(!empty($application_certificate_file)){ 
                            foreach($_FILES['application_certificate']['name'] as $key=>$val){ 
                                // File upload path 
                                $application_certificate_file = basename($_FILES['application_certificate']['name'][$key]); 
                                $targetFilePath = $targetCertificate . $application_certificate_file; 
                                    
                                // Check whether file type is valid 
                                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                                if(in_array($fileType, $allowTypes)){ 
                                    // Upload file to server 
                                    if(move_uploaded_file($_FILES["application_certificate"]["tmp_name"][$key], $targetFilePath)){ 
                                        // Image db insert sql 
                                        $insertValuesSQL .= "('".$application_certificate_file."', NOW()),"; 
                                    }else{ 
                                        $errorUpload .= $_FILES['application_certificate']['name'][$key].' | '; 
                                    } 
                                }else{ 
                                    $errorUploadType .= $_FILES['application_certificate']['name'][$key].' | '; 
                                } 
                            } 
                                
                            // Error message 
                            $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
                            $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
                            $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
                        }else{ 
                        }
                }
            }

                
                if($applicationResult){
                    header('location: success.php');
                }
                else{
                    header('location: unsuccess.php');
                }
                

        if (move_uploaded_file($_FILES['application_pic']['tmp_name'], $targetPic)) {
            echo '';
        }else{}
                

        if (move_uploaded_file($_FILES['application_cv']['tmp_name'], $targetCv)) {
            echo '';
        }else{}

    }


    
    if (isset($_POST['application_update'])) {
        application_update();
    }

    function application_update(){
        global $db, $errors;

        
        $application_id = stripslashes($_REQUEST['application_id']);
        $application_id = mysqli_real_escape_string($db,$application_id);
        
        $application_action = stripslashes($_REQUEST['application_action']);
        $application_action = mysqli_real_escape_string($db,$application_action);


        $applicationUpdateSql = "UPDATE application SET `application_action` = '$application_action' WHERE `application_id` = '$application_id' ";
        $applicationUpdateResult = mysqli_query($db, $applicationUpdateSql);

        if($applicationUpdateResult){
            echo '<div class="uk-alert-success" uk-alert>
<a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> application Updated Successfully.

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
    
    if (isset($_POST['application_delete'])) {
        application_delete();
    }

    
    function application_delete(){
        global $db, $errors;

        
        $application_id = stripslashes($_REQUEST['application_id']);
        $application_id = mysqli_real_escape_string($db,$application_id);

        if($application_id){
  
           

                $applicationDeleteSql = "DELETE FROM application WHERE `application_id` = '$application_id' ";
                $applicationDeleteResult = mysqli_query($db, $applicationDeleteSql);

                if($applicationDeleteResult){
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> application Deleted Successfully.

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