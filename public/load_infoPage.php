<?php
//Code to cath the current URL
$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url = explode('=', $url);
$currentId = strtolower(end($url));

//Catch the info of the current page
$query = "SELECT * from pages where page_id=:currentId";
$stmt = $pdo->prepare($query);
$stmt->bindParam('currentId', $currentId, PDO::PARAM_STR);
$stmt->execute();
$infoPage   = $stmt->fetch(PDO::FETCH_ASSOC);

$page_img1 = $infoPage["page_img1"];
$page_img2 = $infoPage["page_img2"];
$page_title = $infoPage["page_title"];
$page_logo = $infoPage["page_logo"];
$page_text1 = $infoPage["page_text1"];
$page_text2 = $infoPage["page_text2"];
$page_type = $infoPage["page_type"];
