<?php
require_once './../../config.inc.php';


$email_to_edit = $_POST["email"];
$username_to_edit = trim($_POST["username"]);
$fullname_to_edit = $_POST["fullname"];
$password_to_edit = $_POST["password"];


if ($password_to_edit == '') {
    $query = "UPDATE registered_users SET fullname=:fullname_to_edit WHERE email=:email_to_edit;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('fullname_to_edit', $fullname_to_edit, PDO::PARAM_STR);
    $stmt->bindParam('email_to_edit', $email_to_edit, PDO::PARAM_STR);
} else {
    $query = "UPDATE registered_users SET fullname=:fullname_to_edit, pwd=:password_to_edit WHERE email=:email_to_edit;";
    $hashed_pwd= password_hash($password_to_edit, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('fullname_to_edit', $fullname_to_edit, PDO::PARAM_STR);
    $stmt->bindParam('password_to_edit', $hashed_pwd, PDO::PARAM_STR);
    $stmt->bindParam('email_to_edit', $email_to_edit, PDO::PARAM_STR);
}




if ($stmt->execute()) {
    header("location: ./../../../manage_users.php");
} else {
    header("location: ./../../../manage_users.php?error=errorindb");
}
