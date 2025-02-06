<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Prediksi Stunting</title>
</head>
<body>
    <h1>Form Prediksi Stunting</h1>
    <form action="{{ url('/submit-form') }}" method="POST">
        @csrf
        <label>Nama Anak:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Umur (dalam bulan):</label><br>
        <input type="number" name="umur" required><br><br>

        <label>Berat Badan (kg):</label><br>
        <input type="number" step="any" name="berat_badan" required><br><br>

        <label>Tinggi Badan (cm):</label><br>
        <input type="number" step="any" name="tinggi_badan" required><br><br>

        <label>Lingkar Kepala (cm):</label><br>
        <input type="number" step="any" name="lingkar_kepala" required><br><br>

        <label>Asupan Gizi (skala 1-10):</label><br>
        <input type="number" name="asupan_gizi" min="1" max="10" required><br><br>

        <label>Sanitasi:</label><br>
        <select name="sanitasi" required>
            <option value="Baik">Baik</option>
            <option value="Buruk">Buruk</option>
        </select><br><br>

        <label>Akses Air Bersih:</label><br>
        <select name="akses_air_bersih" required>
            <option value="Ada">Ada</option>
            <option value="Tidak Ada">Tidak Ada</option>
        </select><br><br>

        <label>Pola Makan Keluarga:</label><br>
        <select name="pola_makan_keluarga" required>
            <option value="Sehat">Sehat</option>
            <option value="Tidak Sehat">Tidak Sehat</option>
        </select><br><br>

        <label>Status Kesehatan Ibu:</label><br>
        <select name="status_kesehatan_ibu" required>
            <option value="Sehat">Sehat</option>
            <option value="Tidak Sehat">Tidak Sehat</option>
        </select><br><br>

        <label>Pendidikan Ibu:</label><br>
        <select name="pendidikan_ibu" required>
            <option value="Tidak Tamat">Tidak Tamat</option>
            <option value="Tamat SD">Tamat SD</option>
            <option value="Tamat SMP">Tamat SMP</option>
            <option value="Tamat SMA">Tamat SMA</option>
            <option value="Tamat Perguruan Tinggi">Tamat Perguruan Tinggi</option>
        </select><br><br>

        <label>Pendapatan Keluarga (per bulan):</label><br>
        <input type="number" step="any" name="pendapatan_keluarga" required><br><br>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>
