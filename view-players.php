<h1>Futbol Players</h1>
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
    </tr>
<?php
    }
?>
  </tbody>
</table>
