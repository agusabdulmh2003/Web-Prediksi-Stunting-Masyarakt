<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualisasi Prediksi Stunting</title>
</head>
<body>
    <h1>Visualisasi Prediksi Stunting</h1>
    <canvas id="prediksiChart" width="400" height="200"></canvas>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('prediksiChart').getContext('2d');
        var prediksiChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Stunting', 'Tidak Stunting'],
                datasets: [{
                    label: 'Jumlah Anak',
                    data: [{{ $stunting }}, {{ $tidak_stunting }}],
                    backgroundColor: ['red', 'green'],
                    borderColor: ['darkred', 'darkgreen'],
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
</body>
</html>
