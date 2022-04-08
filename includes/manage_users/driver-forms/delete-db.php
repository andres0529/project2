<?php
require_once './../../config.inc.php';

$email_to_delete = $_POST["email"];


$query = "DELETE FROM registered_users WHERE email=:email_to_delete;";

echo $email_to_delete;

$stmt = $pdo->prepare($query);
$stmt->bindParam('email_to_delete', $email_to_delete, PDO::PARAM_STR);

if ($stmt->execute()) {
    header("location: ./../../../manage_users.php");
} else {
    header("location: ./../../../manage_users.php?error=errorindb");
}
