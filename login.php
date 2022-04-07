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
    <title>Log in</title>

</head>
<!-- File with driver for this view -->
<?php require './includes/login-config/handler-error-form.php' ?>

<body id="page-login">
    <div class="container" id="login">
        <div class="h1-login">
            <h1>GEORGIAN CMS</h1>
        </div>
        <hr>
        <?php userCreated(); ?>
        <div class="row justify-content-center mt-5">
            <aside class="col-sm-4">
                <div class="card">
                    <article class="card-body">
                        <a href="./singUp.php" class="float-right btn btn-outline-primary">Sign Up</a>
                        <h4 class="card-title mb-4 mt-1 text-center">Log In</h4>
                        <form method="POST" action="./includes/login-config/driver-form.php">
                            <div class="form-group">
                                <label for="email">Your email or Username</label>
                                <input required name="email" class="form-control" placeholder="Email" type="" id="email">
                            </div> <!-- form-group// -->
                            <div class="form-group">

                                <label for="pwd">Your password</label>
                                <input required name="pwd" class="form-control" placeholder="******" type="password" id="pwd">
                            </div> <!-- form-group// -->

                            <div class="form-group">
                                <button type="submit" id="submitBtnLogin" class="btn btn-primary btn-block" name="submitBtnLogin"> Login </button>
                            </div> <!-- form-group// -->
                        </form>
                    </article>
                </div> <!-- card.// -->
                <span><?php echo handlerError();  ?></span>
        </div>
</body>

</html>