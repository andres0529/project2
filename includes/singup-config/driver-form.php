<?php
$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$username = trim($_POST["uid"]);
$userpassword = $_POST["pwd"];
$pwdRepeat = $_POST["pwdRepeat"];

require_once '../config.inc.php';
require_once './functions-form.php';

//Check if the username is invalid
if (invalidUid($username) !== false) {
    header("location: ../../singUp.php?error=invalidusername");
    exit();
}

//Check if the username has been already taken
if (uidExists($pdo, $username, $email) !== false) {
    header("location: ../../singUp.php?error=usernametaken");
    exit();
}

//Check if the email is invalid 
if (invalidEmail($email) !== false) {
    header("location: ../../singUp.php?error=invalidemail");
    exit();
}

//Check if the email already exits 
if (emailExists($pdo, $email) !== false) {
    header("location: ../../singUp.php?error=emailalreadyexits");
    exit();
}

//Check if the password and repeat passwprd are same
if (pwdMatch($userpassword, $pwdRepeat) !== false) {
    header("location: ../../singUp.php?error=passwordsdontmatch");
    exit();
}

//Call the function createUser and Check if the user was registered succesfully
if (!createUser($name, $username, $userpassword, $email, $pdo)) {
    header("location: ../../singUp.php?error=errordatabase");
    exit();
}
header("location: ../../login.php?isOk");
exit();
