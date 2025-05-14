<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Santri') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 bg-white shadow-sm rounded p-6">
            <p><strong>Nama:</strong> {{ $santri->nama }}</p>
            <p><strong>NIS:</strong> {{ $santri->nis }}</p>
            <p><strong>Kelas:</strong> {{ $santri->kelas }}</p>
            <p><strong>Asrama:</strong> {{ $santri->asrama }}</p>
            <p><strong>No HP:</strong> {{ $santri->no_hp }}</p>

            <a href="{{ route('santri.pdf', $santri->id) }}"
                class="mt-4 inline-block bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">
                Download PDF
            </a>
        </div>
    </div>
</x-app-layout>