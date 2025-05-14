<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Paket') }}
        </h2>
    </x-slot>

    <div class="container">
        <h2>Edit Paket</h2>

        <form action="{{ route('paket.update', $paket->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama Paket</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ $paket->nama }}" required>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" name="kategori" id="kategori" class="form-control" value="{{ $paket->kategori }}"
                    required>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="number" name="jumlah" id="jumlah" class="form-control" value="{{ $paket->jumlah }}"
                    required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>
    </div>
</x-app-layout>