<?php
    require_once 'session.php';

    //Handle add book ajax request
    // if(isset($_POST['action']) && $_POST['action'] == 'add-book'){
    //     // print_r($_POST);
    // }

    //Handle profile update ajax request
    if(isset($_FILES['upd-photo'])){
        // print_r($_FILES);
        // print_r($_POST);
        $name = $currentUser->testInput($_POST['upd-fullname']);
        $oldPhoto = $_POST['old-photo'];
        $folder = 'users-profile-photo/';
        $newPhoto = $_FILES['upd-photo']['name'];
        $tmp_name = $_FILES['upd-photo']['tmp_name'];

        if(empty($newPhoto))
        {
          $newPhoto = $oldPhoto;
        }else
        { 
            unlink($folder.$oldPhoto);
        }
        
        move_uploaded_file($tmp_name,"users-profile-photo/$newPhoto");

        $currentUser->updateProfile($name, $newPhoto, $currentId);
    }

    //Handle change password ajax request
    if(isset($_POST['action']) && $_POST['action'] == 'change-password'){
        $currPassword = $_POST['curr-password'];
        $newPassword = $_POST['new-password'];
        $confirmNewPassword = $_POST['confirm-new-password'];

        $hashNewPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        if($newPassword != $confirmNewPassword){
            echo $currentUser->showMessage('danger', 'Password did not match!');
        }else{
            if(password_verify($currPassword, $currentPassword)){
                $currentUser->changePassword($hashNewPassword, $currentId);
                echo $currentUser->showMessage('success', 'Password changed successfuly!');
            }else{
                echo $currentUser->showMessage('danger', 'Current password is wrong!');
            }
        }
    }
?>