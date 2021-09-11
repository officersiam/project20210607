<?php
	// call the about() function if sitesetting is clicked
	if (isset($_POST['about_details'])) {
		aboutDetails();
	}

    // site setting
    function aboutDetails(){
        global $db, $errors;

        // receive all input values from the form
        $site_setting_description = stripslashes($_REQUEST['site_setting_description']);
        $site_setting_description = mysqli_real_escape_string($db,$site_setting_description);

        // form validation: ensure that the form is correctly filled
        if (empty($site_setting_description)) {
            array_push($errors, "Site Name is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $aboutDetailsSql = "UPDATE site_setting SET `site_setting_description`='$site_setting_description' ";
        $aboutDetailsResult = mysqli_query($db, $aboutDetailsSql);

        if($aboutDetailsResult){
            echo '<div style="width:50%;margin-top:20px;" class="fixed-top alert alert-success fade in alert-dismissible show">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true" style="font-size:20px">×</span>
                  </button><strong>Success!</strong> About Details Updated Successfully.

                        </p>
                        </div>';
        }
        else{
            echo '<div style="width:50%;margin-top:20px;" class="fixed-top alert alert-danger fade in alert-dismissible show">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true" style="font-size:20px">×</span>
                  </button><strong>Failed!</strong> There Must be any problem i think!

                        </p>
                        </div>';
        }

        }

    }



    
    // call the about() function if sitesetting is clicked
    if (isset($_POST['about'])) {
      about();
    }

  // about
  function about(){
      global $db, $errors;

      
      $about_img          = $_FILES['about_img']['name'];
      $target             = "../images/about/".basename($about_img);
      
      $about_short = stripslashes($_REQUEST['about_short']);
      $about_short = mysqli_real_escape_string($db,$about_short);
      
      $about_title = stripslashes($_REQUEST['about_title']);
      $about_title = mysqli_real_escape_string($db,$about_title);

      $about_discription = stripslashes($_REQUEST['about_discription']);
      $about_discription = mysqli_real_escape_string($db,$about_discription);

      date_default_timezone_set("Asia/Dubai");
      $about_created_date       = date('Y-m-d');
      $about_created_time       = date('H:i:s');


      $aboutSql = "INSERT INTO about (`about_img`, `about_short`, `about_title`, `about_discription`, `about_created_date`, `about_created_time`)
                        VALUES('$about_img', '$about_short', '$about_title', '$about_discription', '$about_created_date', '$about_created_time')";
              $aboutResult = mysqli_query($db, $aboutSql);

              if($aboutResult){
                  echo '<div class="uk-alert-success" uk-alert>
  <a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> About Submitted Successfully.

                      </p>
                      </div>';
              }
              else{
                  echo '<div class="uk-alert-success" uk-alert>
  <a class="uk-alert-close" uk-close></a><p><strong>Failed!</strong> There Must be any problem i think!
                      </p>
                      </div>';
              }
              

      if (move_uploaded_file($_FILES['about_img']['tmp_name'], $target)) {
          echo '<div style="width:50%;margin-top:20px;" class="fixed-top alert alert-success fade in alert-dismissible show">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" style="font-size:20px">×</span>
          </button><strong>Success!</strong> about Image Uploaded Successfully.

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


  
  if (isset($_POST['about_update'])) {
      about_update();
  }

  function about_update(){
      global $db, $errors;

      
      $about_id = stripslashes($_REQUEST['about_id']);
      $about_id = mysqli_real_escape_string($db,$about_id);
      
      $about_short = stripslashes($_REQUEST['about_short']);
      $about_short = mysqli_real_escape_string($db,$about_short);
      
      $about_title = stripslashes($_REQUEST['about_title']);
      $about_title = mysqli_real_escape_string($db,$about_title);
      
      $about_discription = stripslashes($_REQUEST['about_discription']);
      $about_discription = mysqli_real_escape_string($db,$about_discription);


      $aboutUpdateSql = "UPDATE about SET `about_short` = '$about_short', `about_title` = '$about_title', `about_discription` = '$about_discription' WHERE `about_id` = '$about_id' ";
      $aboutUpdateResult = mysqli_query($db, $aboutUpdateSql);

      if($aboutUpdateResult){
          echo '<div class="uk-alert-success" uk-alert>
<a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> About Updated Successfully.

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
  
  if (isset($_POST['about_delete'])) {
      about_delete();
  }

  
  function about_delete(){
      global $db, $errors;

      
      $about_id = stripslashes($_REQUEST['about_id']);
      $about_id = mysqli_real_escape_string($db,$about_id);

      if($about_id){

         

              $aboutDeleteSql = "DELETE FROM about WHERE `about_id` = '$about_id' ";
              $aboutDeleteResult = mysqli_query($db, $aboutDeleteSql);

              if($aboutDeleteResult){
                  echo '<div class="uk-alert-success" uk-alert>
  <a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> About Deleted Successfully.

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