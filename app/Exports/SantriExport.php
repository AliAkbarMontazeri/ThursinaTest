<?php

namespace App\Exports;

use App\Models\Santri;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SantriExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Santri::all();
    }

    public function map($santri): array
    {
        return [
            $santri->nis,
            $santri->nama_santri,
            $santri->alamat,
            $santri->asrama_id,
            $santri->total_paket_diterima,
        ];
    }

    public function headings(): array
    {
        return [
            'NIS',
            'Nama',
            'Alamat',
            'Asrama Id',
            'Total Paket Diterima',
        ];
    }
}