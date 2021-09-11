<?php
    // call the whatweoffer() function if sitesetting is clicked
    if (isset($_POST['whatweoffer'])) {
        whatweoffer();
    }

    // whatweoffer
    function whatweoffer(){
        global $db, $errors;

        $whatweoffer_icon = stripslashes($_REQUEST['whatweoffer_icon']);
        $whatweoffer_icon = mysqli_real_escape_string($db,$whatweoffer_icon);
        
        $whatweoffer_title = stripslashes($_REQUEST['whatweoffer_title']);
        $whatweoffer_title = mysqli_real_escape_string($db,$whatweoffer_title);

        $whatweoffer_discription = stripslashes($_REQUEST['whatweoffer_discription']);
        $whatweoffer_discription = mysqli_real_escape_string($db,$whatweoffer_discription);

        date_default_timezone_set("Asia/Dubai");
        $whatweoffer_update_date       = date('Y-m-d');
        $whatweoffer_update_time       = date('H:i:s');


        $whatWeOfferSql = "INSERT INTO whatweoffer (`whatweoffer_icon`, `whatweoffer_title`, `whatweoffer_discription`, `whatweoffer_update_date`, `whatweoffer_update_time`)
                          VALUES('$whatweoffer_icon', '$whatweoffer_title', '$whatweoffer_discription', '$whatweoffer_update_date', '$whatweoffer_update_time')";
                $whatWeOfferResult = mysqli_query($db, $whatWeOfferSql);

                if($whatWeOfferResult){
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> What We Offer Submitted Successfully.

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


    
    if (isset($_POST['whatweoffer_update'])) {
        whatweoffer_update();
    }

    function whatweoffer_update(){
        global $db, $errors;

        
        $whatweoffer_id = stripslashes($_REQUEST['whatweoffer_id']);
        $whatweoffer_id = mysqli_real_escape_string($db,$whatweoffer_id);
        
        $whatweoffer_icon = stripslashes($_REQUEST['whatweoffer_icon']);
        $whatweoffer_icon = mysqli_real_escape_string($db,$whatweoffer_icon);
        
        $whatweoffer_title = stripslashes($_REQUEST['whatweoffer_title']);
        $whatweoffer_title = mysqli_real_escape_string($db,$whatweoffer_title);
        
        $whatweoffer_discription = stripslashes($_REQUEST['whatweoffer_discription']);
        $whatweoffer_discription = mysqli_real_escape_string($db,$whatweoffer_discription);


        $whatWeOfferUpdateSql = "UPDATE whatweoffer SET `whatweoffer_icon` = '$whatweoffer_icon', `whatweoffer_title` = '$whatweoffer_title', `whatweoffer_discription` = '$whatweoffer_discription' WHERE `whatweoffer_id` = '$whatweoffer_id' ";
        $whatWeOfferUpdateResult = mysqli_query($db, $whatWeOfferUpdateSql);

        if($whatWeOfferUpdateResult){
            echo '<div class="uk-alert-success" uk-alert>
<a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> What We Offer Updated Successfully.

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
    
    if (isset($_POST['whatweoffer_delete'])) {
        whatweoffer_delete();
    }

    
    function whatweoffer_delete(){
        global $db, $errors;

        
        
        $whatweoffer_id = stripslashes($_REQUEST['whatweoffer_id']);
        $whatweoffer_id = mysqli_real_escape_string($db,$whatweoffer_id);

        if($whatweoffer_id){

                $whatWeOfferDeleteSql = "DELETE FROM whatweoffer WHERE `whatweoffer_id` = '$whatweoffer_id' ";
                $whatWeOfferDeleteResult = mysqli_query($db, $whatWeOfferDeleteSql);

                if($whatWeOfferDeleteResult){
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> What We Offer Deleted Successfully.

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