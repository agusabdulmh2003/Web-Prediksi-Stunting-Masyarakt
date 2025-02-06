<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Prediksi Stunting</title>
</head>
<body>
    <h1>Laporan Prediksi Stunting</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nama Anak</th>
                <th>Hasil Prediksi</th>
                <th>Skor Risiko</th>
                <th>Tanggal Prediksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prediksi as $data)
                <tr>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->hasil_prediksi }}</td>
                    <td>{{ $data->skor_risiko }}</td>
                    <td>{{ $data->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
