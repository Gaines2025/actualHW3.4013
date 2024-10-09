<?php
require_once("util-db.php");
require_once("model-leagues.php");

$pageTitle = "Soccer Leagues";
include "view-header.php";
$league = selectLeagues();
include "view-leagues.php";
include "view-footer.php";
?>
