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
        Schema::create('ktps', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 150)->required();
            $table->string('nama', 200)->required();
            $table->string('tmp_lahir', 100)->required();
            $table->string('tgl_lahir', 50)->required();
            $table->string('gender', 50)->required();
            $table->string('gol_darah', 100)->required();
            $table->string('alamat', 100)->required();
            $table->string('rt', 100)->required();
            $table->string('kelurahan', 100)->required();
            $table->string('agaman', 100)->required();
            $table->string('status', 100)->required();
            $table->string('pekerjaan', 150)->required();
            $table->string('warga_negara', 100)->required();
            $table->string('gambar', 200)->required();
            $table->string('berkas', 200)->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ktps');
    }
};
