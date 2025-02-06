<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StuntingController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function submitForm(Request $request)
    {
        // Kirim data ke API Flask untuk prediksi
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

        // Ambil hasil prediksi
        $result = $response->json();
        
        return view('hasil_prediksi', ['prediksi' => $result['prediksi']]);
    }
    // laporan
    public function showReport()
{
    $prediksi = \DB::table('prediksi')
                    ->join('anak', 'prediksi.anak_id', '=', 'anak.id')
                    ->select('anak.nama', 'prediksi.hasil_prediksi', 'prediksi.skor_risiko', 'prediksi.created_at')
                    ->get();

    return view('laporan', ['prediksi' => $prediksi]);
}

//chart 
public function showVisualization()
{
    // Mengambil data prediksi dari database
    $stunting = \DB::table('prediksi')
                    ->where('hasil_prediksi', 'Stunting')
                    ->count();
    
    $tidak_stunting = \DB::table('prediksi')
                          ->where('hasil_prediksi', 'Tidak Stunting')
                          ->count();

    return view('visualisasi', compact('stunting', 'tidak_stunting'));
}


// monitoring 
public function storeMonitoring(Request $request)
{
    $request->validate([
        'anak_id' => 'required',
        'tanggal' => 'required|date',
        'berat_badan' => 'required|numeric',
        'tinggi_badan' => 'required|numeric',
        'lingkar_kepala' => 'required|numeric',
        'status_gizi' => 'required|string',
    ]);

    \DB::table('monitoring')->insert([
        'anak_id' => $request->anak_id,
        'tanggal' => $request->tanggal,
        'berat_badan' => $request->berat_badan,
        'tinggi_badan' => $request->tinggi_badan,
        'lingkar_kepala' => $request->lingkar_kepala,
        'status_gizi' => $request->status_gizi,
    ]);

    return redirect()->back()->with('success', 'Data monitoring berhasil disimpan!');
}

public function showMonitoring($anak_id)
{
    $monitoring = \DB::table('monitoring')
                     ->where('anak_id', $anak_id)
                     ->get();

    return view('monitoring', ['monitoring' => $monitoring]);
}


}

