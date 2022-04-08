<?php
require_once 'config.inc.php';

$clubName = $_POST["clubName"];
$ground = trim($_POST["ground"]);
$clubId= $_POST["clubId"];


$query = "UPDATE clubs SET clubname=:clubname, ground=:ground WHERE clubid=:clubid;";
$stmt = $pdo->prepare($query);
$stmt->bindParam('clubname', $clubName, PDO::PARAM_STR);
$stmt->bindParam('ground', $ground, PDO::PARAM_STR);
$stmt->bindParam('clubid', $clubId, PDO::PARAM_STR);
if ($stmt->execute()) {
    header("location: ./../home.php");
} else {
    header("location: ./../home.php?ERROR");
}