<?php

//Code to cath the current URL and redirect to the first page if it´s the first load of the site
$fullURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$fullURL = explode('/', $fullURL);
$currentURL = strtolower(end($fullURL));

if ($currentURL == "index.php") {
    //Catch the first ID PAGE in the table pages
    $query = "SELECT page_id from pages";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $firstIdPage   = $stmt->fetch(PDO::FETCH_ASSOC);
    $page_id = $firstIdPage["page_id"];

    header("location: index.php?page=" . $page_id);
}