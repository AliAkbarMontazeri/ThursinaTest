<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    protected $primaryKey = 'nis';
    public $incrementing = true; // false jika bukan auto increment
    protected $keyType = 'int'; // atau 'string' jika bukan angka

    protected $fillable = [
        'nis',
        'nama_santri',
        'alamat',
        'asrama_id',
        'total_paket_diterima'
    ];

    public function asrama()
    {
        return $this->belongsTo(Asrama::class);
    }

    public function paket()
    {
        return $this->hasMany(Paket::class, 'santri_nis', 'nis');
    }

    public function getRouteKeyName()
    {
        return 'nis';
    }

}
