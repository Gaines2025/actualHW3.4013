<div class="row">
  <div class="col">
<h1>Futbol Clubs</h1>
  </div>
    <div class="col-auto">
<?php
include "view-clubs-addClub.php";
?>
    </div>
</div>

<table class="table table-striped">
  <thead>
    <th>Club Team Name</th>
    <th>Country of Club</th>
    <th>City of Club</th>
    <th>Club ID</th>
    <th></th>
    <th></th>
    <th></th>
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
      <td><a href="players-on-clubs.php?id=<?php echo $club['club_ID']; ?>">Players on Clubs</a></td>
      <td>
        <?php
          include "view-clubs-editClub.php";
        ?>
        
        
      </td>
      <td>
        <form method="post" action="">
          <input type="hidden" name="cid" value="<?php echo $club['club_ID']; ?>">
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
