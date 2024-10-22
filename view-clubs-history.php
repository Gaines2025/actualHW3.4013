<h1>Futbol Clubs</h1>
<div class="accordion" id="accordionExample">
<?php
  while($club = $clubs->fetch_assoc()) {
?>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
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
