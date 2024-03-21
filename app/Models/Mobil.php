<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $fillable = ['foto', 'merek', 'model', 'no_plat', 'tarif', 'kapasitas', 'status', 'keterangan'];

    // Relasi dengan model Pengguna
    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }

    // Fungsi untuk mendapatkan data mobil berdasarkan merek dan model
    public static function getByMerekAndModel($merek, $model)
    {
        return self::where('merek', $merek)->where('model', $model)->first();
    }
}



