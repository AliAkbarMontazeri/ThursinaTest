@extends('layouts.table')

@section('title', 'Data Santri')

@section('subtitle')
    Rekapan data santri
@endsection

@section('table-title', content: 'Tabel Data Santri')

@section('import-export')
    <form action="{{ route('santri.import') }}" method="POST" enctype="multipart/form-data" class="mb-4">
        @csrf
        <input type="file" name="file" required>
        <button type="submit" class="btn btn-primary btn-icon-split btn-sm">
            <span class="text">Import</span>
        </button>
    </form>
    <a href="{{ route('santri.export') }}" class="btn btn-success btn-icon-split btn-sm">
        <span class="text">Export Excel</span>
    </a>

    <a href="{{ route('santri.create') }}" class="btn btn-info btn-icon-split btn-sm">
        <span class="text">+ Tambah Santri</span>
    </a>
@endsection

@section('content')
    <thead>
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Asrama Id</th>
            <th>Total Paket</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Asrama Id</th>
            <th>Total Paket</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
        @foreach ($santris as $santri)
            <tr>
                <td class="border px-4 py-2">{{ $santri->nis }}</td>
                <td class="border px-4 py-2">{{ $santri->nama_santri }}</td>
                <td class="border px-4 py-2">{{ $santri->alamat }}</td>
                <td class="border px-4 py-2">{{ $santri->asrama_id }}</td>
                <td class="border px-4 py-2">{{ $santri->total_paket_diterima }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('santri.show', $santri->nis) }}" class="btn btn-primary btn-icon-split btn-sm">
                        <span class="text">Detail</span>
                    </a>
                    <a href="{{ route('santri.edit', $santri->nis) }}" class="btn btn-warning btn-icon-split btn-sm">
                        <span class="text">Edit</span>
                    </a>
                    <form action="{{ route('santri.destroy', $santri->nis) }}" method="POST"
                        onsubmit="return confirm('Yakin ingin menghapus santri ini?')" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-icon-split btn-sm">
                            <span class="text">Hapus</span>
                        </button>
                    </form>

                </td>
            </tr>
        @endforeach
    </tbody>
@endsection