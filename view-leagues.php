<h1>Futbol Leagues</h1>
<table class="table table-striped">
  <thead>
    <th>League</th>
    <th>Country of League</th>
    <th>League ID#</th>
    <th></th>
  </thead>
  <tbody>
<?php
  while($league = $leagues->fetch_assoc()) {
?>
    <tr>
      <td><?php echo $league['league_name']; ?></td>
      <td><?php echo $league['country_origin']; ?></td>
      <td><?php echo $league['league_ID']; ?></td>
      <td>
        <form method="post" action="view-clubs-in-league.php">
          <input type="hidden" name="cid" value="<?php echo $league['league_ID']; ?>">
          <button type="submit" class="btn btn-outline-primary">Teams In League</button>
        </form>
      </td>
    </tr>
<?php
    }
?>
  </tbody>
</table>
