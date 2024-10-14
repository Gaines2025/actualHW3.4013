<?php
require_once("util-db.php");
require_once("model-players-on-teams.php");

$pageTitle = "Players on Teams";
include "view-header.php";
$playersTeams = selectPlayersOnTeams($_GET['id']));
include "view-players-on-teams.php";
include "view-footer.php";
?>
