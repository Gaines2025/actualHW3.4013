<?php
require_once("util-db.php");
require_once("model-clubs.php");

$pageTitle = "Soccer Clubs";
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
      case "Add":
        insertClubs($_POST['cName'], $_POST['cCity'], $_POST['cCountry']);
        break;
  }
}
  
$clubs = selectClubs();
include "view-clubs.php";
include "view-footer.php";
?>
