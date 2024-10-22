<h1>Futbol Clubs</h1>
<div class="accordion" id="accordionExample">
<?php
  while($league = $leagues->fetch_assoc()) 
  {
?>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <?php echo $league['league_name']; ?>
        <?php echo $league['league_ID']; ?>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong>
      </div>
    </div>
<?php
    }
?>
</div>
