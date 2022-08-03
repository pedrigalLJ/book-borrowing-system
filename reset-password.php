<?php 
    require_once 'auth.php';
    $user = new Auth();
    $msg = '';

    if(isset($_GET['email']) && isset($_GET['token'])){
        $email = $user->testInput(($_GET['email']));
        $token = $user->testInput(($_GET['token']));

        $authUser = $user->resetAuth($email, $token);

        if($authUser != null){
            if(isset($_POST['reset-password'])){
                $newPass = $_POST['new-password'];
                $confirmNewPass = $_POST['confirm-new-password'];

                $hashNewPass = password_hash($newPass, PASSWORD_DEFAULT);

                if($newPass == $confirmNewPass){
                    $user->newPassword($hashNewPass, $email);
                    $msg = 'Password changed successfully! <a href="index.php">Login here!</a>';
                }else{
                    $msg = 'Password did not matched!';
                }
            }
        }else{
            header('location: index.php');
            exit();
        }
    }else{
        header('location: index.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Borrowing System | Reset Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/custom-style.css">
</head>
<body>
    <!-- LOGIN FORM -->
    <div class="container">
        <div class="row justify-content-center wrapper" id="login-box">
            <div class="col-lg-10 my-auto">
                <div class="card-group myShadow">
                    <div class="card round-left p-4" style="flex-grow: 1.4;">
                        <h1 class="text-center font-weight-bold text-info">Enter New Password</h1>
                        <hr class="my-3">
                        <form action="#" method="post" class="px-3" id="reset-link-form">
                            <div class="text-center lead my-2"><?= $msg; ?></div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-key"></i></div>
                                </div>
                                <input type="password" class="form-control" name="new-password" placeholder="New Password" required minlength="6">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-key"></i></div>
                                </div>
                                <input type="password" class="form-control" name="confirm-new-password" placeholder="Confirm New Password" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Reset Password" name="reset-password" class="btn btn-info btn-block myBtn">
                            </div>
                        </form>
                    </div>
                    <div class="card justify-content-center myColor">
                        <h1 class="text-center font-weight-bold text-white">Book Borrowing System
                            <hr class="my-3 bg-light myHr">
                            <p class="text-center font-weight-bolder text-light lead">
                                Borrow your favorite books by joining us here!
                            </p>
                            <button class="btn btn-outline-light btn-lg align-center font-weight-center mt-4 myLinkBtn" id="register-link">Sign Up</button>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>

</body>
</html>