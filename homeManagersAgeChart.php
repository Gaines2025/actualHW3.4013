<?php
require_once("util-db.php");
require_once("model-managers.php");

$pageTitle = "Manager Ages";
include "view-header.php";

$managers = selectManagers();
include "managersAgeChart.php";
include "view-footer.php";
?>
