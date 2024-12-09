<h1>Percentage of Clubs in Country</h1>
<!DOCTYPE html>
<html>
<head>
    <title>Doughnut Chart Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div style="width: 50%; margin: auto;">
        <canvas id="doughnutChart"></canvas>
    </div>

    <script>
        const ctx = document.getElementById('doughnutChart').getContext('2d');

        const data = {
            labels: ['England', 'Spain', 'Germany', 'Italy', 'France', 'United States'],
            datasets: [{
                label: 'Percentage of Clubs in Country',
                data: [3, 1, 1, 2, 2, 1],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(255, 206, 86, 0.6)',
                    'rgba(75, 192, 192, 0.6)',
                    'rgba(153, 102, 255, 0.6)',
                    'rgba(200, 99, 132, 1)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(200, 99, 132, 1)'
                ],
                borderWidth: 1
            }]
        };

        const config = {
            type: 'doughnut',
            data: data,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        enabled: true
                    }
                }
            }
        };

        new Chart(ctx, config);
    </script>
</body>
</html>
