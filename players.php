<?php
require_once("util-db.php");
require_once("model-players.php");

$pageTitle = "Futbol Players";
include "view-header.php";
$players = selectPlayers();
include "view-players.php";
include "view-footer.php";
?>
