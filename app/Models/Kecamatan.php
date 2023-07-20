<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kecamatan'
    ];

    public function kartukel()
    {
        return $this->hasMany(KartuKK::class, 'kecamatan_id', 'id');
    }

    // public function ktp()
    // {
    //     return $this->hasMany(Ktp::class, 'kecamatan_id', 'id');
    // }
}
