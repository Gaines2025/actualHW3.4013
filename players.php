<?php
require_once("util-db.php");
require_once("model-players.php");

$pageTitle = "Futbol Players";
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
      case "Add":
        if (insertPlayers($_POST['pName'], $_POST['pCountry'], $_POST['pAge'], $_POST['pLeague'])) {
            echo '<div class="alert alert-success" role="alert">Player has succesfully been added!</div>';
            }
        else {
            echo '<div class="alert alert-danger" role="alert">Error Adding Player.</div>';
        }
        break;
      case "Delete":
        if (deletePlayers($_POST['pid'])) {
            echo '<div class="alert alert-success" role="alert">Player Deleted!</div>';
            }
        else {
            echo '<div class="alert alert-danger" role="alert">Error Deleting Player.</div>';
        }
        break;
      case "Edit":
        if (updatePlayers($_POST['pName'], $_POST['pCountry'], $_POST['pAge'], $_POST['pLeague'], $_POST['pid'])) {
            echo '<div class="alert alert-success" role="alert">Player has been edited!</div>';
            }
        else {
            echo '<div class="alert alert-danger" role="alert">Error editing Player.</div>';
        }
        break;
  }
}

$players = selectPlayers();
include "view-players.php";
include "view-footer.php";
?>
