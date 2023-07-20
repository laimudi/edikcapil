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
            $table->string('nik', 150)->nullable();
            $table->string('nama', 200)->nullable();
            $table->string('tmp_lahir', 100)->nullable();
            $table->string('tgl_lahir', 50)->nullable();
            $table->string('gender', 50)->nullable();
            $table->string('gol_darah', 100)->nullable();
            $table->string('alamat', 100)->nullable();
            $table->string('rt', 100)->nullable();
            $table->string('kelurahan', 100)->nullable();
            $table->foreignId('kecamatan_id')->constrained();
            $table->string('agaman', 100)->nullable();
            $table->string('status', 100)->nullable();
            $table->string('pekerjaan', 150)->nullable();
            $table->string('warga_negara', 100)->nullable();
            $table->string('gambar', 200)->nullable();
            $table->string('berkas', 200)->nullable();
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
