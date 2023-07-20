<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akta extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nik',
        'nama',
        'tmp_lahir',
        'tgl_lahir',
        'thn_lahir',
        'gender',
        'anak',
        'nm_ayah',
        'nm_ibu',
        'berkas'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
