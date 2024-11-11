<?php
require_once("util-db.php");
require_once("model-leagues.php");

$pageTitle = "Soccer Leagues";
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
      case "Delete":
        if (deleteClubs($_POST['cid'])) {
            echo '<div class="alert alert-success" role="alert">Club Deleted!</div>';
            }
        else {
            echo '<div class="alert alert-danger" role="alert">Error Deleting Club.</div>';
        }
        break;
      case "Edit":
        if (updateClubs($_POST['cName'], $_POST['cCity'], $_POST['cCountry'], $_POST['cid'])) {
            echo '<div class="alert alert-success" role="alert">Club has been edited!</div>';
            }
        else {
            echo '<div class="alert alert-danger" role="alert">Error editing Club.</div>';
        }
        break;
  }
}

$leagues = selectLeagues();
include "view-leagues.php";
include "view-footer.php";
?>
