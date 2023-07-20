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
        Schema::create('kks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('nomor_kk', 20)->nullable();
            $table->string('nm_kl', 150)->nullable();
            $table->string('alamat', 100)->nullable();
            $table->string('rt', 100)->nullable();
            $table->string('kode_pos', 50)->nullable();
            $table->string('kelurahan', 100)->nullable();
            $table->foreignId('kecamatan_id')->constrained();
            $table->string('kabupaten', 100)->nullable();
            $table->string('provinsi', 100)->nullable();
            $table->string('nama', 200)->nullable();
            $table->string('nik', 150)->nullable();
            $table->string('gender', 50)->nullable();
            $table->string('tmp_lahir', 100)->nullable();
            $table->string('tgl_lahir', 50)->nullable();
            $table->string('agaman', 100)->nullable();
            $table->string('pendidikan', 100)->reuired();
            $table->string('pekerjaan', 150)->nullable();
            $table->string('status', 100)->nullable();
            $table->string('status_kk', 50)->nullable();
            $table->string('warga_negara', 100)->nullable();
            $table->string('nomor_ps', 20)->nullable();
            $table->string('nomor_kitap', 20)->nullable();
            $table->string('nm_ayah', 150)->nullable();
            $table->string('nm_ibu', 150)->nullable();
            $table->string('berkas', 150)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kks');
    }
};
