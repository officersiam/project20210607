<?php
	// call the register() function if register_btn is clicked
	if (isset($_POST['register_btn'])) {
		register();
	}

    // REGISTER USER
    function register(){
        global $db, $errors;

        // receive all input values from the form

        $picci_profile_pic = $_FILES['picci_profile_pic']['name'];
        $target = "images/users/".basename($picci_profile_pic);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target,PATHINFO_EXTENSION));

        $picci_full_name = stripslashes($_REQUEST['picci_full_name']);
        $picci_full_name = mysqli_real_escape_string($db,$picci_full_name);
        
        $picci_username = stripslashes($_REQUEST['picci_username']);
        $picci_username = mysqli_real_escape_string($db,$picci_username);

        $picci_email = stripslashes($_REQUEST['picci_email']);
        $picci_email = mysqli_real_escape_string($db,$picci_email);
        
        $picci_phone = stripslashes($_REQUEST['picci_phone']);
        $picci_phone = mysqli_real_escape_string($db,$picci_phone);
        
        $picci_address = stripslashes($_REQUEST['picci_address']);
        $picci_address = mysqli_real_escape_string($db,$picci_address);
        
        $picci_password_1 = stripslashes($_REQUEST['picci_password_1']);
        $picci_password_1 = mysqli_real_escape_string($db,$picci_password_1);
        
        $picci_repeat_password = stripslashes($_REQUEST['picci_repeat_password']);
        $picci_repeat_password = mysqli_real_escape_string($db,$picci_repeat_password);
        
        date_default_timezone_set("Asia/Dubai");
        $picci_account_creation_date = date('Y-m-d H:i:s');

        // form validation: ensure that the form is correctly filled
        if (empty($picci_username)) {
            array_push($errors, "Username is required");
        }
        if (empty($picci_full_name)) {
            array_push($errors, "Name is required");
        }
        if (empty($picci_phone)) {
            array_push($errors, "Phone Number is required");
        }
        if (empty($picci_password_1)) {
            array_push($errors, "Password is required");
        }
        if ($picci_password_1 != $picci_repeat_password) {
            array_push($errors, "The two passwords do not match");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {
            $picci_password = md5($picci_password_1);//encrypt the password before saving in the database

            if (isset($_POST['user_type'])) {
                
                $picci_user_type = stripslashes($_REQUEST['picci_user_type']);
                $picci_user_type = mysqli_real_escape_string($db,$picci_user_type);
                
                $picci_supreme = stripslashes($_REQUEST['picci_supreme']);
                $picci_supreme = mysqli_real_escape_string($db,$picci_supreme);
                $picci_super_user_registration_query = "INSERT INTO `picci` (`picci_profile_pic`,`picci_full_name`, `picci_username`, `picci_email`, `picci_phone`, `picci_user_type`, `picci_supreme`, `picci_password`, `picci_account_creation_date`)
                          VALUES('$picci_profile_pic', '$picci_full_name', '$picci_username', '$picci_email', '$picci_phone', '$picci_user_type', '$picci_supreme', '$picci_password', '$picci_account_creation_date')";
                $picci_super_user_registration_result = mysqli_query($db, $picci_super_user_registration_query);

                if($picci_super_user_registration_result){
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> User Created Successfully.

                        </p>
                        </div>';
                }
                else{
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Failed!</strong> There Must be any problem i think!
                        </p>
                        </div>';
                }
                $_SESSION['success']  = '<div style="width:50%;margin-top:20px;" class="fixed-top alert alert-success fade in alert-dismissible show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true" style="font-size:20px">×</span>
                </button><strong>Success!</strong> Created Successfully.

                        </p>
                        </div>';
            }else{
                $picci_user_registration_query = "INSERT INTO `picci` (`picci_profile_pic`,`picci_full_name`, `picci_username`, `picci_email`, `picci_phone`, `picci_user_type`, `picci_supreme`, `picci_password`, `picci_account_creation_date`)
                          VALUES('$picci_profile_pic','$picci_full_name', '$picci_username', '$picci_email', '$picci_phone', 'User', 'Normal', '$picci_password', '$picci_account_creation_date')";
                $picci_user_registration_result = mysqli_query($db, $picci_user_registration_query);

                if($picci_user_registration_result){
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> Your Account Created Successfully.

                        </p>
                        </div>';
                }
                else{
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Failed!</strong> There Must be any problem i think!
                        </p>
                        </div>';
                }
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOkimg = 0;
            }
            if (file_exists($target)) {
            echo "Sorry, file already exists.";
            $uploadOkimg = 0;
            }

            if ($uploadOkimg == 0) {
                echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $targetimg)) {
                    echo '<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a><p><strong>Success!</strong> Uploaded Profile Picture.

                        </p>
                        </div>';
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }

                // get id of the created user
                $logged_in_user_id = mysqli_insert_id($db);

                $_SESSION['picci'] = getUserById($logged_in_user_id); // put logged in user in session
                $_SESSION['success']  = '<div style="width:50%;margin-top:20px;" class="fixed-top alert alert-success fade in alert-dismissible show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true" style="font-size:20px">×</span>
                </button><strong>Success!</strong> You are logged in!

                        </p>
                        </div>';
            }

        }

    }
?>