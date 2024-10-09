<h1>Leagues</h1>
<table class="table table-striped">
  <thead>
    <th>League</th>
    <th>Country of League</th>
    <th>League ID#</th>
  </thead>
  <tbody>
<?php
  while($league = $leagues->fetch_assoc()) {
?>
    <tr>
      <td><?php echo $league['league_name']; ?></td>
      <td><?php echo $league['country_origin']; ?></td>
      <td><?php echo $league['league_ID']; ?></td>
    </tr>
  }
    }
?>
  </tbody>
</table>
