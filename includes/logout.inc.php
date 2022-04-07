<?php
session_start();
require './config.inc.php';
// Update the field lastlogin in the database
$query = "update registered_users set lastlogin=now() where username=:email or email=:email";
$stmt = $pdo->prepare($query);
$stmt->bindParam('username', $_SESSION["username"], PDO::PARAM_STR);
$stmt->bindParam('email', $_SESSION["useremail"], PDO::PARAM_STR);
$stmt->execute();
$count = $stmt->rowCount();
$row   = $stmt->fetch(PDO::FETCH_ASSOC);

session_unset();
session_destroy();

header("location: ./../login.php?sessionend");
