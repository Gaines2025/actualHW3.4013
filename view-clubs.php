<h1>Futbol Clubs</h1>
<table class="table table-striped">
  <thead>
    <th>Club Team Name</th>
    <th>Country of Club</th>
    <th>City of Club</th>
    <th>Club ID</th>
  </thead>
  <tbody>
<?php
  while($club = $clubs->fetch_assoc()) {
?>
    <tr>
      <td><?php echo $club['club_name']; ?></td>
      <td><?php echo $club['club_country']; ?></td>
      <td><?php echo $club['club_city']; ?></td>
      <td><?php echo $club['club_ID']; ?></td>
      <td><a href="players-on-clubs.php?id=<?php echo $club['club_ID']; ?>">Clubs</a></td>
    </tr>
<?php
    }
?>
  </tbody>
</table>
