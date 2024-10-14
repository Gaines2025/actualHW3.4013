<h1>Players on Clubs</h1>
<table class="table table-striped">
  <thead>
    <th>League</th>
    <th>Country of League</th>
    <th>League ID#</th>
  </thead>
  <tbody>
<?php
  while($club = $clubs->fetch_assoc()) {
?>
    <tr>
      <td><?php echo $club['club_name']; ?></td>
      <td><?php echo $club['club_country']; ?></td>
      <td><?php echo $club['club_ID']; ?></td>
    </tr>
<?php
    }
?>
  </tbody>
</table>
