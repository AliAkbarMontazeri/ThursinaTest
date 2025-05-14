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
            $santri->nama,
            $santri->nis,
            $santri->kelas,
            $santri->asrama,
            $santri->no_hp,
        ];
    }

    public function headings(): array
    {
        return [
            'Nama',
            'NIS',
            'Kelas',
            'Asrama',
            'No HP',
        ];
    }
}