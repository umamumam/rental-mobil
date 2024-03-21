<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'email', 'alamat', 'telepon', 'nomor_sim', 'jenis_pengguna'];

    // Relasi dengan model Mobil
    public function mobils()
    {
        return $this->hasMany(Mobil::class);
    }
}
