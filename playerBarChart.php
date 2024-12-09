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
      labels: ['Erling Haaland', 'Cole Palmer', 'Lionel Messi', 'Lamine Yamal', 'Khvicha Kvaratskhelia', 'Florian Wirts', 'Bradley Barcola', 'Darwin Nunez', 'Luis Suarez'],
      datasets: [{
        label: '# of Votes',
        data: [24, 22, 37, 18, 23, 21, 22, 23, 36],
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
