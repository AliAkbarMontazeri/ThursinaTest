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
            'nama' => $row['nama'],
            'nis' => $row['nis'],
            'kelas' => $row['kelas'],
            'asrama' => $row['asrama'],
            'no_hp' => $row['no_hp'],
        ]);
    }
}
