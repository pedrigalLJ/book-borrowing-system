<?php 
    session_start();
    require_once 'auth.php';
    $currentUser = new Auth();

    if(!isset($_SESSION['user'])){
        header('location: ../index.php');
        die;
    }

    $currentEmail = $_SESSION['user'];

    $data = $currentUser->currentUser(($currentEmail));

    $currentId = $data['id'];
    $currentName = $data['fullname'];
    $currentPassword = $data['password'];
    $currentProfile = $data['photo'];
    $created = $data['created_at'];
    $verified = $data['verified'];
    $created = date_format(new DateTime($created), 'd M Y');

    $firstName = strtok($currentName, ' ');

    if($verified == 0){
        $verified = 'Not Verified!';
    }else{
        $verified = 'Verified!';
    }
?>