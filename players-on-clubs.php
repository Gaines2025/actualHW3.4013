<?php
require_once("util-db.php");
require_once("model-players-on-clubs.php");

$pageTitle = "Players on Teams";
include "view-header.php";
$playersClubs = selectPlayersOnClubs($_GET['id']));
include "view-players-on-clubs.php";
include "view-footer.php";
?>
