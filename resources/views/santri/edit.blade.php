<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Santri') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                <form action="{{ route('santri.update', $santri->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block font-bold mb-2">Nama</label>
                        <input type="text" name="nama" value="{{ $santri->nama }}"
                            class="w-full border rounded px-3 py-2" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold mb-2">NIS</label>
                        <input type="text" name="nis" value="{{ $santri->nis }}" class="w-full border rounded px-3 py-2"
                            required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold mb-2">Kelas</label>
                        <input type="text" name="kelas" value="{{ $santri->kelas }}"
                            class="w-full border rounded px-3 py-2" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold mb-2">Asrama</label>
                        <input type="text" name="asrama" value="{{ $santri->asrama }}"
                            class="w-full border rounded px-3 py-2" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold mb-2">No HP</label>
                        <input type="text" name="no_hp" value="{{ $santri->no_hp }}"
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