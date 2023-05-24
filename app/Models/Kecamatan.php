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

    public function ktp()
    {
        return $this->hasMany(Ktp::class, 'kecamatan_id', 'id');
    }
}
