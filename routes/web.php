<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Http\Controllers\StuntingController;

Route::post('/prediksi', function (Request $request) {
    $validated = $request->validate([
        'umur' => 'required|integer',
        'berat_badan' => 'required|numeric',
        'tinggi_badan' => 'required|numeric',
        'lingkar_kepala' => 'required|numeric',
        'asupan_gizi' => 'required|string',
        'sanitasi' => 'required|string',
        'akses_air_bersih' => 'required|string',
        'pola_makan_keluarga' => 'required|string',
        'status_kesehatan_ibu' => 'required|string',
        'pendidikan_ibu' => 'required|string',
        'pendapatan_keluarga' => 'required|numeric',
    ]);

    // Kirim data yang sudah tervalidasi ke API
    $response = Http::post('http://localhost:5000/predict', $validated);
    
    return $response->json();
});


//form
Route::get('/form', [StuntingController::class, 'showForm']);
Route::post('/submit-form', [StuntingController::class, 'submitForm']);
//laporan
Route::get('/laporan', [StuntingController::class, 'showReport']);
//chat
Route::get('/visualisasi', [StuntingController::class, 'showVisualization']);
// monitoring
Route::get('/monitoring/{anak_id}', [StuntingController::class, 'showMonitoring']);

// Route::post('/prediksi', function (Request $request) {
//     $response = Http::post('http://localhost:5000/predict', [
//         'umur' => $request->umur,
//         'berat_badan' => $request->berat_badan,
//         'tinggi_badan' => $request->tinggi_badan,
//         'lingkar_kepala' => $request->lingkar_kepala,
//         'asupan_gizi' => $request->asupan_gizi,
//         'sanitasi' => $request->sanitasi,
//         'akses_air_bersih' => $request->akses_air_bersih,
//         'pola_makan_keluarga' => $request->pola_makan_keluarga,
//         'status_kesehatan_ibu' => $request->status_kesehatan_ibu,
//         'pendidikan_ibu' => $request->pendidikan_ibu,
//         'pendapatan_keluarga' => $request->pendapatan_keluarga,
//     ]);
    
//     return $response->json();
// });
