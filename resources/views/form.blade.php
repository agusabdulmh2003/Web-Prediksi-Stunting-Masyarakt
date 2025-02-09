<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Prediksi Stunting</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
            transition: 0.3s;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Prediksi Stunting</h1>
        <form action="{{ url('/submit-form') }}" method="POST">
            @csrf
            <label>Nama Anak:</label>
            <input type="text" name="nama" required>

            <label>Umur (bulan):</label>
            <input type="number" name="umur" required>

            <label>Berat Badan (kg):</label>
            <input type="number" step="any" name="berat_badan" required>

            <label>Tinggi Badan (cm):</label>
            <input type="number" step="any" name="tinggi_badan" required>

            <label>Lingkar Kepala (cm):</label>
            <input type="number" step="any" name="lingkar_kepala" required>

            <label>Asupan Gizi (1-10):</label>
            <input type="number" name="asupan_gizi" min="1" max="10" required>

            <label>Sanitasi:</label>
            <select name="sanitasi" required>
                <option value="Baik">Baik</option>
                <option value="Buruk">Buruk</option>
            </select>

            <label>Akses Air Bersih:</label>
            <select name="akses_air_bersih" required>
                <option value="Ada">Ada</option>
                <option value="Tidak Ada">Tidak Ada</option>
            </select>

            <label>Pola Makan Keluarga:</label>
            <select name="pola_makan_keluarga" required>
                <option value="Sehat">Sehat</option>
                <option value="Tidak Sehat">Tidak Sehat</option>
            </select>

            <label>Status Kesehatan Ibu:</label>
            <select name="status_kesehatan_ibu" required>
                <option value="Sehat">Sehat</option>
                <option value="Tidak Sehat">Tidak Sehat</option>
            </select>

            <label>Pendidikan Ibu:</label>
            <select name="pendidikan_ibu" required>
                <option value="Tidak Tamat">Tidak Tamat</option>
                <option value="Tamat SD">Tamat SD</option>
                <option value="Tamat SMP">Tamat SMP</option>
                <option value="Tamat SMA">Tamat SMA</option>
                <option value="Tamat Perguruan Tinggi">Tamat Perguruan Tinggi</option>
            </select>

            <label>Pendapatan Keluarga (per bulan):</label>
            <input type="number" step="any" name="pendapatan_keluarga" required>

            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>
