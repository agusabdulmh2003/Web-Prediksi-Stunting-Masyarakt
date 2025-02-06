<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Perkembangan Anak</title>
</head>
<body>
    <h1>Monitoring Perkembangan Anak</h1>
    <table border="1">
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
                    <td>{{ $data->status_gizi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
