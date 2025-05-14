<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Santri') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                <form action="{{ route('santri.update', $santri->nis) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block font-bold mb-2">NIS</label>
                        <input type="text" name="nis" value="{{ $santri->nis }}" class="w-full border rounded px-3 py-2"
                            required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold mb-2">Nama</label>
                        <input type="text" name="nama_santri" value="{{ $santri->nama_santri }}"
                            class="w-full border rounded px-3 py-2" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold mb-2">Alamat</label>
                        <input type="text" name="alamat" value="{{ $santri->alamat }}"
                            class="w-full border rounded px-3 py-2" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold mb-2">Asrama Id</label>
                        <input type="text" name="asrama_id" value="{{ $santri->asrama_id }}"
                            class="w-full border rounded px-3 py-2" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold mb-2">Total Paket Diterima</label>
                        <input type="text" name="total_paket_diterima" value="{{ $santri->total_paket_diterima }}"
                            class="w-full border rounded px-3 py-2">
                    </div>

                    <button type="submit"
                        class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">
                        Update
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>