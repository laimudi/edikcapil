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
        Schema::create('aktas', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 150)->required();
            $table->string('nama', 200)->required();
            $table->string('tmp_lahir', 100)->required();
            $table->string('tgl_lahir', 50)->required();
            $table->string('thn_lahir', 50)->required();
            $table->string('gender', 50)->required();
            $table->string('anak', 10)->required();
            $table->string('nm_ayah', 200)->required();
            $table->string('nm_ibu', 200)->required();
            $table->string('berkas', 200)->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aktas');
    }
};
