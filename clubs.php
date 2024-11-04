<?php
require_once("util-db.php");
require_once("model-clubs.php");

$pageTitle = "Soccer Clubs";
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
      case "Add":
        if (insertClubs($_POST['cName'], $_POST['cCity'], $_POST['cCountry'])) {
            echo '<div class="alert alert-success" role="alert">Club has succesfully been added!</div>';
            }
        else {
            echo '<div class="alert alert-danger" role="alert">Error Adding Club.</div>';
        }
        
        break;
  }
}
  
$clubs = selectClubs();
include "view-clubs.php";
include "view-footer.php";
?>
