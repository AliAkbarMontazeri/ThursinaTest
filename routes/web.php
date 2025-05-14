<?php

use App\Exports\SantriExport;
use App\Http\Controllers\ProfileController;
use App\Imports\SantriImport;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriController;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\KategoriPaketController;

// Santri route
Route::resource('santri', SantriController::class)->middleware('auth');

Route::get('/santri/{id}/pdf', [SantriController::class, 'exportPDF'])->name('santri.pdf')->middleware('auth');

Route::get('santri-export', function () {
    return Excel::download(new SantriExport, 'data-santri.xlsx');
})->name('santri.export')->middleware('auth');

Route::post('santri-import', function (\Illuminate\Http\Request $request) {
    Excel::import(new SantriImport, $request->file('file'));
    return back()->with('success', 'Import berhasil!');
})->name('santri.import')->middleware('auth');

// ---

// Paket route
Route::resource('paket', KategoriPaketController::class)->middleware('auth');

//---

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
