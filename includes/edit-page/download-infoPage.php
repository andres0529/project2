<?php
$idPagetoEdit = $_POST["edit"];

require_once './includes/config.inc.php';

$query = "select * from pages where page_id=:idPagetoEdit";
$stmt = $pdo->prepare($query);
$stmt->bindParam('idPagetoEdit', $idPagetoEdit, PDO::PARAM_STR);
$stmt->execute();
$users   = $stmt->fetch(PDO::FETCH_ASSOC);

$page_img1 = $users["page_img1"];
$page_img2 = $users["page_img2"];
$page_text1 = $users["page_text1"];
$page_text2 = $users["page_text2"];
$page_title = $users["page_title"];
$page_logo = $users["page_logo"];
$page_type = $users["page_type"];


