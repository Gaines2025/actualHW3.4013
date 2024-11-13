<?php
require_once("util-db.php");
require_once("model-managers.php");

$pageTitle = "Soccer Managers";
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
      case "Add":
        if (insertManagers($_POST['mName'], $_POST['mClub'], $_POST['mCountry'], $_POST['mAge'])) {
            echo '<div class="alert alert-success" role="alert">Manager has succesfully been added!</div>';
            }
        else {
            echo '<div class="alert alert-danger" role="alert">Error Adding Manager.</div>';
        }
        break;
      case "Delete":
        if (deleteClubs($_POST['mid'])) {
            echo '<div class="alert alert-success" role="alert">Manager Deleted!</div>';
            }
        else {
            echo '<div class="alert alert-danger" role="alert">Error Deleting Manager.</div>';
        }
        break;
      case "Edit":
        if (updateClubs($_POST['mName'], $_POST['mClub'], $_POST['mCountry'], $_POST['mAge'], $_POST['mid'])) {
            echo '<div class="alert alert-success" role="alert">Manager has been edited!</div>';
            }
        else {
            echo '<div class="alert alert-danger" role="alert">Error editing Manager.</div>';
        }
        break;
  }
}

$managers = selectManagers();
include "view-managers.php";
include "view-footer.php";
?>
