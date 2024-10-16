<?php
require_once("util-db.php");
require_once("model-players-on-clubs.php");

$pageTitle = "Players on Clubs";
include "view-header.php";
$playerClubs = selectPlayersOnClubs($_GET['id']);
include "view-players-on-clubs.php";
include "view-footer.php";
?>
