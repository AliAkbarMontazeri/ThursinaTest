<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Santri') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 bg-white shadow-sm rounded p-6">
            <p><strong>NIS:</strong> {{ $santri->nis }}</p>
            <p><strong>Nama:</strong> {{ $santri->nama_santri }}</p>
            <p><strong>Alamat:</strong> {{ $santri->alamat }}</p>
            <p><strong>Asrama Id:</strong> {{ $santri->asrama_id }}</p>
            <p><strong>Paket Diterima:</strong> {{ $santri->total_paket_diterima }}</p>

            <a href="{{ route('santri.pdf', $santri->nis) }}"
                class="mt-4 inline-block bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">
                Download PDF
            </a>
        </div>
    </div>
</x-app-layout>