<?php

session_start();

require_once './../../config.inc.php';

$title_page = trim($_POST["title_page"]);
$wireframe = $_POST["wireframe"];

// echo $title_page . "   " . $wireframe . "    " . $_SESSION["username"];

$query = "INSERT INTO pages(page_title, created_by, page_type) 
    VALUES(:title_page, :username, :wireframe);";


$stmt = $pdo->prepare($query);
$stmt->bindParam('title_page', $title_page, PDO::PARAM_STR);
$stmt->bindParam('username', $_SESSION["username"], PDO::PARAM_STR);
$stmt->bindParam('wireframe', $wireframe, PDO::PARAM_STR);

if ($stmt->execute()) {
    header("location: ./../../../manage_pages.php");
} else {
    header("location: ./../../../manage_pages.php?error=errorindb");
}