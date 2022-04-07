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
try {
    $query = "select * from registered_users where username=:email or email=:email";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('username', $email, PDO::PARAM_STR);
    $stmt->bindParam('email', $email, PDO::PARAM_STR);
    $stmt->execute();
    $count = $stmt->rowCount();
    $row   = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($count == 1 && !empty($row)) {

        session_start();
        $_SESSION["userid"] = $row["user_id"];
        $_SESSION["useremail"] = $row["email"];
        $_SESSION["userpwd"] = $row["pwd"];
        $_SESSION["userfullame"] = $row["fullname"];
        $_SESSION["isActive"] = $row["activated"];
        $_SESSION["username"] = $row["username"];
        $_SESSION["creationdate"] = $row["creationdate"];
        $_SESSION["lastlogin"] = $row["lastlogin"];
        header("location: ../../home.php");
    }
} catch (PDOException $e) {
    echo "Error : " . $e->getMessage();
}
