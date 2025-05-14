<?php

namespace App\Imports;

use App\Models\Santri;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SantriImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    // public function headingRow(): int
    // {
    //     return 1; // baris pertama sebagai heading
    // }

    public function model(array $row)
    {
        return new Santri([
            'nis' => $row['nis'],
            'nama_santri' => $row['nama_santri'],
            'alamat' => $row['alamat'],
            'asrama_id' => $row['asrama_id'],
            'total_paket_diterima' => $row['total_paket_diterima'],
        ]);
    }
}
