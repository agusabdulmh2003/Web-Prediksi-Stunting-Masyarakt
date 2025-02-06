<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prediksi extends Model
{
    use HasFactory;

    protected $table = 'prediksi'; // Sesuaikan dengan nama tabel Anda
    protected $fillable = ['hasil_prediksi'];
}
