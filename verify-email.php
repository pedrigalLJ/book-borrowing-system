<?php 
    require_once 'session.php';

    if(isset($_GET['email'])){
        $email = $_GET['email'];

        $currentUser->verifyEmail($email);
        header('location: Borrower/account.php');
        exit();
    }else{
        header('location: index.php');
        exit();
    }
?>