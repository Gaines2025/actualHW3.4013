<div class="row">
  <div class="col">
<h1>Futbol Clubs</h1>
  </div>
    <div class="col-auto">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
      </svg>
    </div>
</div>

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
