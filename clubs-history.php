<?php
require_once("util-db.php");
require_once("model-clubs-history.php");

$pageTitle = "Soccer Clubs";
include "view-header.php";
$clubs = selectClubs();
include "view-clubs-history.php";
include "view-footer.php";
?>
