<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('monitoring', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('anak_id');
        $table->date('tanggal');
        $table->float('berat_badan');
        $table->float('tinggi_badan');
        $table->float('lingkar_kepala');
        $table->string('status_gizi');
        $table->timestamps();

        // Menambahkan foreign key
        $table->foreign('anak_id')->references('id')->on('anak');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monitoring');
    }
};
