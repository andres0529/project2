<?php

require_once './includes/config.inc.php';

$query = "select page_title from pages";
$stmt = $pdo->prepare($query);
$stmt->execute();
$pagetitles   = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($pagetitles as $title) {

    if ($title['page_title'] == $page_title) {
        echo " 
            <li style='color: red;''>
               " . $title['page_title'] . "
            </li>
        ";
    } else {
        echo " 
            <li>
               " . $title['page_title'] . "
            </li>
        ";
    }
}
