<?php
require_once("util-db.php");
require_once("model-managers.php");

$pageTitle = "Soccer Managers";
include "view-header.php";
$managers = selectManagers();
include "view-managers.php";
include "view-footer.php";
?>
