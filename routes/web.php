<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

Route::post('/prediksi', function (Request $request) {
    $response = Http::post('http://localhost:5000/predict', [
        'umur' => $request->umur,
        'berat_badan' => $request->berat_badan,
        'tinggi_badan' => $request->tinggi_badan,
        'lingkar_kepala' => $request->lingkar_kepala,
        'asupan_gizi' => $request->asupan_gizi,
        'sanitasi' => $request->sanitasi,
        'akses_air_bersih' => $request->akses_air_bersih,
        'pola_makan_keluarga' => $request->pola_makan_keluarga,
        'status_kesehatan_ibu' => $request->status_kesehatan_ibu,
        'pendidikan_ibu' => $request->pendidikan_ibu,
        'pendapatan_keluarga' => $request->pendapatan_keluarga,
    ]);
    
    return $response->json();
});
