<h1>Futbol Leagues</h1>
<?php
include "view-clubs-addLeague.php";
?>
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
        <?php
          include "view-clubs-editLeague.php";
        ?>  
      </td>
       <td>
        <form method="post" action="">
          <input type="hidden" name="cid" value="<?php echo $league['league_ID']; ?>">
          <input type="hidden" name="actionType" value="Delete">
          <button type="submit" class="btn btn-outline-primary" onclick="return confirm('Are you sure?');">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ban" viewBox="0 0 16 16">
              <path d="M15 8a6.97 6.97 0 0 0-1.71-4.584l-9.874 9.875A7 7 0 0 0 15 8M2.71 12.584l9.874-9.875a7 7 0 0 0-9.874 9.874ZM16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0"/>
            </svg></button>
        </form>
      </td>
      <td>
        <form method="post" action="clubs-in-league.php">
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
