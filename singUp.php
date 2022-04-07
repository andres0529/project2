<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Sign Up</title>

</head>
<!-- File with driver to manage error for this view -->
<?php require './includes/singup-config/handler-error-form.php' ?>

<body id="page-singup">
    <div class="container" id="signup">
        <div class="h1-login">
            <img src="./img/logo.png" alt="" width="325">
        </div>
        <hr>
        <div class="row justify-content-center mt-5">
            <aside class="col-sm-4">
                <div class="card">
                    <article class="card-body">
                        <a href="./login.php" class="float-right btn btn-outline-primary">Log In</a>
                        <h4 class="card-title mb-4 mt-1 text-center">Sign Up</h4>
                        <form method="POST" action="./includes/singup-config/driver-form.php">
                            <div class="form-group">
                                <label for="name">Your Full Name</label>
                                <input required name="name" class="form-control" placeholder="Full Name" type="name" id="name">
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <label for="email">Your email</label> <span><?php if (handlerError() == 'emailExists') {
                                                                                echo '-Email already exists-';
                                                                            } ?></span>
                                <input required name="email" class="form-control" placeholder="email" type="email" id="email">
                            </div> <!-- form-group// -->

                            <div class="form-group">
                                <label for="username">Username</label> <span><?php if (handlerError() == 'username') {
                                                                                    echo '-Invalid Username-';
                                                                                } elseif (handlerError() == 'usernametaken') {
                                                                                    echo '-Username was taken-';
                                                                                } ?></span>
                                <input required name="uid" class="form-control" placeholder="username" type="username" id="uid">
                            </div> <!-- form-group// -->

                            <div class="form-group">
                                <label for="pwd">Your password</label> <span><?php if (handlerError() == 'password') {
                                                                                    echo '-Passwords do not match-';
                                                                                }  ?></span>
                                <input required name="pwd" class="form-control" placeholder="******" type="password" id="pwd">
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <label for="pwdRepeat">Repeat your password</label> <span><?php if (handlerError() == 'password') {
                                                                                                echo 'Passwords do not match';
                                                                                            }  ?></span>
                                <input required name="pwdRepeat" class="form-control" placeholder="******" type="password" id="pwdRepeat">
                            </div> <!-- form-group// -->

                            <div class="form-group">
                                <button type="submit" id="submit" class="btn btn-primary btn-block" name="submit"> Register </button>
                            </div> <!-- form-group// -->
                        </form>
                    </article>
                </div> <!-- card.// -->
        </div>
</body>

</html>