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
            $table->foreignId('user_id')->constrained();
            $table->string('nik', 150)->nullable();
            $table->string('nama', 200)->nullable();
            $table->string('tmp_lahir', 100)->nullable();
            $table->string('tgl_lahir', 50)->nullable();
            $table->string('thn_lahir', 50)->nullable();
            $table->string('gender', 50)->nullable();
            $table->string('anak', 10)->nullable();
            $table->string('nm_ayah', 200)->nullable();
            $table->string('nm_ibu', 200)->nullable();
            $table->string('berkas', 200)->nullable();
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
