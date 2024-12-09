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
        const ctx = document.getElementById('doughnutChart').getContext('2d');

        const data = {
            labels: ['Norway', 'England', 'Argentina', 'Spain', 'Georgia', 'Germany', 'France', 'Uruguay'],
            datasets: [{
                label: 'Num of Players in Country',
                data: [1, 1, 1, 1, 1, 1, 1, 2],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.6)',  
                    'rgba(54, 162, 235, 0.6)',  
                    'rgba(255, 206, 86, 0.6)',  
                    'rgba(75, 192, 192, 0.6)',  
                    'rgba(153, 102, 255, 0.6)',  
                    'rgba(255, 159, 64, 0.6)',  
                    'rgba(201, 203, 207, 0.6)',  
                    'rgba(100, 255, 100, 0.6)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 0.6)',  
                    'rgba(54, 162, 235, 0.6)',  
                    'rgba(255, 206, 86, 0.6)',  
                    'rgba(75, 192, 192, 0.6)',  
                    'rgba(153, 102, 255, 0.6)',  
                    'rgba(255, 159, 64, 0.6)',  
                    'rgba(201, 203, 207, 0.6)',  
                    'rgba(100, 255, 100, 0.6)'
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
