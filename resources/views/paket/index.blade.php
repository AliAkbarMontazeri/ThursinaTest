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