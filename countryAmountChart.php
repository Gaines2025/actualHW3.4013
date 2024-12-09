<h1>Percentage of Players in Country</h1>
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
        // Get the context of the canvas
        const ctx = document.getElementById('doughnutChart').getContext('2d');

        // Data for the Doughnut Chart
        const data = {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple'],
            datasets: [{
                label: 'Dataset 1',
                data: [300, 50, 100, 40, 120],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(255, 206, 86, 0.6)',
                    'rgba(75, 192, 192, 0.6)',
                    'rgba(153, 102, 255, 0.6)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        };

        // Configuration for the Doughnut Chart
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

        // Render the Doughnut Chart
        new Chart(ctx, config);
    </script>
</body>
</html>
