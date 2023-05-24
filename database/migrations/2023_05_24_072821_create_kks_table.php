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
            $table->string('nomor_kk', 20)->reuquired();
            $table->string('nm_kl', 150)->reuquired();
            $table->string('alamat', 100)->reuquired();
            $table->string('rt', 100)->required();
            $table->string('kode_pos', 50)->reuquired();
            $table->string('kelurahan', 100)->required();
            $table->string('kabupaten', 100)->required();
            $table->string('provinsi', 100)->required();
            $table->string('nama', 200)->required();
            $table->string('nik', 150)->required();
            $table->string('gender', 50)->required();
            $table->string('tmp_lahir', 100)->required();
            $table->string('tgl_lahir', 50)->required();
            $table->string('agaman', 100)->required();
            $table->string('pendidikan', 100)->reuired();
            $table->string('pekerjaan', 150)->required();
            $table->string('status', 100)->required();
            $table->string('status_kk', 50)->reuquired();
            $table->string('warga_negara', 100)->required();
            $table->string('nomor_ps', 20)->reuquired();
            $table->string('nomor_kitap', 20)->reuquired();
            $table->string('nm_ayah', 150)->required();
            $table->string('nm_ibu', 150)->required();
            $table->string('berkas', 150)->required();
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
