<?php
require_once("util-db.php");
require_once("model-leagues.php");

$pageTitle = "Soccer Leagues";
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
      case "Add":
        if (insertLeagues($_POST['lName'], $_POST['lCountry'])) {
            echo '<div class="alert alert-success" role="alert">League has succesfully been added!</div>';
            }
        else {
            echo '<div class="alert alert-danger" role="alert">Error Adding League.</div>';
        }
        break;
      case "Delete":
        if (deleteLeagues($_POST['lid'])) {
            echo '<div class="alert alert-success" role="alert">League Deleted!</div>';
            }
        else {
            echo '<div class="alert alert-danger" role="alert">Error Deleting League.</div>';
        }
        break;
      case "Edit":
        if (updateLeagues($_POST['lName'], $_POST['lCountry'], $_POST['lid'])) {
            echo '<div class="alert alert-success" role="alert">League has been edited!</div>';
            }
        else {
            echo '<div class="alert alert-danger" role="alert">Error editing league.</div>';
        }
        break;
  }
}

$leagues = selectLeagues();
include "view-leagues.php";
include "view-footer.php";
?>
