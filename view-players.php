<h1>Futbol Players</h1>
<?php
include view-players-addPlayer.php
?>
<table class="table table-striped">
  <thead>
    <th>Player's Name</th>
    <th>Country of Player</th>
    <th>Player's League</th>
    <th>Player's Age</th>
  </thead>
  <tbody>
<?php
  while($player = $players->fetch_assoc()) {
?>
    <tr>
      <td><?php echo $player['player_name']; ?></td>
      <td><?php echo $player['player_country']; ?></td>
      <td><?php echo $player['player_league']; ?></td>
      <td><?php echo $player['player_age']; ?></td>
      <td>
        <?php
          include "view-players-editPlayer.php";
        ?>
      
      </td>
      <td>
        <form method="post" action="">
          <input type="hidden" name="pid" value="<?php echo $player['player_ID']; ?>">
          <input type="hidden" name="actionType" value="Delete">
          <button type="submit" class="btn btn-outline-primary" onclick="return confirm('Are you sure?');">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ban" viewBox="0 0 16 16">
              <path d="M15 8a6.97 6.97 0 0 0-1.71-4.584l-9.874 9.875A7 7 0 0 0 15 8M2.71 12.584l9.874-9.875a7 7 0 0 0-9.874 9.874ZM16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0"/>
            </svg></button>
        </form>
      </td>
    </tr>
<?php
    }
?>
  </tbody>
</table>
