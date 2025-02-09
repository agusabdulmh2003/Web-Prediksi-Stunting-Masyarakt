<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Prediksi Stunting</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            text-align: center;
            padding: 20px;
        }
        .container {
            background: white;
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        .result {
            font-size: 24px;
            font-weight: bold;
            margin: 20px 0;
            padding: 10px;
            border-radius: 5px;
        }
        .stunting {
            background-color: #ff4d4d;
            color: white;
        }
        .normal {
            background-color: #4caf50;
            color: white;
        }
        .back-btn {
            display: inline-block;
            text-decoration: none;
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            transition: 0.3s;
        }
        .back-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hasil Prediksi Stunting</h1>
        <p class="result {{ $prediksi == 'Stunting' ? 'stunting' : 'normal' }}">
            {{ $prediksi }}
        </p>
        <a href="{{ url('/form') }}" class="back-btn">Kembali ke Form</a>
    </div>
</body>
</html>
