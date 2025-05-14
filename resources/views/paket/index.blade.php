@extends('layouts.table')

@section('title', 'Data Santri')

@section('subtitle')
    Rekapan data santri
@endsection

@section('table-title', 'Tabel Data Santri')

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

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Paket') }}
        </h2>
    </x-slot>

    <div class="container">
        <h2>Daftar Paket</h2>

        <a href="{{ route('paket.create') }}" class="btn btn-primary">Tambah Paket</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Paket</th>
                    <th>Kategori</th>
                    <th>Jumlah</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pakets as $paket)
                    <tr>
                        <td>{{ $paket->id }}</td>
                        <td>{{ $paket->nama }}</td>
                        <td>{{ $paket->kategori }}</td>
                        <td>{{ $paket->jumlah }}</td>
                        <td>
                            <a href="{{ route('paket.edit', $paket->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('paket.destroy', $paket->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>