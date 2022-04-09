<?php

require_once './includes/config.inc.php';

$query = "SELECT page_title, page_id FROM pages";
$stmt = $pdo->prepare($query);
$stmt->execute();
$pagetitles   = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($pagetitles as $title) {
    echo "<li>
                <a href='./index.php?page=".$title["page_id"] ."'>".$title["page_title"]."</a>
        </li>";
}
