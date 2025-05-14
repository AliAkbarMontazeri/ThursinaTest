<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data Santri') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                <form action="{{ route('santri.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label class="block font-bold mb-2">NIS</label>
                        <input type="text" name="nis" class="w-full border rounded px-3 py-2" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold mb-2">Nama</label>
                        <input type="text" name="nama_santri" class="w-full border rounded px-3 py-2" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold mb-2">Alamat</label>
                        <input type="text" name="alamat" class="w-full border rounded px-3 py-2" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold mb-2">Asrama Id</label>
                        <input type="text" name="asrama_id" class="w-full border rounded px-3 py-2" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold mb-2">Total Paket Diterima</label>
                        <input type="text" name="total_paket_diterima" class="w-full border rounded px-3 py-2" required>
                    </div>

                    <button type="submit"
                        class="bg-green-500 hover:bg-green-600 text-black font-bold py-2 px-4 rounded">
                        Simpan
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>