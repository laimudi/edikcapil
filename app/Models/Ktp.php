<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ktp extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik',
        'nama',
        'tmp_lahir',
        'tgl_lahir',
        'gender',
        'gol_darah',
        'alamat',
        'rt',
        'kelurahan',
        'kecamatan_id',
        'agama',
        'status',
        'pekerjaan',
        'warga_negara',
        'gambar',
        'berkas'
    ];

    function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id', 'id');
    }
}
