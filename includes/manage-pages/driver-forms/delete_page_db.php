<?php
require_once './../../config.inc.php';

$idPage_to_delete = $_POST["id"];




 $query = "DELETE FROM  pages WHERE page_id=:idPage_to_delete;";

// echo $email_to_delete;

$stmt = $pdo->prepare($query);
$stmt->bindParam('idPage_to_delete', $idPage_to_delete, PDO::PARAM_STR);

if ($stmt->execute()) {
    header("location: ./../../../manage_pages.php");
} else {
    header("location: ./../../../manage_pages.php?error=errorindb");
}
