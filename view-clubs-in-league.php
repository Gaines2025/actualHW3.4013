<h1>Clubs In League</h1>
<?php
include "view-clubsinleague-addClub.php";
?>
<table class="table table-striped">
  <thead>
    <th>Club Name</th>
    <th>Club City</th>
    <th>Club Country</th>
    <th>Club ID</th>
  </thead>
  <tbody>
<?php
  while($clubsInLeague = $clubsInLeagues->fetch_assoc()) {
?>
    <tr>
      <td><?php echo $clubsInLeague['club_name']; ?></td>
      <td><?php echo $clubsInLeague['club_city']; ?></td>
      <td><?php echo $clubsInLeague['club_country']; ?></td>
      <td><?php echo $clubsInLeague['club_ID']; ?></td>
    </tr>
    <?php
      include "view-clubsinleague-editClub.php";
    ?>
<?php
    }
?>
  </tbody>
</table>
