<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    public function asrama()
    {
        return $this->belongsTo(Asrama::class);
    }

    public function paket()
    {
        return $this->hasMany(KategoriPaket::class, 'santri_nis', 'nis');
    }

}
