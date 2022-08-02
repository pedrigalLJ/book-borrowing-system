<?php 
    session_start();
    require_once 'auth.php';
    $user = new Auth();
    if(isset($_POST['action']) && $_POST['action'] == 'register'){
        $name = $user->testInput($_POST['reg-fullname']);
        $email = $user->testInput($_POST['reg-email']);
        $password = $user->testInput($_POST['reg-confirm-password']);

        $hashPass = password_hash($password, PASSWORD_DEFAULT);

        if($user->userExist($email)){
            echo $user->showMessage('warning', 'Email already exist!');
        }else{
            if($user->register($name, $email, $hashPass)){
                echo 'register';
                $_SESSION['user'] = $email;
            }else{
                echo $user->showMessage('danger', 'Something went wrong! Try again later!');
            }
        }
    }
?>