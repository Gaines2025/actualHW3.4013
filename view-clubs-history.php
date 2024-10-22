<h1>Futbol Clubs</h1>
<div class="accordion" id="accordionExample">
<?php
  while($league = $leaguess->fetch_assoc()) {
?>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <?php echo $club['club_name']; ?>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong>
      </div>
    </div>
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
</div>
