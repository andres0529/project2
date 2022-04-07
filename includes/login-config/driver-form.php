<?php

$email = trim($_POST["email"]);
$userpassword = $_POST["pwd"];
require '../config.inc.php';
require '../login-config/functions-form.php';

//-------conditions to check info on the DB-------

//Check if the email doesn't exits 
if (emailDoesNotExists($pdo, $email) !== false) {
    header("location: ../../login.php?error=emaildoesnotexist");
    exit();
}

// Check if the password is incorrect 
if (pwdWrong($pdo, $userpassword, $email) !== false) {
    header("location: ../../login.php?error=pwdwrong");
    exit();
}



// Connect to the Home page because login was correct
