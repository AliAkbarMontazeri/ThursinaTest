<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Santri') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-bold mb-4">Daftar Santri</h3>

                <form action="{{ route('santri.import') }}" method="POST" enctype="multipart/form-data" class="mb-4">
                    @csrf
                    <input type="file" name="file" required>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded ml-2 hover:bg-blue-700">
                        Import Excel
                    </button>
                </form>

                <a href="{{ route('santri.export') }}"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">
                    Export Excel
                </a>

                <a href="{{ route('santri.create') }}"
                    class="inline-block mb-4 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                    + Tambah Santri
                </a>

                <table class="table-auto w-full border">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="px-4 py-2 border">NIS</th>
                            <th class="px-4 py-2 border">Nama</th>
                            <th class="px-4 py-2 border">Alamat</th>
                            <th class="px-4 py-2 border">Asrama Id</th>
                            <th class="px-4 py-2 border">Total Paket</th>
                            <th class="px-4 py-2 border">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($santris as $santri)
                            <tr>
                                <td class="border px-4 py-2">{{ $santri->nis }}</td>
                                <td class="border px-4 py-2">{{ $santri->nama_santri }}</td>
                                <td class="border px-4 py-2">{{ $santri->alamat }}</td>
                                <td class="border px-4 py-2">{{ $santri->asrama_id }}</td>
                                <td class="border px-4 py-2">{{ $santri->total_paket_diterima }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('santri.show', $santri->nis) }}"
                                        class="text-green-500 hover:text-green-700 font-semibold mr-2">Detail</a>
                                    <a href="{{ route('santri.edit', $santri->nis) }}"
                                        class="text-blue-500 hover:text-blue-700 font-semibold">Edit</a>
                                    <form action="{{ route('santri.destroy', $santri->nis) }}" method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus santri ini?')"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-red-500 hover:text-red-700 font-semibold ml-2">Hapus</button>
                                    </form>
                                </td>


                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>