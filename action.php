<?php 
    session_start();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    $mail = new PHPMailer(true);

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

                $mail->isSMTP();
                $mail->Host = "smtp.gmail.com";
                $mail->SMTPAuth = true;
                $mail->Username = Database::USERNAME;
                $mail->Password = Database::PASSWORD;
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                $mail->Port = 465;

                $mail->setFrom(Database::USERNAME, 'Book Borrowing System');
                $mail->addAddress($email);

                $mail->isHTML(true);
                $mail->Subject = 'Email Verification';
                $mail->Body = '<h3>Click the link below to verify your email.<br><a href="http://localhost/book-borrowing-system/verify-email.php?email='.$email.'">http://localhost/book-borrowing-system/verify-email.php?email='.$email.'</a><br>Regards,<br>Admin</h3>';

                $mail->send();
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

    //Handle forgot password ajax request
    if(isset($_POST['action']) && $_POST['action'] == 'reset'){
        $email = $user->testInput($_POST['reset-email']);

        $userFound = $user->currentUser($email);

        if($userFound != null){
            $token = uniqid();
            $token = str_shuffle($token);

            $user->reset($token, $email);

            try {
                $mail->isSMTP();
                $mail->Host = "smtp.gmail.com";
                $mail->SMTPAuth = true;
                $mail->Username = Database::USERNAME;
                $mail->Password = Database::PASSWORD;
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                $mail->Port = 465;

                $mail->setFrom(Database::USERNAME, 'Book Borrowing System');
                $mail->addAddress($email);

                $mail->isHTML(true);
                $mail->Subject = 'Reset Password';
                $mail->Body = '<h3>Click the link below to reset your password.<br><a href="http://localhost/book-borrowing-system/reset-password.php?email='.$email.'&token='.$token.'">http://localhost/book-borrowing-system/reset-password.php?email='.$email.'&token='.$token.'</a><br>Regards,<br>Admin</h3>';

                $mail->send();
                echo $user->showMessage('success', 'We have send you the reset link, please check your email!');
            } catch (Exception $e) {
                echo $user->showMessage('danger', 'Something went wrong!'.$mail->ErrorInfo);
            }
        }else{
            echo $user->showMessage('info', 'This email is not registered!');
        }
    }
?>