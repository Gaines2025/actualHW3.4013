<h1>Futbol Clubs</h1>
<div class="accordion" id="accordionExample">
  
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
</div>
