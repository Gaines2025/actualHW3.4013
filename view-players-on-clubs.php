<h1>Players on Clubs</h1>
<table class="table table-striped">
  <thead>
    <th>Player Name</th>
    <th>Country Origin of Player</th>
    <th>Player Age</th>
    <th>Player Current League</th>
    <th>Player ID</th>
  </thead>
  <tbody>
<?php
  while($playerClub = $playerClubs->fetch_assoc()) {
?>
    <tr>
      <td><?php echo $playerClub['player_name']; ?></td>
      <td><?php echo $playerClub['player_country']; ?></td>
      <td><?php echo $playerClub['player_age']; ?></td>
      <td><?php echo $playerClub['player_league']; ?></td>
      <td><?php echo $playerClub['player_ID']; ?></td>
    </tr>
<?php
    }
?>
  </tbody>
</table>
