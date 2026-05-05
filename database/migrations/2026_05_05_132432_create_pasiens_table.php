<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
        $table->string('no_rekam_medis')->unique(); // Contoh: RM-001
        $table->string('nama_pasien');
        $table->string('jenis_kelamin');             // Contoh: Laki-laki, Perempuan
        $table->integer('umur');
        $table->timestamps();                        // created_at & updated_at otomatis
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
