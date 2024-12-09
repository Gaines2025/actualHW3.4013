<?php
require_once("util-db.php");
require_once("model-players.php");

$pageTitle = "Player Ages";
include "view-header.php";

$players = selectPlayers();
include "playerBarChart.php";
include "view-footer.php";
?>
