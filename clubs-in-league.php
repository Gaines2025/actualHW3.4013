<?php
require_once("util-db.php");
require_once("model-clubs-in-league.php");

$pageTitle = "Clubs in League";
include "view-header.php";
$clubsInLeagues = selectClubsInLeague($_POST['cid']);
include "view-clubs-in-league.php";
include "view-footer.php";
?>
