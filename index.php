<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Borrowing System</title>
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
                        <h1 class="text-center font-weight-bold text-info">Sign In Account</h1>
                        <hr class="my-3">
                        <form action="#" method="post" class="px-3" id="login-form">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                                </div>
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-key"></i></div>
                                </div>
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox float-left">
                                    <input type="checkbox" name="rem" class="custom-control-input" id="customCheck">
                                    <label for="customCheck" class="custom-control-label">Remember me</label>
                                </div>
                                <div class="forgot float-right">
                                    <a href="#" id="forgot-link">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group">
                                <input type="submit" value="Sign In" id="login-btn" class="btn btn-info btn-block myBtn">
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
    <!-- END LOGIN FORM -->
    
    <!-- REGISTRATION FROM -->
    <div class="container">
        <div class="row justify-content-center wrapper" id="register-box" style="display: none;">
            <div class="col-lg-10 my-auto">
                <div class="card-group myShadow">
                <div class="card justify-content-center myColor">
                        <h1 class="text-center font-weight-bold text-white">Book Borrowing System
                            <hr class="my-3 bg-light myHr">
                            <p class="text-center font-weight-bolder text-light lead">
                                Borrow your favorite books by signing in!
                            </p>
                            <button class="btn btn-outline-light btn-lg align-center font-weight-center mt-4 myLinkBtn" id="login-link">Sign In</button>
                        </h1>
                    </div>
                    <div class="card round-left p-4" style="flex-grow: 1.4;">
                        <h1 class="text-center font-weight-bold text-info">Create Account</h1>
                        <hr class="my-3">
                        <form action="#" method="post" class="px-3" id="register-form">
                            <div id="reg-error-alert"></div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user-alt"></i></div>
                                </div>
                                <input type="text" class="form-control" name="reg-fullname" placeholder="Full name" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                                </div>
                                <input type="email" class="form-control" name="reg-email" placeholder="Email" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-key"></i></div>
                                </div>
                                <input type="password" class="form-control" id="reg-password" placeholder="Password" minlength="6" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-key"></i></div>
                                </div>
                                <input type="password" class="form-control" name="reg-confirm-password" id="reg-confirm-password" placeholder="Confirm Password" minlength="6" required>
                            </div>
                            <div class="form-group">
                                <div id="passwordError" class="text-danger font-weight-bold"></div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group">
                                <input type="submit" value="Sign Up" id="register-btn" class="btn btn-info btn-block myBtn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END REGISTRATION FORM -->

    <!-- FORGOT PASSWORD -->
    <div class="container">
        <div class="row justify-content-center wrapper" id="reset-box" style="display: none;">
            <div class="col-lg-10 my-auto">
                <div class="card-group myShadow">
                <div class="card justify-content-center myColor">
                        <h1 class="text-center font-weight-bold text-white">Book Borrowing System
                            <hr class="my-3 bg-light myHr">
                            <p class="text-center font-weight-bolder text-light lead">
                                Reset Password
                            </p>
                            <button class="btn btn-outline-light btn-lg align-center font-weight-center mt-4 myLinkBtn" id="back-link">Back</button>
                        </h1>
                    </div>
                    <div class="card round-left p-4" style="flex-grow: 1.4;">
                        <h1 class="text-center font-weight-bold text-info">Forgot Password</h1>
                        <hr class="my-3">
                        <p class="lead text-center text-secondary">To reset your password, enter your email address.</p>
                        <form action="#" method="post" class="px-3" id="login-form">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                                </div>
                                <input type="text" id="reset-email" class="form-control" placeholder="Email">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group">
                                <input type="submit" value="Sign In" id="reset-btn" class="btn btn-info btn-block myBtn">
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- END FORGOT PASSWORD  -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#register-link").click(function(){
                $("#login-box").hide();
                $("#register-box").show();
            });

            $("#login-link").click(function(){
                $("#register-box").hide();
                $("#login-box").show();
            });

            $("#forgot-link").click(function(){
                $("#login-box").hide();
                $("#reset-box").show();
            });

            $("#back-link").click(function(){
                $("#reset-box").hide();
                $("#login-box").show();
            });

            //Register Ajax Request
            $("#register-btn").click(function(e){
                if($("#register-form")[0].checkValidity()){
                    e.preventDefault(); // to prevent the page to refresh
                    $("#register-btn").val('Please Wait...');
                    if($("#reg-password").val() != $("#reg-confirm-password").val()){
                        $("#passwordError").text('* Password did not matched!');
                        $("#register-btn").val('Sign Up');
                    }else{
                        $("#passwordError").text('');
                        $.ajax({
                            url: 'action.php',
                            method: 'post',
                            data: $("#register-form").serialize()+'&action=register',
                            success: function(response){
                                $("#register-btn").val('Sign Up');
                                if(response === 'register'){
                                    window.location = 'index.php';
                                    alert("Registered successfully! Try to sign in!");
                                }else{
                                    $("#reg-error-alert").html(response);
                                }
                            }
                        })
                    }
                }
            });
        })
    </script>
</body>
</html>