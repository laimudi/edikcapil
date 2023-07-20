<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuKK extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nomor_kk',
        'nm_kl',
        'alamat',
        'rt',
        'kode_pos',
        'kelurahan',
        'kecamatan_id',
        'kabupaten',
        'provinsi',
        'nama',
        'nik',
        'gender',
        'tmp_lahir',
        'tgl_lahir',
        'agaman',
        'pendidikan',
        'pekerjaan',
        'status',
        'status_kk',
        'warga_negara',
        'nomor_ps',
        'nomor_kitap',
        'nm_ayah',
        'nm_ibu',
        'berkas'
    ];

    /**
     * Get the kartukel that owns the KartuKK
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
