<h1>Leagues + Clubs</h1>
<div class="accordion" id="accordionExample">
<?php
  while($league = $leagues->fetch_assoc()) 
  {
?>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <?php echo $league['league_ID'] . ") " . $league['league_name']; ?>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>
          <ul class="list-group">
            <li class="list-group-item"><?php echo "The league the country is from is: $league['league_name']; ?></li>
          </ul>
        </strong>
    <?php
      $clubsInLeagues = selectClubsInLeague($league['league_ID']);
      while($clubsInLeague = $clubsInLeagues->fetch_assoc())
      {
    ?>
        <p>
          <ul class="list-group">
            <li class="list-group-item"><?php echo $clubsInLeague['club_name']; ?></li>
          </ul>
        </p>
    <?php
      }  
    ?>
        
      </div>
    </div>
<?php
    }
?>
</div>
