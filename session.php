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
?>