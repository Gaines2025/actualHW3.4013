<h1>Manager Ages</h1>
<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Pep Guardiola', 'Manuel Pellegrini', 'Gary ONeil', 'Oliver Glasner', 'Marco Rose', 'Vincent Kompany'],
      datasets: [{
        label: 'Manager Age',
        data: [45, 71, 41, 50, 48, 38],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
