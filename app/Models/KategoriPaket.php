<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriPaket extends Model
{
    public function santri()
    {
        return $this->belongsTo(Santri::class, 'santri_nis', 'nis');
    }

    public function kategoriPaket()
    {
        return $this->belongsTo(KategoriPaket::class, 'kategori_paket_id');
    }
}
