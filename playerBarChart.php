<h1>Player Ages</h1>
<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [
        <?php
while ($player = $players->fetch_assoc()) {
  echo $players['player_name'] . ", ";
}
?>
      ],
      datasets: [{
        label: 'Players',
        data: [
          <?php
while ($player = $players->fetch_assoc()) {
  echo $players['player_age'] . ", ";
}
?>
        ],
      }]
    },
  });
</script>
