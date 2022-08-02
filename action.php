<?php 
    session_start();
    require_once 'auth.php';
    $user = new Auth();

    //Handle register ajax request
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

    //Handle login ajax request
    if(isset($_POST['action']) && $_POST['action'] == 'login'){
        $email = $user->testInput($_POST['login-email']);
        $password = $user->testInput($_POST['login-password']);

        $loggedInUser =  $user->login($email);
       
        if($loggedInUser != null){
            if(password_verify($password, $loggedInUser['password'])){
                if(!empty($_POST['rem'])){
                    setcookie("email", $email, time()+(30*24*60*60), '/');
                    setcookie("password", $password, time()+(30*24*60*60), '/');
                }else{
                    setcookie("email", "", 1, '/');
                    setcookie("password", "", 1, '/');
                }
                echo 'login';
                $_SESSION['user'] = $email;
            }else{
                echo $user->showMessage('danger', 'Password incorrect!');
            }
        }else{
            echo $user->showMessage('danger', 'User not found!');
        }
    }
?>