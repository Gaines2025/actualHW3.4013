<?php
require_once("util-db.php");
require_once("model-leagues.php");

$pageTitle = "Soccer Leagues";
include "view-header.php";

$leagues = selectLeagues();
include "leaguesAmountChart.php";
include "view-footer.php";
?>
