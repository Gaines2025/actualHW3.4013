<?php
require_once("util-db.php");
require_once("model-clubs-history.php");

$pageTitle = "Clubs History";
include "view-header.php";
$clubHistorys = selectClubsHistory();
include "view-clubs-history.php";
include "view-footer.php";
?>
