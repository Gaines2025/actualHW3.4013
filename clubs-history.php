<?php
require_once("util-db.php");
require_once("model-clubs-history.php");

$pageTitle = "Soccer Clubs";
include "view-header.php";
$leagues = selectLeagues();
include "view-clubs-history.php";
include "view-footer.php";
?>
