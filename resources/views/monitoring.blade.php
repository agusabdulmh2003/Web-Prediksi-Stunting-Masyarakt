<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Perkembangan Anak</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            text-align: center;
            padding: 20px;
        }
        .container {
            background: white;
            max-width: 800px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .status {
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .good {
            background-color: #4caf50;
            color: white;
        }
        .warning {
            background-color: #ff9800;
            color: white;
        }
        .danger {
            background-color: #f44336;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Monitoring Perkembangan Anak</h1>
        <table>
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Berat Badan (kg)</th>
                    <th>Tinggi Badan (cm)</th>
                    <th>Lingkar Kepala (cm)</th>
                    <th>Status Gizi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($monitoring as $data)
                    <tr>
                        <td>{{ $data->tanggal }}</td>
                        <td>{{ $data->berat_badan }}</td>
                        <td>{{ $data->tinggi_badan }}</td>
                        <td>{{ $data->lingkar_kepala }}</td>
                        <td class="status {{ $data->status_gizi == 'Baik' ? 'good' : ($data->status_gizi == 'Kurang' ? 'warning' : 'danger') }}">
                            {{ $data->status_gizi }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>