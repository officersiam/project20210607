<?php
    // call the partner() function if sitesetting is clicked
    if (isset($_POST['partner'])) {
        partner();
    }

    // partner
    function partner(){
        global $db, $errors;

        
        $partner_img          = $_FILES['partner_img']['name'];
        $partner_output_img  = time().'.jpg';
        $target             = "../images/partner/".$partner_output_img;
        
        $partner_title = stripslashes($_REQUEST['partner_title']);
        $partner_title = mysqli_real_escape_string($db,$partner_title);

        $partner_discription = stripslashes($_REQUEST['partner_discription']);
        $partner_discription = mysqli_real_escape_string($db,$partner_discription);

        $partner_link = stripslashes($_REQUEST['partner_link']);
        $partner_link = mysqli_real_escape_string($db,$partner_link);

        date_default_timezone_set("Asia/Dubai");
        $partner_created_date       = date('Y-m-d');
        $partner_created_time       = date('H:i:s');


        $partnerSql = "INSERT INTO partner (`partner_img`, `partner_link`, `partner_title`, `partner_discription`, `partner_created_date`, `partner_created_time`)
                          VALUES('$partner_output_img', '$partner_link', '$partner_title', '$partner_discription', '$partner_created_date', '$partner_created_time')";
                $partnerResult = mysqli_query($db, $partnerSql);

                if($partnerResult){
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> Partner Submitted Successfully.

                        </p>
                        </div>';
                }
                else{
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Failed!</strong> There Must be any problem i think!
                        </p>
                        </div>';
                }
                

        if (move_uploaded_file($_FILES['partner_img']['tmp_name'], $target)) {
            echo '<div style="width:50%;margin-top:20px;" class="fixed-top alert alert-success fade in alert-dismissible show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true" style="font-size:20px">×</span>
            </button><strong>Success!</strong> partner Image Uploaded Successfully.

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


    
    if (isset($_POST['partner_update'])) {
        partner_update();
    }

    function partner_update(){
        global $db, $errors;

        
        $partner_id = stripslashes($_REQUEST['partner_id']);
        $partner_id = mysqli_real_escape_string($db,$partner_id);
        
        $partner_link = stripslashes($_REQUEST['partner_link']);
        $partner_link = mysqli_real_escape_string($db,$partner_link);
        
        $partner_title = stripslashes($_REQUEST['partner_title']);
        $partner_title = mysqli_real_escape_string($db,$partner_title);
        
        $partner_discription = stripslashes($_REQUEST['partner_discription']);
        $partner_discription = mysqli_real_escape_string($db,$partner_discription);


        $partnerUpdateSql = "UPDATE partner SET `partner_link` = '$partner_link', `partner_title` = '$partner_title', `partner_discription` = '$partner_discription' WHERE `partner_id` = '$partner_id' ";
        $partnerUpdateResult = mysqli_query($db, $partnerUpdateSql);

        if($partnerUpdateResult){
            echo '<div class="uk-alert-success" uk-alert>
<a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> Partner Updated Successfully.

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
    
    if (isset($_POST['partner_delete'])) {
        partner_delete();
    }

    
    function partner_delete(){
        global $db, $errors;

        
        $partner_id = stripslashes($_REQUEST['partner_id']);
        $partner_id = mysqli_real_escape_string($db,$partner_id);

        if($partner_id){
  
           

                $partnerDeleteSql = "DELETE FROM partner WHERE `partner_id` = '$partner_id' ";
                $partnerDeleteResult = mysqli_query($db, $partnerDeleteSql);

                if($partnerDeleteResult){
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> partner Deleted Successfully.

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